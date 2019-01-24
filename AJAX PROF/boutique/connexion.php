<?php
//php/boutique/connexion.php
require_once('inc/init.inc.php');

// Deconnexion 
if(isset($_GET['action']) && $_GET['action'] == 'deconnexion'){
	// S'il y a une action dans l'URL, et que cette action c'est la déconnexion alors on supprime la partie 'membre' de la session
	unset($_SESSION['membre']);
	header('location:connexion.php');
}

// Si user déjà connecté redirection
if(userConnecte()){ // Si c'est TRUE
	header('location:profil.php');
}

//debug($_POST);

if($_POST){
	
	// 1 : Le pseudo existe-t-il ? 
	$resultat = $pdo -> prepare("SELECT * FROM membre WHERE pseudo = :pseudo");
	$resultat -> bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
	$resultat -> execute(); 
	
	if($resultat -> rowCount() > 0){
		
		// 1.2 : On récupère les infos du membre
		$membre = $resultat -> fetch();
		
		// 2 : Le MDP saisie, crypté correspond-t-il au MDP enregistré
		
		$mdp_saisie = md5($_POST['mdp']);
		if($mdp_saisie == $membre['mdp']){
			// Si le mdp saisie et crypté est égal au mdp enregistré en BDD, alors tout va bien on peut connecter user. 
			
			// 3 : Enregistrer les infos du membre en session
			
			//$_SESSION['membre']['prenom'] = $membre['prenom'];
			//$_SESSION['membre']['pseudo'] = $membre['pseudo'];
			//$_SESSION['membre']['email'] = $membre['email'];
			// Autant fait une boucle 
			foreach($membre as $indice => $valeur){
				if($indice != 'mdp'){
					$_SESSION['membre'][$indice] = $valeur;
				}
			}
			
			// 4 : Redirection vers profil
			header('location:profil.php');
		}
		else{
			$error .= '<div class="alert alert-danger">Erreur de mot de passe</div>';
		}	
	}
	else{
		$error .= '<div class="alert alert-danger">Erreur d\'identifiant</div>';
	}
}

$page = 'Connexion';
require_once('inc/header.inc.php');
?>
<h1>Connexion</h1>

<div class="row">
	<div class="col-md-8">
		<form method="post" action="">
			<?= $error ?>
			<div class="form-group">
				<label>Pseudo :</label>
				<input type="text" name="pseudo" class="form-control" />
			</div>
			<div class="form-group">
				<label>Mot de passe :</label>
				<input type="password" name="mdp" class="form-control" />
			</div>
			<div class="form-group">

				<input type="submit" class="btn btn-success" value="Connexion"/>
			</div>
		</form>
	</div>
</div>
<?php 
require_once('inc/footer.inc.php');
?>