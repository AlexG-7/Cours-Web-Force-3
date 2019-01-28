<?php
/**
 * une classe abstraite ne peut pas être instanciée
 * Elle ne sert que dans le cadre de l'héritage
 */
abstract class Animal
{
    /**
     *
     * Un attribut private n'est accessible que dans cette classe
     * (pas meme dans les classes filles)
     * @var string
     *
     *
     *
     */
    private $type = 'indéfini';

    /**
     * Un attribut protected n'est accessible que dans cette classe ET dans ses classes filles
     *
     * @var string
     *
     *
     */

    protected $regne = 'animal';
    /**
     * @return string
     */
    public function identifier()
    {
        return 'Je suis un animal de type' .$this->type;
    }

    /**
     * Méthode abstraite
     * 
     * Toutes les classes qui héritent d'Animal
     * doivent implémenter (définir concrètement) cette méthode
     * 
     * Une classe qui contient .au moins une méthode abstraite
     * doit être déclarée abstraite
     */
    abstract public function crier();
}