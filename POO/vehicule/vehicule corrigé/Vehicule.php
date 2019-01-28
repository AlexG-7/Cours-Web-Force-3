<?php


/**
 * Class Vehicule
 */
abstract class Vehicule
{
    /**
     * @var string
     */
    protected $typeCarburant;

    /**
     * @var int
     */
    protected $vitesseMax;

    protected static $carburantsPossibles = [
        'essence',
        'diesel'
    ];

    protected $contenanceReservoir;

    protected $contenuReservoir;

    /**
     * Vehicule constructor.
     *
     * @param string $typeCarburant
     * @param int    $vitesseMax
     */
    public function __construct(string $typeCarburant, int $vitesseMax)
    {
        $this->setTypeCarburant($typeCarburant);
        $this->setVitesseMax($vitesseMax);
    }

    /**
     * @return string
     */
    public function getTypeCarburant(): string
    {
        return $this->typeCarburant;
    }

    /**
     * @param  string $typeCarburant
     * @return Vehicule
     */
    public function setTypeCarburant(string $typeCarburant): Vehicule
    {
        if (!in_array($typeCarburant, self::$carburantsPossibles)) {
            trigger_error('Carburant non supporté', E_USER_ERROR);
        }

        $this->typeCarburant = $typeCarburant;

        return $this;
    }

    /**
     * @return int
     */
    public function getVitesseMax(): int
    {
        return $this->vitesseMax;
    }

    /**
     * @param  int $vitesseMax
     * @return Vehicule
     */
    public function setVitesseMax(int $vitesseMax): Vehicule
    {
        $this->vitesseMax = $vitesseMax;

        return $this;
    }

    abstract public static function getNbRoues(): int;
}
