<?php
require_once('inc/init.inc.php');

// traitement pour vider le panier : 
if(isset($_GET['action']) && $_GET['action'] == 'vider'){ // Si une action est demandée via l'URL et que cette action est 'vider'
	unset($_SESSION['panier']);
}
// je ne vide que la partie panier de la session pour que l'utilisateur reste connecté ! 

//traitement pour supprimer un produit : 
if(isset($_GET['action']) && $_GET['action']== 'suppression' ){ // S'il y a une action dans l'url qui est demandée et que cette action est suppression : 
	if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])){
		
		retirerProduit($_GET['id']);
	}
}

// TRAITEMENT POUR INCREMENTER UN PRODUIT
// Je peux incrémenter tant qu'il y a du stock. je dois donc aller chercher le stock dispo pour ce produit.
if(isset($_GET['action']) && $_GET['action'] == 'incrementation' ){
	if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])){

		// S'il y a une action d'incrémentation demandée dans l'URL et que l'ID est correct (non vide, et numérique), on va chercher dans la BDD le stock disponible pour ce produit.
		$resultat = $pdo -> prepare("SELECT stock FROM produit WHERE id_produit = :id");
		$resultat -> bindParam(':id', $_GET['id'], PDO::PARAM_INT);
		$resultat -> execute();

		if($resultat -> rowCount() > 0){ // Si le produit existe bien dans la BDD, je peux comparer son stock avec le stock actuellement dans le panier, et ainsi ajouter une unité au panier si disponible. Pour ce faire il me faut l'emplacement du produit dans mon array panier, array_search() me permet de le trouver.
			$produit = $resultat -> fetch(PDO::FETCH_ASSOC);
			$position = array_search($_GET['id'], $_SESSION['panier']['id_produit']);
			if($position !== FALSE){
				if($produit['stock'] >= $_SESSION['panier']['quantite'][$position] +1){
					$_SESSION['panier']['quantite'][$position] ++;
					header('location:panier.php');
				}
				else{// Si le stock dispo n'est pas supérieur à la quantité actuelle dans le panier, plus une unité, on préviens que le stock est limité et donc on n'incrémente pas.
					$error .= '<div class="alert alert-danger">Le stock du produit ' .  $_SESSION['panier']['titre'][$position]  . '  est limité !</div>';
				}
			}
		}
	}
}

// TRAITEMENT POUR LA DECREMENTATION
// Attention, on peut décrémenter la quantité d'un produit dans le panier tant que la quantité est supérieur à 0. Ensuite, il est préférable de supprimer entièrement la ligne.
if(isset($_GET['action']) && $_GET['action'] == 'decrementation' ){
	if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])){

		// Pour agir sur la quantité du produit dans le panier, il nous faut son emplacement dans le panier. Pour ce faire, array_search() nous retourne sa position.
		$position = array_search($_GET['id'], $_SESSION['panier']['id_produit']);

		if($position !== FALSE){
			if($_SESSION['panier']['quantite'][$position] > 1){
				// Si le produit existe dans le panier, et que sa quantité est supérieure à 1, je peux retiré une unité
				$_SESSION['panier']['quantite'][$position] --;
			}
			else{// Si sa quantité est inférieure à 1 dans ce cas, je supprime tout simplement la ligne.
				retirerProduit($_GET['id']);
				header('location:panier.php');
			}
		}
	}
}








//traitement pour payer une commande (FIN DE LA COMMANDE) $$$ :)
	// Vérifier que le stock est toujours dispo
		// Si c'est non : deux cas de figure :	
			// Stock inférieur à la commande :
				//-> Modifier la quantité
			// Stock nul : 
				//-> retirer le produit		
				
	// Enregistrer dans la BDD : 
		// table commande
		// table details_commande
		// table produit (retirer le stock commandé)

	// Envoyer un mail de confirmation à l'utilisateur
	
	
