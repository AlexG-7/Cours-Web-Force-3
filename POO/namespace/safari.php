<?php

// Use permet d'utiliser le nom court de la classe (sans le namespace)
// dans le reste du fichier
use Animal\Continent\Afrique\Elephant;
// si l'on utilise 2 classes qui ont un même nom court
// on peut utiliser un Alias
use Animal\Continent\Asie\Elephant as ElephantAsie;

use Animal\Continent\Afrique\Gazelle;


// require_once 'Animal/Continent/Afrique/Elephant.php';
// require_once 'Animal/Continent/Asie/Elephant.php';
require_once 'autoload.php';

// Instanciation de Animal\Continent\Afrique\Elephant
$elephantAfrique = new Elephant();
// Instanciation de Animal\Continent\Asie\Elephant
$elephantAsie = new ElephantAsie();

echo $elephantAfrique->getTailleOreilles();
echo "<br>";
echo $elephantAsie->getTailleOreilles();

$gazelle = new Gazelle();
echo "<br>";
$gazelle->voirElephant();
