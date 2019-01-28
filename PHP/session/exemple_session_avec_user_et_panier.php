<?php

$_SESSION = array(
    'user'  => array(
        'prenom' =>"" ,
        'nom' =>"" ,
        'adresse' =>"" ,
        'email' =>"",
        'numero' =>"",
    ),
    'panier' => array(
        'produit1' => array(
            'nom_produit' => 'banane',
            'quantite' => 10,
            'prix' => 0.5,
        ),
        'produit2' => array(
            'nom_produit' => 'fraise',
            'quantite' => 50,
            'prix' => 0.2,
        ),
    )
);

unset($_SESSION['panier']);
