<?php

require_once 'Cube.php';

/**
 * Création de la classe Dé
 *
 * Une classe peut à la fois hériter d'une autre classe
 * et implémenter une ou plusieurs interfaces
 */
class De extends Cube implements Texture
{

    /**
     *
     * attribut matière
     *
     * @var string
     */
    private $matiere;

    /**
     *
     * attribut couleur
     *
     * @var string
     */
    private $couleur;

    /**
     *
     * Constructeur De
     *
     * @param string $matière
     * @param string $couleur
     */
    public function __construct(
        string $matière,
        string $couleur
    ) {
        $this->matiere = $matière;
        $this->couleur = $couleur;
    }

    //-------------------GETTER matiere ------------------------------
    /**
     * Get the value of Matiere
     *
     * @return string
     */
    public function getMatiere() : string
    {
        return $this->matiere;
    }

    //-------------------GETTER couleur ------------------------------
    /**
     * Get the value of Couleur
     *
     * @return string
     */
    public function getCouleur() : string
    {
        return $this->couleur;
    }

}
