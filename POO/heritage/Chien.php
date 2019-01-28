<?php
require_once 'Animal.php';
/**
 * la classe Chien hérite d'Animal : 
 * les attributs et méthodes définies dans Animal 
 * lui appartiennent aussi
 */
class Chien extends Animal
{
    public function crier()
    {
        echo 'Ouaf';
    }
}