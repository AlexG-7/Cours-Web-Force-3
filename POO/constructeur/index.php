<?php

require 'Person.php';

// Fatal error : le constructeur de la classe Person contient
// 3 paramètres obligatoires
// $person = new Person();

echo "<pre>";
// Pour pouvoir instancier la classe, il faut passer
// des valeurs pour les paramètres obligatoires attendus
// par la méthode __construct()
$person = new Person("Aflalo", "Lionel", 12);
var_dump($person);
echo "</pre>";


echo "<pre>";
$person2 = new Person("Michmich", "Jean", 30 , ["PHP", "Symfony"]);
var_dump($person2);
echo "</pre>";

// Si la classe possède une méthode __toString(), elle est appelée
// sinon fatal error
echo $person;














?>
