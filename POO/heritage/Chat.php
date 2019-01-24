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

}








?>
