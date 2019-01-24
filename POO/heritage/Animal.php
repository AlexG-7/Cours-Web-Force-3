<?php

/**
* Une classe abstraite ne peut être instanciée
* Elle ne sert que dans le cadre de l'héritage
*/
abstract class Animal
{
  /**
  * @return string
  */
  public function identifier()
  {
    return "Je suis un animal";
  }

  abstract public function crier();
}






?>
