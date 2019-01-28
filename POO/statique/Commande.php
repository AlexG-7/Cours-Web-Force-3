<?php

class Commande
{
    /**
    * @var string
    */
    private $statut;
    // ---------------------------------------------------------------------------------------------------------------
    /**
    * Attribut statique
    * Appartient  la classe et non aux objets instanciés de la classe
    *
    * @var string
    */
    public static $defaultStatut = "en cours";
    // ---------------------------------------------------------------------------------------------------------------
    /**
    * @var int
    */
    private static $nbcommandes = 0;
    // ---------------------------------------------------------------------------------------------------------------
    // ---------------------------------------------------------------------------------------------------------------
    // ---------------------------------------------------------------------------------------------------------------
    /**
    * Constructeur de la classe Commande
    * Cette méthode est appelée automatiquement à l'instanciation de la classe
    */
    public function __construct()
    {
        // self car l'attribut appartient à la classe
        self::$nbcommandes++;
    }
    // ---------------------------------------------------------------------------------------------------------------
    public static function getNbCommandes()
    {
        return self::$nbcommandes;
    }
    // ---------------------------------------------------------------------------------------------------------------
    // ---------------------------------------------------------------------------------------------------------------
    // ---------------------------------------------------------------------------------------------------------------
    /**
     * Getter de l'attribut $statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }
    // ---------------------------------------------------------------------------------------------------------------
    /**
     * Setter de l'attribut $statut
     *
     * @param string $statut
     *
     * @return self
     */
    public function setStatut(string $value)
    {
        $this->statut = $value;
        return $this;
    }
    // ---------------------------------------------------------------------------------------------------------------
    // ---------------------------------------------------------------------------------------------------------------
    // ---------------------------------------------------------------------------------------------------------------
    public static function dummy()
    {
        // Fatal error : $this n'a pas de sens
    // dans une méthode statique car $this fait référence
    // à un objet instancié de la classe
    //return $this->getStatut();
    }
}
