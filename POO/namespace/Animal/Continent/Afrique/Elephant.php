<?php

namespace Animal\Continent\Afrique;

// require_once __DIR__ . '../../Elephant.php';

use Animal\Elephant as ElephantInterface;

/**
 * Creation de la classe Elephant en Afrique
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
        return "grandes";
    }

    function __construct()
    {
        // code...
    }
}
