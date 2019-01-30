<?php

/**
 * Création de la classe testeur
 */
class Testeur
{

    /**
     *
     * méthode diviser
     *
     * @param  int $nb
     * @param  int $denominateur
     * @return float|int
     * @throws Exception
     */
    public function diviser($nb, $denominateur)
    {
        if ($denominateur == 0) {
            throw new Exception("Division par zéro impossible");

        }
        return $nb / $denominateur;
    }

    /**
     * Méthode diviserCentPar
     *
     * @param  int   int
     * @param  int       $denominateur
     * @return float|int
     */
    public function diviserCentPar(int $denominateur)
    {
        try {
            echo $this->diviser(100, $denominateur);
        } catch (Exception $e) {
            echo "Division impossible";
        }

    }
}
