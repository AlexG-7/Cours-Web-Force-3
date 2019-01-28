<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 28/01/2019
 * Time: 10:43
 */

class Humain
{
    /**
     * @param Chien $chien
     *
     *
     * @param Chien $chien
     */
    public function donnerSucre(Chien $chien)
    {
        $chien->crier();
    }
    /**
     *$animal doit etre une instance d'une classe qui hérite d'Animal
     *
     * @param Animal @animal
     */
    public function caresser(Animal $animal)
    {
        //comme la méthode crier() est definie dans la classe Animal (en méthode abstraite )
        //on est sur que $animal  contient la méthode crier()
        $animal->crier();
    }
}