<?php
//php/boutique/admin/gestion_produits.php

require_once('../inc/init.inc.php');

debug($_POST);
debug($_FILES);

if($_POST){
	
	// Par défault, on donne un nom générique à la photo (dans le cas ou ce produit n'aurait pas de photo...
	$photo_bdd = 'default.jpg';
	
	
	if(isset($_POST['photo_actuelle'])){		
		$photo_bdd = $_POST['photo_actuelle'];	
	}
	
	if(!empty($_FILES['photo']['name'])){
		// Cela signifie qu'une photo a été postée dans le form
		
		$photo_bdd = time() . '_' . $_POST['reference'] . '_' . rand(1, 9999) . $_FILES['photo']['name'];
		// On modifie le nom de la photo pour éviter les doublons ex : 
		// Chat.jpg
		// 1540000000_ref_465_chat.jpg
		
		$photo_dir = RACINE_SERVEUR . RACINE_SITE . 'photo/';

		if($_FILES['photo']['size'] > 2000000){
			$error .= '<div class="alert alert-danger">Veuillez choisir une photo de 2Mo max</div>';
		}	
		
		$ext = array('image/jpeg', 'image/png', 'image/gif');
		
		if(!in_array($_FILES['photo']['type'], $ext)){	
			// Si le type de l'image uploadée n'est pas l'un des types stockés dans $ext, alors erreur
			$error .= '<div class="alert alert-danger">Veuillez choisir une au format JPG, JPEG, PNG ou GIF</div>';
		}
		
		if($_FILES['photo']['error'] == '0' && empty($error)){
			// OK on peut enregistrer la photo sur le serveur
			if(!copy($_FILES['photo']['tmp_name'], $photo_dir . $photo_bdd)){
				$error .= '<div class="alert alert-danger">Problème à l\'enregistrement de la photo</div>';
			}
		}
	}//-IF !empty($_FILES..)
	
	// TOUTES LES VERIFICATIONS DE TOUS LES CHAMPS
	
	if(empty($_POST['categorie'])){
		$error .= '<div class="alert alert-danger">Veuillez préciser une catégorie</div>';
	}
	
	
	if(empty($error)){
		
		// Si $error est vide cela signifie qu'il n'y a pas d'erreur au niveau de la photo, mais également au niveau des vérifications qui auraient été effectuées. 
		
		
		if(isset($_POST['id_produit']) && !empty($_POST['id_produit'])){
			// S'il y a un id_produit renseigné (caché) dans le formulaire alors on est dans la modification de produit et non dans l'ajout d'un produit.
			// DONC requête UPDATE
			$resultat = $pdo -> prepare("UPDATE produit set reference = :reference, categorie = :categorie, titre = :titre, description = :description, couleur = :couleur, taille = :taille, public = :public, photo = :photo, prix = :prix, stock = :stock WHERE id_produit = :id ");
			
			$resultat -> bindParam(':id', $_POST['id_produit'], PDO::PARAM_INT);
		}
		else{
			// Si l'id_produit du formulaire est vide cela signifie que nous sommes en train d'ajouter un produit
			$resultat = $pdo -> prepare("INSERT INTO produit (reference, categorie, titre, description, couleur, taille, public, photo, prix, stock) VALUES (:reference, :categorie, :titre, :description, :couleur, :taille, :public, :photo, :prix, :stock)");
		}	
		
		//STR
		$resultat -> bindParam(':reference', $_POST['reference'], PDO::PARAM_STR);
		$resultat -> bindParam(':categorie', $_POST['categorie'], PDO::PARAM_STR);
		$resultat -> bindParam(':titre', $_POST['titre'], PDO::PARAM_STR);
		$resultat -> bindParam(':description', $_POST['description'], PDO::PARAM_STR);
		$resultat -> bindParam(':couleur', $_POST['couleur'], PDO::PARAM_STR);
		$resultat -> bindParam(':taille', $_POST['taille'], PDO::PARAM_STR);
		$resultat -> bindParam(':public', $_POST['public'], PDO::PARAM_STR);
		// Attention pas de photo en post
		$resultat -> bindParam(':photo', $photo_bdd, PDO::PARAM_STR);
		$resultat -> bindParam(':prix', $_POST['prix'], PDO::PARAM_STR);
		//INT
		$resultat -> bindParam(':stock', $_POST['stock'], PDO::PARAM_INT);
		
		if($resultat -> execute()){
			header('location:' . RACINE_SITE . 'admin/gestion_produits.php?validation=success');
			
			$id_produit_add = $pdo -> lastInsertId();
			// lastInsertId, méthode de pdo nous retourne le dernier ID enregistré en BDD
			
			$_SESSION['success'] = '<div class="alert alert-success">Félicitations le produit N°' . $id_produit_add . ' a été ajouté avec succèss</div>';
			//On stocke dans la session un message de félicitations, pour pouvoir l'afficher dans la page de destination. 
		}
	}
}


