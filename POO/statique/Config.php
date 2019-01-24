<?php

class Config
{
  /**
  * Constante de classe
  */
  const RACINE_WEB = "/php/boutique";
//------------------------------------------------------------------------------
  /**
  * @return string
  */
  public function getPath($file)
  {
    // $this fait référence à l'objet instancié de la classe
    // self fait référence à la classe elle-même
    return self::RACINE_WEB . "/" . $file;
  }
}




?>
