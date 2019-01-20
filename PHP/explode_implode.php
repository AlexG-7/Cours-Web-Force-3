<?php

// EXPLODE :
$phrase = 'Nous sommes mercredi et c\'est le deuxième jour de la l\'année 2019';

$tableau = explode(' ', $phrase);

echo '<pre>';
print_r($tableau);
echo '</pre>';


// IMPLODE
$tab = array(
    'bonjour',
    'tout',
    'le',
    'monde',
    'nous',
    'sommes',
    'lundi'
);

echo implode(' ', $tab);
$voiture = array(
    'marque' => 'Mercedes',
    'modele' => 'GLE',
    'options' => array(
        0 => 'toit ouvrant',
        1 => 'Tableau de bord tactil',
        2 => 'ABS'
    )
);


// exemple cas concret : options d'un véhicule
echo '<h2>' . $voiture['marque'] . ' ' . $voiture['modele'] . '</h2>';
echo 'Les options : <ul><li>' . implode('</li><li>', $voiture['options']);
echo '</ul>';
