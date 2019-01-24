<?php

require_once 'Animal.php';

/**
* La classe Chat hérite Animal :
* Les attributs et méthodes définies dans Animal
* lui appartiennent aussi
*/
class Chat extends Animal
{
  /**
  * Surcharge (= redéfinition) de la méthode identifier() de la classe Animal
  * @return string
  */
  public function identifier()
  {
    // parent fait référence à la classe mère Animal
    return parent::identifier() . " et je suis un chat";
  }
//------------------------------------------------------------------------------
  /**
  * Méthode abstraite
  *
  * Toutes les classes qui héritent d'Animal
  * doivent implémenter (dééfinir concrètement) cette méthode
  *
  * Une classe qui contient au moins une méthode abstraite
  * doit être déclarée abstraite
  */
  public function crier()
  {
    echo "Miaou";
  }
}








?>
