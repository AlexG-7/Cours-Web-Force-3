<?php

require_once 'Chien.php';
require_once 'Chat.php';

$toby = new Chien();
// On peut appeler la méthode identifier() définie dans Animal
// depuis une instance de la classe Chien car Chien hérite d' Animal
echo $toby->identifier();
echo "<br>";


$hercule = new Chat();
// On peut appeler la méthode identifier() définie dans Animal
// depuis une instance de la classe Chien car Chat hérite d' Animal
echo $hercule->identifier();
echo "<br>";


// fatal error : On ne peut pas instancier une classe abstraite
// $animal = new Animal();
// $animal->identifier();
// echo "<br>";





?>
