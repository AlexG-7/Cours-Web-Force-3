<?php

if (!empty($_POST)) {
  $content = $_POST["nom"] . " " . $_POST["prenom"] . PHP_EOL;

  // on enregistre les nom/prenom reçus dans le fichier noms.thx
  file_put_contents("noms.txt", $content, FILE_APPEND);
  echo "nom enregistré";
}else {
  echo "pas de données reçues";
}



 ?>
