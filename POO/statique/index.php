<?php

require 'Config.php';
require 'Commande.php';

// N'existe pas :
// echo RACINE_WEB;

// Opérateur de résolution de portée ::
// pour accéder à la constante à partir de la classe qui la contient
echo Config::RACINE_WEB;

// Mauvaise pratique
// $conf = new Config();
// echo "<br>" . $conf::RACINE_WEB;

echo "<br>";
echo Commande::$defaultStatut;

echo "<br>";
echo Commande::getNbCommandes();

$commande1 = new Commande();
echo Commande::getNbCommandes();
echo "<br>";

$commande2 = new Commande();
echo Commande::getNbCommandes();
echo "<br>";

$commande3 = new Commande();
echo Commande::getNbCommandes();
echo "<br>";

// Fatal error : l'attribut est private
// echo Commande::$nbcommandes;

// Fatal error
// echo Commande::dummy();



?>
