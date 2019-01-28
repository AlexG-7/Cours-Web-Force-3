<?php
require_once 'Vehicule.php';

/**
 * Class Moto
 */
class Moto extends Vehicule
{
    public static function getNbRoues(): int
    {
        return 2;
    }
}
