<?php

namespace Animal\Continent\Asie;

// require_once __DIR__ . '../../Elephant.php';

use Animal\Elephant as ElephantInterface;

/**
 * Creation de la classe Elephant en Asie
 */
class Elephant implements ElephantInterface
{
    /**
     * Taille des oreilles de Elephant
     *
     * @return string
     */
    public function getTailleOreilles(): string
    {
        return "petites";
    }

    function __construct()
    {
        // code...
    }
}
