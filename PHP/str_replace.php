<?php

$liste = file('post/liste.txt');

echo '<pre>';
print_r($liste);
echo '</pre>';

foreach ($liste as $indice => $valeur) {
    $liste[$indice] = str_replace(' - ', ';', $valeur);
}

echo '<pre>';
print_r($liste);
echo '</pre>';
