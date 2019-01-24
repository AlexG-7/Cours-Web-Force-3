<?php

if (!empty($_POST)) {
    $content = $_POST['nom'] . ' ' . $_POST['prenom'] . PHP_EOL;
    // on enregistre les noms et prenoms reçus dans le fichier noms.txt
    file_put_contents('noms.txt', $content, FILE_APPEND);
    echo '<div style="color: green; background: lightgreen; border: 1px solid green; border-radius: 0.3em; text-align: center; padding: 0.5em;">Nom enregistré</div>';
} else {
    echo '<div style="color: red; background: pink; border: 1px solid red; border-radius: 0.3em; text-align: center; padding: 0.5em;">Pas de données reçues</div>';
}