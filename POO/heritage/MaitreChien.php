<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 28/01/2019
 * Time: 11:52
 */

class MaitreChien
{
    /**
     * @var Chien
     */
    private $chien;

    /**
     * Getter de l'attribut $chien
     * Retourne une instance de la classe Chien
     * ou null (point d'interrogation)
     *
     * @return Chien
     */
    public function getChien(): ?Chien
    {
        return $this->chien;
    }

    /**
     * Setter de l'attribut $chien
     * prend un objet instance de Chien en paramètre
     * et retourne un objet MaitreChien
     *
     * @param Chien $chien
     * @return MaitreChien
     */
    public function setChien(Chien $chien): MaitreChien
    {
        $this->chien = $chien;
        return $this;
    }


}