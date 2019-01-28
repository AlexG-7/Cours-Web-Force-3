<?php
require_once 'Animal.php';

class Chat extends Animal
{
    /**
     * Surcharge (= redéfinition) de la méthode identifier()
     * de la classe Animal
     */
    public function identifier()

    {
        //$this->type n'existe pas dans la classe Chat car déclaré private dans Animal
        //return'Je suis un chat de type' .$this->type;
        // parent fait référence à la classe mère Animal
        //$this->regne est accessible dans Chat car déclaré protected dans Animal
        return parent::identifier() . ' et je suis un chat dans le regne' . $this->regne;
    }

    public function crier()
    {
        echo 'Miaou';
    }

    final public function ronronner()
    {
        echo 'Ronron';
    }
}