if($_POST && !empty($_SESSION['panier']['id_produit'])){ // Le bouton payer a été cliqué
	for($i = 0; $i < sizeof($_SESSION['panier']['id_produit']); $i++){
		
		$id_produit = $_SESSION['panier']['id_produit'][$i];
		$resultat = $pdo -> query("SELECT stock FROM produit WHERE id_produit = $id_produit");
		$produit = $resultat -> fetch(PDO::FETCH_ASSOC);
		
		if($produit['stock'] < $_SESSION['panier']['quantite'][$i]){ // PB : Le stock n'est pas suffisant ou nul!
			// pas suffisant :
			if($produit['stock'] > 0){
				$error .= '<div class="alert alert-danger">Le stock du produit <b>' . $_SESSION['panier']['titre'][$i] . '</b> n\'est pas suffisant, votre commande a été modifiée. Veuillez vérifier la nouvelle quantité avant de valider.</div>';
				$_SESSION['panier']['quantite'][$i] = $produit['stock'];
			}
			else{// stock nul !!!!!
				$error .= '<div class="alert alert-danger">Le produit <b>' . $_SESSION['panier']['titre'][$i] . '</b> n\'est plus disponible. Nous avons supprimé ce produit de votre panier.</div>';
				retirerProduit($_SESSION['panier']['id_produit'][$i]);
				
				$i--;
				// !!! ATTENTION !!
				//Etant donné que $i parcourt toutes les lignes du panier, lorsque je supprime une ligne, et que les suivantes remontent, $i risque d'en rater une. On doit donc OBLIGATOIREMENT, le décrémenter afin de corriger l'erreur !
			}
		}
	}// fin de la boucle FOR
	
	if(empty($error)){ // Tout est, les problèmes eventuels de stock sont gérés, on part du principe que le paiement est OK (callback de paypal ou autre système de paiement).
		//enregistrement dans la table commande :
		
		$id_membre = $_SESSION['membre']['id_membre'];
		$total = montantTotal();
	
		$resultat = $pdo -> exec("INSERT INTO commande (id_membre, montant, date_enregistrement, etat) VALUES ($id_membre, '$total', NOW(), 'en cours de traitement')");
		
		$id_commande = $pdo -> lastInsertId();
	
		// enregistrement dans la table  details_commande et modification des stocks dans la table produit;
		for($i = 0; $i < sizeof($_SESSION['panier']['id_produit']); $i++){
			
			$id_produit = $_SESSION['panier']['id_produit'][$i];
			$quantite = $_SESSION['panier']['quantite'][$i];
			$prix = $_SESSION['panier']['prix'][$i];
			
			// enregistrement des détails:
			$resultat = $pdo -> exec("INSERT INTO details_commande (id_commande, id_produit, quantite, prix) VALUES ($id_commande, $id_produit, $quantite, '$prix')");
			
			//modification du stock :
			$resultat = $pdo -> exec("UPDATE produit SET stock = (stock - $quantite) WHERE id_produit = $id_produit");	
		}// Fin de la boucle for	
		$error .= '<div class="alert alert-success">Félicitations ! Votre commande est terminée. Voici votre numéro de commande : <b>' . $id_commande . '</b></div>';
		unset($_SESSION['panier']);
		
		// envoyer un email à l'utilisateur :
		//mail() // Cf post/formulaire5.php pour l'envoie des emails.
		
	}//Fin du if(empty($error))
}// Fin du if($_POST)


$page="Panier";
require_once('inc/header.inc.php');

//debug($_SESSION['panier']);
echo "<div class='col-md-8 col-md-offset-2'>";
echo "<div class='alert alert-info text-center'><h2>Panier</h2></div>";
echo "<table class='table'>";
echo $error; 

echo "<tr><th>Photo</th><th>Titre</th><th>Quantité</th><th>Prix Unitaire</th><th>Total</th><th>Action</th></tr>";
if(empty($_SESSION['panier']['id_produit']))
{
	echo "<tr><td colspan='6'><div class='alert alert-danger text-center'>Votre panier est vide</div></td></tr>";	
}
else
{
	for($i = 0; $i < count($_SESSION['panier']['id_produit']); $i++)
	{
		
		echo '<tr>';
		echo '<td><img src="' . RACINE_SITE . 'photo/' . $_SESSION['panier']['photo'][$i] . '" height="50px" /></td>';
		echo '<td>' . $_SESSION['panier']['titre'][$i] . '</td>';
		//echo '<td>' . $_SESSION['panier']['id_produit'][$i] . '</td>';
		
		
		
		echo '<td><a href="?action=decrementation&id=' . $_SESSION['panier']['id_produit'][$i] . '"><i class="fas fa-minus-circle"></i></a>  ' . $_SESSION['panier']['quantite'][$i] . '  <a href="?action=incrementation&id=' . $_SESSION['panier']['id_produit'][$i] . '"><i class="fas fa-plus-circle"></i></a></td>';
		
		
		
		echo '<td>' . $_SESSION['panier']['prix'][$i] . ' €</td>';
		echo '<td>' . $_SESSION['panier']['prix'][$i]*$_SESSION['panier']['quantite'][$i] . ' €</td>';
		echo '<td><a href="?action=suppression&id=' . $_SESSION['panier']['id_produit'][$i] . '" OnClick="return(confirm(\'En êtes vous certain ?\'));"><span class="glyphicon glyphicon-trash"></span></a></td>';
		echo '</tr>';
	}
	
	//debug($_SESSION['panier']);
	
	echo "<tr><th colspan='4'>Total</th><td colspan='2'>" . montantTotal() . " €</td></tr>";
	if(userConnecte())
	{
		echo '<form method="post" action="">';
		echo '<tr><td colspan="6"><input type="submit" name="payer" class="col-md-12 btn btn-primary" value="Valider et déclarer le paiement"></td></tr>';
		echo '</form>';
	}
	else
	{
		echo '<tr><td colspan="6"><div class="col-md-12 alert alert-warning text-center">Veuillez vous <a href="inscription.php">inscrire</a> ou vous <a href="connexion.php"> connecter </a>afin de pouvoir payer</div></td></tr>';
	}
	
	
	echo '<tr><td colspan="6"><a href="?action=vider" OnClick="return(confirm(\'En êtes vous certain ?\'));"><span class="glyphicon glyphicon-trash"></span>  Vider mon panier</a></td></tr>';
}
echo "</table>";
echo "</div>";

require_once("inc/footer.inc.php");








