<?php

require_once 'Vehicule.php';

/**
 * création de la classe Voiture
 */
class Voiture extends Vehicule
{
  function __construct(
    $marque,
    $nombreRoues,
    $carburant,
    $vitesseMax
  ){
    $this->setMarque();
    $this->setNombreRoues();
    $this->setCarburant();
    $this->vitesseMax();
  }

  public function nombreRoues(){
    echo "La voiture possède " . parent::$nombreRoues . " roues<br>";
  }
}

















?>
