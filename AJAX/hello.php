<?php

if (!empty($_GET)) {
    extract($_GET);
} else {
    $nom = "DOE";
    $prenom = "John";
}

echo "bonjour " . $prenom . " " . $nom;



?>
