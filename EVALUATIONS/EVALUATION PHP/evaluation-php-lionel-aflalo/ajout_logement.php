<?php
require_once("inc/init.inc.php");

// debug($_POST);
// debug($_FILES);

if ($_POST) {


   // Par défault, on donne un nom générique à la photo (dans le cas ou ce produit n'aurait pas de photo...
	$photo_bdd = 'default.jpg';

	
	if(isset($_POST['photo'])){
		$photo_bdd = $_POST['photo'];
	}

	if(!empty($_FILES['photo']['name'])){
		// Cela signifie qu'une photo a été postée dans le form

		$photo_bdd = rand(1, 9999) . $_FILES['photo']['name'];
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
  }

   // Vérif titre
  if (empty($_POST["titre"])) {
    $error .= '<div class="alert alert-danger">Veuillez renseigner un titre</div>';
  }
  // Vérif adresse
  if (empty($_POST["adresse"])) {
    $error .= '<div class="alert alert-danger">Veuillez renseigner une adresse</div>';
  }
  // Vérif ville
  if (empty($_POST["ville"])) {
    $error .= '<div class="alert alert-danger">Veuillez renseigner une ville</div>';
  }
  // Vérif cp
  if (empty($_POST["cp"])) {
    $error .= '<div class="alert alert-danger">Veuillez renseigner un code postal</div>';
  }else {
          $verif_cp = preg_match('#^[0-9]{5}$#',$_POST["cp"]);
          if (!$verif_cp) {
            $error .= '<div class="alert alert-danger">Veuillez renseigner un code postal avec 5 chiffres</div>';
          }
  }
  // Vérif surface
  if (empty($_POST["surface"])) {
    $error .= '<div class="alert alert-danger">Veuillez renseigner une surface</div>';
  }
  // Vérif prix
  if (empty($_POST["prix"])) {
    $error .= '<div class="alert alert-danger">Veuillez renseigner un prix</div>';
  }
  // Vérif type
  if (empty($_POST["type"][0])) {
    $error .= '<div class="alert alert-danger">Veuillez renseigner un type de logement</div>';
  }


//Si $error est vide cela signifie que le formulaire est rempli correctement
  if (empty($error)) {
    $resultat = $pdo->prepare("INSERT INTO logement (titre, adresse, ville , cp, surface, prix, photo, type, description) VALUES (:titre, :adresse, :ville , :cp, :surface, :prix, :photo, :type, :description)" );

    extract($_POST);

    $resultat -> bindParam(':titre', $titre, PDO::PARAM_STR);
    $resultat -> bindParam(':adresse', $adresse, PDO::PARAM_STR);
    $resultat -> bindParam(':ville', $ville, PDO::PARAM_STR);
    $resultat -> bindParam(':photo', $photo_bdd, PDO::PARAM_STR);
    $resultat -> bindParam(':type', $type, PDO::PARAM_STR);
    $resultat -> bindParam(':description', $description, PDO::PARAM_STR);
    $resultat -> bindParam(':cp', $cp, PDO::PARAM_INT);
    $resultat -> bindParam(':surface', $surface, PDO::PARAM_INT);
    $resultat -> bindParam(':prix', $prix, PDO::PARAM_INT);

   $resultat -> execute();

   echo '<p class="btn-success">Le logement a bien été ajouté !</p>';

		}

  }// fin du if($_POST)




?>




<!doctype html>
<html lang="fr">
  <head>
    <title>Ajout Logement</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Feuille de style CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>

    <h1 class="col-md-8">Affichage Logement</h1>

      <div class="container">

        <form class="form-group col-md-8" action="" method="post">

        <?= $error ?>

          <label for="titre">Titre</label>
          <input type="text" name="titre" id="titre" class="form-control" placeholder="Veuillez saisir un titre ..."><br>

          <label for="adresse">Adresse</label>
          <input type="text" name="adresse" id="adresse" class="form-control" placeholder="Veuillez saisir une adresse ..."><br>

          <label for="ville">Ville</label>
          <input type="text" name="ville" id="ville" class="form-control" placeholder="Veuillez saisir une ville ..."><br>

          <label for="cp">Code Postal</label>
          <input type="number" name="cp" id="cp" class="form-control" placeholder="Veuillez saisir un code postal ..."><br>

          <label for="surface">Surface en m²</label>
          <input type="number" name="surface" id="surface" class="form-control" placeholder="Veuillez saisir une surface en m² ..."><br>

          <label for="prix">Prix</label>
          <input type="number" name="prix" id="prix" class="form-control" placeholder="Veuillez saisir un prix ..."><br>

          <label for="photo">Photo</label>
          <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
          <input type="file" name="photo" id="photo" class="form-control" ><br>

          <label for="type">Type de logement</label>
          <select name="type" id="type" class="form-control">
            <option value="0" class="form-control">Veuillez choisir votre type de logement ...</option>
            <option value="location" class="form-control">Location</option>
            <option value="vente" class="form-control">Vente</option>
          </select><br>

          <label for="description">Description</label>
          <textarea name="description" id="description" cols="20" rows="5" class="form-control" placeholder="Veuillez saisir une description ..."></textarea><br>

          <input type="submit" value="Ajouter le logement" class="btn btn-success">


        </form>

     </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
