<?php
require_once 'Vehicule.php';

/**
 * Class Voiture
 */
class Voiture extends Vehicule
{
    public static function getNbRoues(): int
    {
        return 4;
    }

}
