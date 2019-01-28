<?php

require_once 'Vehicule.php';

/**
 * Création de la classe enfant Moto du parent Vehicule
 */
class Moto extends Vehicule
{
    public static function getNombreDeRoues(): int
    {
        return 2;
    }
}
