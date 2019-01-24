<?php

require 'Member.php';

$member = new Member();

// Appel au getter pour accéder à l'attribut
// null : pas d valeur par défaut dans la classe
var_dump($member->getFirstname());
echo "<br>";
// Appel aux setters pour modifier la valeur des attributs
$member->setFirstname("Lionel");
$member->setLastname("Aflalo");
echo $member->getFirstname() . " " . $member->getLastname();


$member2 = new Member();
// Le "return $this" dans les setters permet de chainer
// Les appels aux setters = interface fluide (fluent setters)
$member2
    ->setFirstname("Jean")
    ->setLastname("Michmich");
echo "<br>";
echo $member2->getFirstname() . " " . $member2->getLastname();
?>
