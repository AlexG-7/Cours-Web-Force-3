<?php

if (!empty($_GET)) {
    extract($_GET);
} else {
    $nom = 'Doe';
    $prenom = 'Jane';
}

echo "Bonjour $prenom $nom";