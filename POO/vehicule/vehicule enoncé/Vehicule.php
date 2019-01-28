<?php

/**
 * Création de la classe Vehicule
 */
abstract class Vehicule
{
    /**
     * Type de carburant
     * @var string
     */
    protected $typeCarburant;

    /**
     * Carburants possibles essence ou diesel
     * @var array
     */
    protected static $carburantsPossibles = ["essence", "diesel"];

    /**
     * Contenance du réservoir
     * @var int
     */
    protected $contenanceReservoir;

    /**
     * Contenu du réservoir
     * @var int
     */
    protected $contenuReservoir;

    /**
     * Vitesse maximum
     * @var int
     */
    protected $vitesseMax;

    public function __construct(
      string $typeCarburant,
      int $vitesseMax
      ) {
        $this->setTypeCarburant($typeCarburant);
        $this->setVitesseMax($vitesseMax);
    }

    //-------------------GETTER typeCarburant ------------------------------
    /**
     * Get the value of Type de carburant
     *
     * @return string
     */
    public function getTypeCarburant() : string
    {
        return $this->typeCarburant;
    }

    //--------------------SETTER typeCarburant --------------------------
    /**
     * Set the value of Type de carburant
     *
     * @param string typeCarburant
     */
    public function setTypeCarburant(string $typeCarburant)
    {
        if (!in_array($typeCarburant, self::$carburantsPossibles)) {
            trigger_error("carburant non supporté", E_USER_ERROR);
        }
        $this->typeCarburant = $typeCarburant;
        return $this;
    }

    //-------------------GETTER vitesseMax ------------------------------
    /**
     * Get the value of Vitesse maximum
     *
     * @return int
     */
    public function getVitesseMax() : int
    {
        return $this->vitesseMax;
    }

    //--------------------SETTER vitesseMax --------------------------
    /**
     * Set the value of Vitesse maximum
     *
     * @param int vitesseMax
     */
    public function setVitesseMax(int $vitesseMax)
    {
        $this->vitesseMax = $vitesseMax;
        return $this;
    }

    abstract public static function getNombreDeRoues() : int;
}
