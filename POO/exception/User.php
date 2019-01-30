<?php

/**
 * Création de la classe User
 */
class User
{
    /**
     * Attribut $pseudo
     *
     * @var string
     */
    private $pseudo;

    /**
     * Attribut $age
     *
     * @var int
     */
    private $age;

    /**
     * Attribut $status
     *
     * @var string
     */
    private $status;

    /**
     *
     * Attribut statique $availableStatuses
     *
     * @var array
     */
    private static $availableStatuses = [
      "user",
      "admin"
    ];

    //-------------------GETTER pseudo ------------------------------
    /**
     * Get the value of Attribut $pseudo
     *
     * @return string
     */
    public function getPseudo() : string
    {
        return $this->pseudo;

    }

    //--------------------SETTER pseudo --------------------------
    /**
     * Set the value of Attribut $pseudo
     *
     * @param string pseudo
     */
    public function setPseudo(string $pseudo)
    {
        if (mb_strlen($pseudo) > 50) {
            throw new Exception("'$pseudo' fait plus de 50 caractères");
        }
        $this->pseudo = $pseudo;
        return $this;

    }
    //-------------------GETTER age ------------------------------
    /**
     * Get the value of Attribut $age
     *
     * @return int
     */
    public function getAge() : int
    {
        return $this->age;

    }

    //--------------------SETTER age --------------------------
    /**
     * Set the value of Attribut $age
     *
     * @param int age
     */
    public function setAge($age)
    {
        if (!is_int($age)) {
            // classe d'exception pour un paramètre non voulu
            throw new InvalidArgumentException("'$age' n'est pas un entier");

        }
        $this->age = $age;
        return $this;

    }
    //-------------------GETTER status ------------------------------
    /**
     * Get the value of Attribut $status
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;

    }

    //--------------------SETTER status --------------------------
    /**
     * Set the value of Attribut $status
     *
     * @param string status
     */
    public function setStatus(string $status)
    {
        if (!in_array($status, self::$availableStatuses)) {
            throw new UnexpectedValueException(
                "'$status' n'est pas un statut reconnu, les statuts possibles sont "
                . implode(", ", self::$availableStatuses)
            );

        }
        $this->status = $status;
        return $this;

    }

}
