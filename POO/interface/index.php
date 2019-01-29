<?php
require_once 'Cube.php';

$cube = new Cube();

echo '<pre>';
// un objet est instance de la ou des interfaces que sa classe implémente
var_dump($cube instanceof  Volume);//true
echo '</pre>';