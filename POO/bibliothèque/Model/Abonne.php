<?php

namespace Model;

use App\Cnx;

/**
 * Création de la classe Abonne
 */
class Abonne
{
    /**
     * Attribut $id
     *
     * @var int
     */
    private $id;

    /**
     * Attribut $prenom
     *
     * @var string
     */
    private $prenom;


    /**
     *
     * Constructeur
     *
     * @param int    $id
     * @param string $prenom
     */
    public function __construct(int $id = null, string $prenom = null)
    {
        $this->setId($id);
        $this->setPrenom($prenom);
    }

    //-------------------GETTER id ------------------------------
    /**
     * Get the value of Attribut $id
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;

    }

    //--------------------SETTER id --------------------------
    /**
     * Set the value of Attribut $id
     *
     * @param int id
     */
    public function setId(int $id)
    {
        $this->id = $id;
        return $this;

    }
    //-------------------GETTER prenom ------------------------------
    /**
     * Get the value of Attribut $prenom
     *
     * @return string
     */
    public function getPrenom() : string
    {
        return $this->prenom;

    }

    //--------------------SETTER prenom --------------------------
    /**
     * Set the value of Attribut $prenom
     *
     * @param string prenom
     */
    public function setPrenom(string $prenom)
    {
        $this->prenom = $prenom;
        return $this;

    }

    public static function find(int $id)
    {
        $pdo = Cnx::getInstance();

        $stmt = $pdo->query("SELECT * FROM abonne WHERE id_abonne=" . $id);
        $dbAbonne = $stmt->fetch();

        return new self($id, $dbAbonne["prenom"]);
    }
}
