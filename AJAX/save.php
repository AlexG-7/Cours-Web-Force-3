<?php
if (!empty($_POST)) {
	// PHP_EOL : un saut de ligne
	$content = $_POST['nom'] . ' ' . $_POST['prenom'] . PHP_EOL;
	// on enregistre les nom/prenom reçus dans le fichier noms.txt
	file_put_contents('noms.txt', $content, FILE_APPEND);
	echo 'nom enregistré';
} else {
	echo 'pas de données reçues';
}