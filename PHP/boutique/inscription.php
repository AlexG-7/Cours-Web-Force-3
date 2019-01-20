<?php 
// boutique/inscription.php

require_once('inc/init.inc.php');

// SI user déjà connecté redirection
if(userConnecte()){ // Si c'est TRUE
	header('location:profil.php');
}


//debug($_POST);

if($_POST){
	
	// Normalement nous devrions faire toutes les vérifications sur les champs (longueur, type d'info...)
	
	
	// verifs Pseudo
	if(empty($_POST['pseudo'])){
		$error .= '<div class="alert alert-danger">Veuillez renseigner un pseudo</div>';  
	}
	else{
		$verif_pseudo = preg_match('#^[a-zA-Z0-9._-]{3,20}+$#', $_POST['pseudo']); // True ou False
		
		if(!$verif_pseudo){
			$error .= '<div class="alert alert-danger">Veuillez renseigner un pseudo composé de A-Z, 0-9, min 3 caractères, max 20 caractères</div>';
		}
	}
	
	
	// Verifs MDP
	if(empty($_POST['mdp'])){
		$error .= '<div class="alert alert-danger">Veuillez renseigner un mot de passe</div>';
	}
	else{
		$verif_mdp = preg_match('#^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$#', $_POST['mdp']);
		
		if(!$verif_mdp){
			$error .= '<div class="alert alert-danger">Veuillez renseigner un mot de passe valide</div>';
		}
	}
	//WebForce3@
	
	
	// Verifs Email
	if(empty($_POST['email'])){
		$error .=  '<div class="alert alert-danger">Veuillez renseigner un email</div>';
	}
	else{
		$verif_email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL); // True ou False
		if(!$verif_email){
			$error .= '<div class="alert alert-danger">Veuillez renseigner un email valide</div>';
		}
		
		// yakine.hamida@gmail.com
		// $tab = array('yakine.hamida', 'gmail.com')
		$tab = explode('@', $_POST['email']);
		
		$ext_interdite = array(
			'yopmail.com',
			'mailinator.com',
			'mail.com',
		);
		
		if(in_array($tab[1], $ext_interdite)){
			$error .= '<div class="alert alert-danger">Veuillez renseigner un email valide</div>';
		}
	}
	
	if(empty($error)){
		//Si $error est vide cela signifie que le formulaire est rempli correctement... 
		
		// On va vérifier que le pseudo soit bien dispo
		$resultat = $pdo -> prepare("SELECT * FROM membre WHERE pseudo = :pseudo");
		$resultat -> bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
		$resultat -> execute();
		
		if($resultat -> rowCount() != 0){
			// Cela signifie qu'il y a déjà un enregistrement avec ce pseudo
			$error .= '<div class="alert alert-danger">Pseudo non disponible</div>';
			
			// On pourrait proposer au visiteur 2/3 pseudo disponibles...
		}		
		else{
			// Normalement on devrait faire la même chose pour email.
			
			// On enregistre l'utilisateur en BDD : 
			
			$resultat = $pdo -> prepare("INSERT INTO membre (pseudo, mdp, prenom, nom, civilite, email, adresse, code_postal, ville, statut) VALUES (:pseudo, :mdp, :prenom, :nom, :civilite, :email, :adresse, :code_postal, :ville, '0') ");
			
			extract($_POST);
			$resultat -> bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
			
			$mdp = md5($mdp); // ON crypte le MDP
			
			$resultat -> bindParam(':mdp', $mdp, PDO::PARAM_STR);
			$resultat -> bindParam(':prenom', $prenom, PDO::PARAM_STR);
			$resultat -> bindParam(':nom', $nom, PDO::PARAM_STR);
			$resultat -> bindParam(':adresse', $adresse, PDO::PARAM_STR);
			$resultat -> bindParam(':ville', $ville, PDO::PARAM_STR);
			$resultat -> bindParam(':email', $email, PDO::PARAM_STR);
			$resultat -> bindParam(':civilite', $civilite, PDO::PARAM_STR);
			//Code postal
			$resultat -> bindParam(':code_postal', $code_postal, PDO::PARAM_INT);
			
			if($resultat -> execute()){ // TRUE OU FALSE
				header('location:connexion.php');
			}
		}
	}
}// fin du if($_POST)
	


// Récupération des données saisies pour les réafficher
$pseudo_r = (isset($_POST['pseudo'])) ? $_POST['pseudo'] : ''; 

// Veut dire : 
if(isset($_POST['pseudo'])){
	$pseudo_r = $_POST['pseudo'];
}
else{
	$pseudo_r = '';
}

$pseudo_r = (isset($_POST['pseudo'])) ? $_POST['pseudo'] : ''; 
$prenom_r = (isset($_POST['prenom'])) ? $_POST['prenom'] : ''; 
$nom_r = (isset($_POST['nom'])) ? $_POST['nom'] : ''; 
$email_r = (isset($_POST['email'])) ? $_POST['email'] : ''; 
$civilite_r = (isset($_POST['civilite'])) ? $_POST['civilite'] : ''; 
$adresse_r = (isset($_POST['adresse'])) ? $_POST['adresse'] : ''; 
$ville_r = (isset($_POST['ville'])) ? $_POST['ville'] : ''; 
$code_postal_r = (isset($_POST['code_postal'])) ? $_POST['code_postal'] : '';




$page = 'Inscription';
require_once('inc/header.inc.php');
?>

<h1>Inscription</h1>
<!-- Tous l'HTML (formulaire) -->
	
	<div class="row">
		<form method="post" class="col-md-8" action="">
			
			<?= $error ?>
		
			<div class="form-group">
				<label>Pseudo:</label>
				<input type="text" class="form-control" name="pseudo" value="<?= $pseudo_r ?>"/>
			</div>
			<div class="form-group">
				<label>Mot de passe:</label>
				<input type="password" class="form-control" name="mdp" />
			</div>
			<div class="form-group">	
				<label>Prénom:</label>
				<input type="text" class="form-control" name="prenom" value="<?= $prenom_r ?>"/>
			</div>
			<div class="form-group">	
				<label>Nom :</label>
				<input type="text" class="form-control" name="nom" value="<?= $nom_r ?>" />
			</div>
			<div class="form-group">	
				<label>Email:</label>
				<input type="text" class="form-control" name="email" value="<?= $email_r ?>"/>
			</div>
			<div class="form-group">	
				<label>Civilité:</label>
				<select name="civilite" class="form-control">
					<option value="m" selected >Homme</option>
					<option value="f" <?= ($civilite_r == 'f') ? 'selected' : '' ?>>Femme</option>
				</select>
			</div>
			<div class="form-group">	
				<label>Ville:</label>
				<input type="text" class="form-control" name="ville" value="<?= $ville_r ?>"/>
			</div>
			<div class="form-group">	
				<label>Code Postal:</label>
				<input type="text" class="form-control" name="code_postal" value="<?= $code_postal_r ?>"/>
			</div>
			<div class="form-group">	
				<label>Adresse:</label>
				<input type="text" class="form-control" name="adresse" value="<?= $adresse_r ?>"/>
			</div>
			<div class="form-group">	
				<input type="submit" value="Inscription" class="btn btn-success" />
			</div>
		</form>
	</div>



<?php 
require_once('inc/footer.inc.php');
?>
