<?php

require_once __DIR__ . '/cnx.php';

if (!empty($_GET)) {
    extract($_GET);
}


$resultat = $pdo->query("SELECT * FROM membre WHERE id_membre = $id");

if ($resultat) {
    $membre = $resultat->fetch();
    echo '<h2>'. ucfirst($membre['prenom']) . ' ' . strtoupper($membre['nom']) .'</h2>';
    echo '<p> <b>Pseudo</b> : '. $membre['pseudo'] .'</p>';
    echo '<p> <b>Email</b> : '. $membre['email'] .'</p>';
    echo '<p> <b>Adresse</b> : '. $membre['adresse'] . ' &ndash; ' . $membre['code_postal'] . ' ' . ucfirst($membre['ville']) . '</p>';
}