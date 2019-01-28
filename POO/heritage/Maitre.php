<?php
/**
 * Created by PhpStorm.
 * User: Etudiant
 * Date: 28/01/2019
 * Time: 12:11
 */

class Maitre
{
    /**
     * @var Animal
     */
    private $animal;

    /**
     * @return Animal
     */
    public function getAnimal(): ?Animal
    {
        return $this->animal;
    }

    /**
     * @param Animal $animal
     * @return Maitre
     */
    public function setAnimal(Animal $animal): Maitre
    {
        $this->animal = $animal;
        return $this;
    }



}