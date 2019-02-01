<?php

require_once 'connexion.php';


$prepare = $pdo->prepare('INSERT INTO liste_voiture (marque, modele, annee, couleur) VALUES(:marque, :modele, :annee, :couleur)');

$prepare->bindParam(':marque', $_POST['marque'], PDO::PARAM_STR);
$prepare->bindParam(':modele', $_POST['modele'], PDO::PARAM_STR);
$prepare->bindParam(':annee', $_POST['annee'], PDO::PARAM_INT);
$prepare->bindParam(':couleur', $_POST['couleur'], PDO::PARAM_STR);

if ($prepare-> execute()) {
    $id_voiture = $pdo -> lastInsertId();
    echo '<div class="alert alert-success">Félicitations le produit N°' . $id_voiture . ' a été ajouté avec succès</div>';
}

?>






<!DOCTYPE html>
<html>

<head>
  <title>Exercice 3</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>

  <div class="container">

    <h1 class="text-center">Ajout d'une voiture</h1>

    <div id="response" class="col-md-6 col-md-offset-3 alert"></div>

    <div class="col-md-6 col-md-offset-3">

      <form id="ajoutVoiture" method="post" class="form-horizontal well well-sm">

        <div class="form-group">
          <label class="col-md-4 control-label" for="marque">Marque</label>
          <div class="col-md-8">
            <input id="marque" name="marque" type="text" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="modele">Modèle</label>
          <div class="col-md-8">
            <input id="modele" name="modele" type="text" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="annee">Année</label>
          <div class="col-md-8">
            <input id="annee" name="annee" type="text" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="couleur">Couleur</label>
          <div class="col-md-8">
            <input id="couleur" name="couleur" type="text" class="form-control input-md">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-primary">Ajouter</button>
          </div>
        </div>

      </form>

    </div>

  </div>
  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  <script type="text/javascript" src="ajax.js"></script>
</body>

</html>
