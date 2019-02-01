<?php

/**
 * Création de la classe Chat
 */
class Chat
{

    /**
     * Attribut $prenom
     *
     * @var string (3 à 20 caractères)
     */
    private $prenom;

    /**
     * Attribut $age
     *
     * @var int (nombre entier int)
     */
    private $age;

    /**
     * Attribut $couleur
     *
     * @var string (3 à 10 caractères)
     */
    private $couleur;

    /**
     * Attribut $sexe
     *
     * @var string (mâle ou femelle)
     */
    private $sexe;

    /**
     * Attribut $race
     *
     * @var string (3 à 20 caractères)
     */
    private $race;

    /**
     * Constructeur de la classe Chat
     *
     * @param string $prenom
     * @param int    $age
     * @param string $couleur
     * @param string $sexe
     * @param string $race
     */
    function __construct(
        $prenom,
        $age,
        $couleur,
        $sexe,
        $race
    ) {
        $this->setPrenom($prenom);
        $this->setAge($age);
        $this->setCouleur($couleur);
        $this->setSexe($sexe);
        $this->setRace($race);
    }


    //-------------------GETTER prenom ------------------------------
    /**
     * Get the value of Attribut $prenom
     *
     * @return string (3 à 20 caractères)

     */
    public function getPrenom() : string
    {
        return $this->prenom;

    }

    //--------------------SETTER prenom --------------------------
    /**
     * Set the value of Attribut $prenom
     *
     * @param string (3 à 20 caractères) prenom

     */
    public function setPrenom(string $prenom)
    {
        if ((strlen($prenom) >= 3) && (strlen($prenom) <= 20)) {
            $this->prenom = $prenom;
        }else {
            throw new Exception("Veuillez ressaisir le prénom du chat, il doit être compris entre 3 et 20 caractères<br>");
        }
        return $this;

    }
    //-------------------GETTER age ------------------------------
    /**
     * Get the value of Attribut $age
     *
     * @return int (nombre entier int)

     */
    public function getAge() : int
    {
        return $this->age;

    }

    //--------------------SETTER age --------------------------
    /**
     * Set the value of Attribut $age
     *
     * @param int (nombre entier int) age

     */
    public function setAge(int $age)
    {
        if (is_int($age)) {
            $this->age = $age;
        }else {
            throw new Exception("Veuillez ressaisir l'âge du chat, il doit être un nombre entier");
        }
        return $this;

    }
    //-------------------GETTER couleur ------------------------------
    /**
     * Get the value of Attribut $couleur
     *
     * @return string (3 à 10 caractères)

     */
    public function getCouleur() : string
    {
        return $this->couleur;

    }

    //--------------------SETTER couleur --------------------------
    /**
     * Set the value of Attribut $couleur
     *
     * @param string (3 à 10 caractères) couleur

     */
    public function setCouleur(string $couleur)
    {
        if ((strlen($couleur) >= 3) && (strlen($couleur) <= 10)) {
            $this->couleur = $couleur;
        }else {
            throw new Exception("Veuillez ressaisir la couleur du chat, elle doit être comprise entre 3 et 10 caractères");
        }
        return $this;

    }
    //-------------------GETTER sexe ------------------------------
    /**
     * Get the value of Attribut $sexe
     *
     * @return string (mâle ou femelle)

     */
    public function getSexe() : string
    {
        return $this->sexe;

    }

    //--------------------SETTER sexe --------------------------
    /**
     * Set the value of Attribut $sexe
     *
     * @param string (mâle ou femelle) sexe

     */
    public function setSexe(string $sexe)
    {
        $genre = ["male", "femelle"];
        if (in_array($sexe, $genre)) {
            $this->sexe = $sexe;
        }else {
            throw new Exception("Veuillez ressaisir le sexe du chat, il doit être male ou femelle");
        }
        return $this;

    }
    //-------------------GETTER race ------------------------------
    /**
     * Get the value of Attribut $race
     *
     * @return string (3 à 20 caractères)

     */
    public function getRace() : string
    {
        return $this->race;

    }

    //--------------------SETTER race --------------------------
    /**
     * Set the value of Attribut $race
     *
     * @param string (3 à 20 caractères) race

     */
    public function setRace(string $race)
    {
        if ((strlen($race) >= 3) && (strlen($race) <= 20)) {
            $this->race = $race;
        }else {
            throw new Exception("Veuillez ressaisir la race du chat, elle doit être comprise entre 3 et 20 caractères");
        }
        return $this;

    }

    /**
     * Méthode getInfos
     *
     * Donne les informations du chat
     *
     * @return array
     */
    public function getInfos()
    {
        return
        [
        "prenom" => $this->getPrenom(),
        "âge" => $this->getAge(),
        "couleur" => $this->getCouleur(),
        "sexe" => $this->getSexe(),
        "race" => $this->getRace()
        ];
    }

}





























?>
