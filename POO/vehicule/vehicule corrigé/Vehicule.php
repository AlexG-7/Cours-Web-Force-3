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

    /**
     * @var int
     */
    protected $contenanceReservoir;

    /**
     * @var int
     */
    protected $contenuReservoir;

    protected static $carburantsPossibles = [
        'essence',
        'diesel'
    ];

    /**
     * Vehicule constructor.
     * @param string $typeCarburant
     * @param int $vitesseMax
     * @param int $contenanceReservoir
     * @param int $contenuReservoir
     */
    public function __construct(
        string $typeCarburant,
        int $vitesseMax,
        int $contenanceReservoir,
        int $contenuReservoir
    ) {
        $this->setTypeCarburant($typeCarburant);
        $this->setVitesseMax($vitesseMax);
        $this->setContenanceReservoir($contenanceReservoir);
        $this->setContenuReservoir($contenuReservoir);
    }

    /**
     * @return string
     */
    public function getTypeCarburant(): string
    {
        return $this->typeCarburant;
    }

    /**
     * @param string $typeCarburant
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
     * @param int $vitesseMax
     * @return Vehicule
     */
    public function setVitesseMax(int $vitesseMax): Vehicule
    {
        $this->vitesseMax = $vitesseMax;

        return $this;
    }

    /**
     * @return int
     */
    public function getContenanceReservoir(): int
    {
        return $this->contenanceReservoir;
    }

    /**
     * @param int $contenanceReservoir
     * @return Vehicule
     */
    public function setContenanceReservoir(int $contenanceReservoir): Vehicule
    {
        $this->contenanceReservoir = $contenanceReservoir;

        return $this;
    }

    /**
     * @return int
     */
    public function getContenuReservoir(): int
    {
        return $this->contenuReservoir;
    }

    /**
     * @param int $contenuReservoir
     * @return Vehicule
     */
    public function setContenuReservoir(int $contenuReservoir): Vehicule
    {
        $this->contenuReservoir = $contenuReservoir;

        return $this;
    }

    public function fairePlein(Pompe $pompe)
    {
        // le véhicule et la pompe n'ont pas le même carburant
        if ($this->typeCarburant != $pompe->getTypeCarburant()) {
            echo '<p>Surtout pas !</p>';

            return;
        }

        // qté d'essence necessaire pour faire le plein
        $besoinEssence = $this->contenanceReservoir - $this->contenuReservoir;

        // si la pompe ne contient pas assez de carburant
        if ($besoinEssence > $pompe->getContenu()) {
            $besoinEssence = $pompe->getContenu();
        }

        // ajout du besoin au réservoir du véhicule
        $this->setContenuReservoir($this->contenuReservoir + $besoinEssence);

        // enlever de la pompe la qté ajoutée au véhicule
        $pompe->setContenu($pompe->getContenu() - $besoinEssence);
    }

    abstract public static function getNbRoues(): int;
}
