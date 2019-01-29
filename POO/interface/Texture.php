<?php

/**
 * Création de l'interface Texture
 */
interface Texture
{
    /**
     * Matière
     *
     * @return string
     */
    public function getMatiere(): string;

    /**
     * Couleur
     *
     * @return string
     */
    public function getCouleur(): string;

}
