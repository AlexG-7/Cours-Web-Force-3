<?php


/**
 * Class Pompe
 */
class Pompe
{
    /**
     * @var string
     */
    private $typeCarburant;

    /**
     * @var int
     */
    private $contenance;

    /**
     * @var int
     */
    private $contenu;

    /**
     * Pompe constructor.
     * @param string $typeCarburant
     * @param int $contenance
     * @param int $contenu
     */
    public function __construct(
        string $typeCarburant,
        int $contenance,
        int $contenu
    ) {
        $this->setTypeCarburant($typeCarburant);
        $this->setContenance($contenance);
        $this->setContenu($contenu);
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
     * @return Pompe
     */
    public function setTypeCarburant(string $typeCarburant): Pompe
    {
        $this->typeCarburant = $typeCarburant;

        return $this;
    }

    /**
     * @return int
     */
    public function getContenance(): int
    {
        return $this->contenance;
    }

    /**
     * @param int $contenance
     * @return Pompe
     */
    public function setContenance(int $contenance): Pompe
    {
        $this->contenance = $contenance;

        return $this;
    }

    /**
     * @return int
     */
    public function getContenu(): int
    {
        return $this->contenu;
    }

    /**
     * @param int $contenu
     * @return Pompe
     */
    public function setContenu(int $contenu): Pompe
    {
        $this->contenu = $contenu;

        return $this;
    }
}
