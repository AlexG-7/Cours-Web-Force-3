<?php

require_once 'Vehicule.php';

/**
 * Création de la classe enfant Voiture du parent Vehicule
 */
class Voiture extends Vehicule
{
    public static function getNombreDeRoues(): int
    {
        return 4;
    }
}
