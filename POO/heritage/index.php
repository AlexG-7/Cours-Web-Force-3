<?php
require_once 'Chien.php';
require_once 'Chat.php';
require_once 'Humain.php';
require_once 'MaitreChien.php';
require_once 'Maitre.php';
require_once 'Siamois.php';


$toby = new Chien();

// on peut appeler la méthode identifier() définie dans Animal
// depuis une instance de la classe Chien car Chien hérite d'Animal
echo $toby->identifier();

$hercule = new Chat();

echo '<br>' . $hercule->identifier();
/*
$animal = new Animal();
echo '<br>' . $animal->identifier();
*/

$humain = new Humain();

echo '<br>';
$humain->donnerSucre($toby);


/**
 * Fatal error : le paramètre de la méthode donnerSucre()
 * doit etre une instance de la classe Chien
 * $humain->donnerSucre($hercule);
 */
// get class() retourne le nom de la classe de l'objet
echo '<br>' . get_class($toby); //Chien

echo '<pre>';
// instanceof permet de savoir si une variable
//contient un objet instance d'une classe données
var_dump($chien instanceof Chien);//true
var_dump($hercule instanceof Chat);//true
var_dump($hercule instanceof Chien);//false

var_dump($toby instanceof  Animal);
var_dump($hercule instanceof  Animal);
echo'</pre>';

echo '<br>';
$humain->caresser($toby); //Ouaf
echo'<br>';
$humain->caresser($hercule); //Miaou
echo'<br>';
$zeus = new Chien();
$higgins = new MaitreChien();
$higgins->setChien($zeus);
//appel de la méthode crier() de l'attribut $chien du MaitreChien
//qui est un objet Chien (ici on fait crier $zeus)
$higgins->getChien()->crier();
echo'<br>';
$jon = new Maitre();
$garfield = new Chat();
$jon->setAnimal($garfield);
$jon->getAnimal()->crier();

$siamois = new Siamois();
echo '<pre>';
var_dump($siamois instanceof Siamois);//true
//Parce que Siamois herite de Chat :
var_dump($siamois instanceof Chat);//true
//Parce que Chat hérite d'Animal :
var_dump($siamois instanceof Animal);//true
echo '</pre>';

echo $siamois->identifier();