/// MODIFICATION DE PRODUIT

if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])){
	// Si je trouve un id dans l'url, cela signifie que nous sommes en train de modifier un produit. 
	// Il faut donc récupérer le produit à modifier : 
	$resultat = $pdo -> prepare("SELECT * FROM produit WHERE id_produit = :id");
	$resultat -> bindParam(':id', $_GET['id'], PDO::PARAM_INT);
	$resultat -> execute();
	
	if($resultat -> rowCount() > 0){
		// Le produit à modifier existe bien
		$produit_a_modifier = $resultat -> fetch();
		// La variable $produit_a_modifier contient toutes les infos du produit à modifier.
	}
}

// Pour faciliter l'affichage des infos à modifier dans le formulaire


$reference = (isset($produit_a_modifier)) ? $produit_a_modifier['reference'] : '';
$categorie = (isset($produit_a_modifier)) ? $produit_a_modifier['categorie'] : '';
$titre = (isset($produit_a_modifier)) ? $produit_a_modifier['titre'] : '';
$description = (isset($produit_a_modifier)) ? $produit_a_modifier['description'] : '';
$taille = (isset($produit_a_modifier)) ? $produit_a_modifier['taille'] : '';
$couleur = (isset($produit_a_modifier)) ? $produit_a_modifier['couleur'] : '';
$public = (isset($produit_a_modifier)) ? $produit_a_modifier['public'] : '';
$photo = (isset($produit_a_modifier)) ? $produit_a_modifier['photo'] : '';
$prix = (isset($produit_a_modifier)) ? $produit_a_modifier['prix'] : '';
$stock = (isset($produit_a_modifier)) ? $produit_a_modifier['stock'] : '';

$id_produit = (isset($produit_a_modifier)) ? $produit_a_modifier['id_produit'] : '';
$action = (isset($produit_a_modifier)) ? 'Modifier' : 'Ajouter';


// Explication de la forme contracté (ternaire) : 
// $reference = (isset($produit_a_modifier)) ? $produit_a_modifier['reference'] : '';
// Fait ceci :
// if(isset($produit_a_modifier)){
	// $reference = $produit_a_modifier['reference'];
// }
// else{
	// $reference = '';
// }


require_once('../inc/header.inc.php');
?>
<h1><?= $action ?> un produit</h1>

<div class="row">
	<div class="col-md-12">
		<form method="post" action="" enctype="multipart/form-data">
			<?= $error ?>
		
			<input type="hidden" name="id_produit" value="<?= $id_produit ?>"/>
		
			<div class="col-md-6">
				<div class="form-group">
					<label>Référence :</label>
					<input type="text" class="form-control" name="reference" value="<?= $reference ?>" />
				</div>
				
				<div class="form-group">
					<label>Categorie :</label>
					<input type="text" class="form-control" name="categorie" value="<?= $categorie ?>"/>
				</div>
				
				<div class="form-group">
					<label>Titre :</label>
					<input type="text" class="form-control" name="titre" value="<?= $titre ?>"/>
				</div>
				
				<div class="form-group">
					<label>Description :</label>
					<textarea class="form-control" name="description"/><?= $description ?></textarea>
				</div>
				<div class="form-group">
					<label>Taille :</label>
					<input type="text" class="form-control" name="taille" value="<?= $taille ?>"/>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label>Couleur :</label>
					<input type="text" class="form-control" name="couleur" value="<?= $couleur ?>"/>
				</div>
				<div class="form-group">
					<label>Public :</label>
					<select class="form-control" name="public"/>
						<option selected value="m">Homme</option>
						<option <?= ($public == 'f') ? 'selected' : '' ?> value="f">Femme</option>
						<option <?= ($public == 'public') ? 'selected' : '' ?> value="mixte">Mixte</option>
					</select>
				</div>
				<div class="form-group">
					<label>Photo :</label>
					<?php if($photo) : ?>
					<img src="<?= RACINE_SITE ?>photo/<?= $photo ?>" width="50px" />
					<input type="hidden" name="photo_actuelle" value="<?= $photo ?>" />
					<?php endif; ?>
					
					<input type="file" class="form-control" name="photo"/>
				</div>
				
				<div class="form-group">
					<label>Prix :</label>
					<input type="text" class="form-control" name="prix" value="<?= $prix ?>"/>
				</div>
				
				<div class="form-group">
					<label>Stock :</label>
					<input type="text" class="form-control" name="stock" value="<?= $stock ?>"/>
				</div>
				
				<div class="form-group">
					<input type="submit" class="btn btn-success" value="<?= $action ?>" />
				</div>
			</div>	
		</form>
	</div>
</div>
<?php
require_once('../inc/footer.inc.php');
?>