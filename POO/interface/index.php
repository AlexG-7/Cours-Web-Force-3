<?php
require_once 'Cube.php';
require_once 'Sphere.php';
require_once 'Volume.php';
require_once 'Brique.php';
require_once 'De.php';

function afficheForme(Volume $volume)
{
    echo "La forme du volume est : " . $volume->getForme();
}

$cube = new Cube();

echo '<pre>';
// un objet est instance de la ou des interfaces que sa classe implémente
var_dump($cube instanceof  Volume);//true
echo '</pre>';

// Cube et Sphere implémentent l'interface Volume
// Donc je peux les passer en paramètre à la fonction afficheForme()
afficheForme($cube);

$sphere = new Sphere();

echo "<br>";
afficheForme($sphere);

$brique = new Brique();

echo "<pre>";
var_dump($brique instanceof Brique);// true
// Parceque Brique imlémente Volume et Texture
var_dump($brique instanceof Volume);// true
var_dump($brique instanceof Texture);// true
echo "</pre>";

$de = new De("plastique", "blanc");

echo '<pre>';
var_dump($de instanceof De);// true
var_dump($de instanceof Cube);// true parceque De herite de Cube
var_dump($de instanceof Texture);// true parceque De implémente Texture
var_dump($de instanceof Volume);// true parceque De hérite de Cube qui implémente Volume
echo '</pre>';
