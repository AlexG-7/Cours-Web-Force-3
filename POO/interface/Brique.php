<?php

require_once 'Volume.php';
require_once 'Texture.php';

/**
 * Création de la classe Brique
 *
 * Une classe peut implémenter autant d'interfaces que l'on veut
 */
class Brique implements Volume, Texture
{
    /**
     *
     * Matière
     *
     *
     * @return string
     */
    public function getMatiere(): string
    {
        return "terre";
    }

    /**
     *
     * Couleur
     *
     *
     * @return string
     */
    public function getCouleur(): string
    {
        return "rouge";
    }

    /**
     * Forme
     *
     * @return string
     *
     */
    public function getForme(): string
    {
        return "parallépipède rectangle";
    }

}
