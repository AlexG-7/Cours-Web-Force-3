<?php 

// Connexion à la BDD : 
$pdo = new PDO('mysql:host=localhost;dbname=repertoire', 'root', '', array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
));


$resultat = $pdo -> query("DELETE FROM annuaire WHERE id_annuaire= $_GET[id_annuaire]");

if($resultat){
	header('location:affichage_annuaire.php');
}

