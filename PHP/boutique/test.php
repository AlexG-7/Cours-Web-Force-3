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
	if(isset($_GET['id_produit']) && !empty($_GET['id_produit']) && is_numeric($_GET['id_produit'])){

		// S'il y a une action d'incrémentation demandée dans l'URL et que l'ID est correct (non vide, et numérique), on va chercher dans la BDD le stock disponible pour ce produit.
		$resultat = $pdo -> prepare("SELECT stock FROM produit WHERE id_produit = :id_produit");
		$resultat -> bindParam(':id_produit', $_GET['id_produit'], PDO::PARAM_INT);
		$resultat -> execute();

		if($resultat -> rowCount() > 0){ // Si le produit existe bien dans la BDD, je peux comparer son stock avec le stock actuellement dans le panier, et ainsi ajouter une unité au panier si disponible. Pour ce faire il me faut l'emplacement du produit dans mon array panier, array_search() me permet de le trouver.
			$produit = $resultat -> fetch(PDO::FETCH_ASSOC);
			$position = array_search($_GET['id_produit'], $_SESSION['panier']['id_produit']);
			if($position !== FALSE){
				if($produit['stock'] >= $_SESSION['panier']['quantite'][$position] +1){
					$_SESSION['panier']['quantite'][$position] ++;
					header('location:panier.php');
				}
				else{// Si le stock dispo n'est pas supérieur à la quantité actuelle dans le panier, plus une unité, on préviens que le stock est limité et donc on n'incrémente pas.
					$error .= '<div class="erreur">Le stock du produit ' .  $_SESSION['panier']['titre'][$position]  . '  est limité !</div>';
				}
			}
		}
	}
}

// TRAITEMENT POUR LA DECREMENTATION
// Attention, on peut décrémenter la quantité d'un produit dans le panier tant que la quantité est supérieur à 0. Ensuite, il est préférable de supprimer entièrement la ligne.
if(isset($_GET['action']) && $_GET['action'] == 'decrementation' ){
	if(isset($_GET['id_produit']) && !empty($_GET['id_produit']) && is_numeric($_GET['id_produit'])){

		// Pour agir sur la quantité du produit dans le panier, il nous faut son emplacement dans le panier. Pour ce faire, array_search() nous retourne sa position.
		$position = array_search($_GET['id_produit'], $_SESSION['panier']['id_produit']);

		if($position !== FALSE){
			if($_SESSION['panier']['quantite'][$position] > 1){
				// Si le produit existe dans le panier, et que sa quantité est supérieure à 1, je peux retiré une unité
				$_SESSION['panier']['quantite'][$position] --;
			}
			else{// Si sa quantité est inférieure à 1 dans ce cas, je supprime tout simplement la ligne.
				retirerProduit($_GET['id_produit']);
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
				$error .= '<div class="erreur">Le stock du produit <b>' . $_SESSION['panier']['titre'][$i] . '</b> n\'est pas suffisant, votre commande a été modifiée. Veuillez vérifier la nouvelle quantité avant de valider.</div>';
				$_SESSION['panier']['quantite'][$i] = $produit['stock'];
			}
			else{// stock nul !!!!!
				$error .= '<div class="erreur">Le produit <b>' . $_SESSION['panier']['titre'][$i] . '</b> n\'est plus disponible. Nous avons supprimé ce produit de votre panier.</div>';
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
		$error .= '<div class="validation">Félicitations ! Votre commande est terminée. Voici votre numéro de commande : <b>' . $id_commande . '</b></div>';
		unset($_SESSION['panier']);
		
		// envoyer un email à l'utilisateur :
		//mail() // Cf post/formulaire5.php pour l'envoie des emails.
		
	}//Fin du if(empty($error))
}// Fin du if($_POST)


$page="Panier";
require_once('inc/header.inc.php');
?>
<h1>Panier</h1>
<?= $error ?>
<table border="1" style="border-collapse : collapse; cellpadding:7;">
	<tr>
		<th colspan="6" >PANIER <?= (nbProduit()) ? nbProduit() . ' produit(s) dans le panier' : '' ?></th>
	</tr>
	<tr>
		<th>Photo</th>
		<th>Titre</th>
		<th>Quantité</th>
		<th>Prix unitaire</th>
		<th>Total</th>
		<th>Supprimer</th>
	</tr>
	<?php if(empty($_SESSION['panier']['id_produit'])) : ?>
		<tr>
			<th colspan="6" >Votre panier est vide !</th>
		</tr>
	<?php else : ?>
	
		<?php  for($i=0; $i < count($_SESSION['panier']['id_produit']); $i++) : ?>
			<tr>
			<td><img src="<?= RACINE_SITE ?>photo/<?= $_SESSION['panier']['photo'][$i] ?>" height="30" /></td>
			<td><?= $_SESSION['panier']['titre'][$i] ?></td>



			<td>
			<a href="?action=decrementation&id_produit=<?= $_SESSION['panier']['id_produit'][$i] ?>"><img src="img/moins.png" width="15" /></a>

			<span style="padding: 3px; border: solid 1px black; text-align;: center; width: 20px; display: inline-block"><?= $_SESSION['panier']['quantite'][$i] ?></span>

			<a href="?action=incrementation&id_produit=<?= $_SESSION['panier']['id_produit'][$i] ?>"><img src="img/plus.png" width="15" /></a>

			</td>





			<td><?= $_SESSION['panier']['prix'][$i] ?>€</td>
			<td><?= $_SESSION['panier']['prix'][$i] *  $_SESSION['panier']['quantite'][$i] ?>€</td>
			<td>
				<a href="?action=supprimer&id_produit=<?= $_SESSION['panier']['id_produit'][$i] ?>"><img src="img/delete.png" height="22"/></a>
			</td>
		</tr>
		<?php endfor; ?>
		<tr>
			<td colspan="4">TOTAL :</td>
			<td colspan="2"><?= montantTotal() ?>€</td>
		</tr>
		
		<tr>
			<?php if(userConnecte()) : ?>
			<td colspan="6">
				<form method="post" action="">
					<input type="hidden" name="amount" value="<?= montantTotal() ?>" />
					<input type="submit" value="Payer" name="paiement" />	
				</form>
			</td>
			<?php else : ?>
			<td colspan="6">Pour payer votre commande, veuillez vous <a href="inscription.php"><u>Inscrire</u></a> ou vous <a href="connexion.php?page=panier"><u>Connecter</u></a> à votre compte.</td>
			<?php endif; ?>
		</tr>
		<tr>
			<td colspan="6"><a href="?action=vider"><u>Vider le panier</u></a></td>
		</tr>
	<?php endif; ?>
</table>
















<?php
require_once('inc/footer.inc.php');
?>