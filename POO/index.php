<?php

class User
{
// ---------------------------------------------------------------------------------------------------------------
  /**
  * Attribut de classe avec une valeur par defaut
  *
  * Tag de commentaire de documentation
  *
  * @var string
  */
  public $firstname = "Lionel";
// ---------------------------------------------------------------------------------------------------------------
  /**
  * Attribut de classe sans valeur par défaut (= null)
  *
  * @var string
  */
  public $lastname;
// ---------------------------------------------------------------------------------------------------------------
  /**
  *
  * @var int
  */
  private $age = 12;
// ---------------------------------------------------------------------------------------------------------------
  /**
  * Une méthode est une fonction interne à la classe
  *
  * @return string
  */
  public function getFullname()
  {
    // $this fait référence à l'objet qui appelle la méthode
    return $this->firstname . " " . $this->lastname;
  }
// ---------------------------------------------------------------------------------------------------------------
  /**
  *
  * @return string
  */
  public function getInfos()
  {
    // $this->age, attribut privé reste accessible depuis les méthodes de la classe
    return $this->getFullname() . " ," . $this->age . " ans";
  }
// ---------------------------------------------------------------------------------------------------------------
  /**
  * Ecrire une méthode qui fait vieillir notre utilisateur d'un an
  */
  public function birthday()
  {
   $this->age++;
  }
}

// instanciation de la classe
// $user est un objet instancié de la classe User
$user = new User();

// La flèche permet d'accéder à un attribut de la classe
echo $user->firstname;
echo "<br>";

// Création d'un attribut à la volée = mauvaise pratique
$user->nouvelAttribut = "Une valeur";

// Modification de la valeur d'un attribut
$user->lastname = "Aflalo";

echo $user->lastname;
echo "<br>";

// Appel de la méthode getFullname()
echo $user->getFullname();
echo "<br>";

$user2 = new User();
$user2->lastname = "Neige";
// $user2 est un autre objet de la classe User
// La valeur de ses attributs n'est pas liée à celle de $user
echo $user->getFullname();
echo "<br>";
echo $user2->getFullname();
echo "<br>";

// Fatal error : l'attribut $age est inacessible en dehors  de la classe
// echo $user->$age;

echo $user->getInfos();
echo "<br>";

$user->birthday();
echo $user->getInfos();
echo "<br>";

?>
