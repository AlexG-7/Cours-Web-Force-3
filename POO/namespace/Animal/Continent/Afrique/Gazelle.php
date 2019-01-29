<?php

namespace Animal\Continent\Afrique;

/**
 * Création de la classe Gazelle en Afrique
 */
class Gazelle
{

    /**
     *
     * fonction qui permet à la Gazelle de voir un Elephant
     */
    public function voirElephant()
    {
        /**
*
         * Animal\Continent\Afrique\Elephant
         * car sans préciser de namespace et sans use
         * la classe utilisée est celle qui se trouve dans le namespace dans lequel on est
         */
        $elephant = new Elephant();
        echo "je vois un éléphant avec de " . $elephant->getTailleOreilles() . "oreilles";
    }

    function __construct()
    {
        // code...
    }
}
