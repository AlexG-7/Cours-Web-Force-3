<?php

/**
 * Créer une classe abstraite Vehicule
 * 2 clases qui en héritent : Voiture et Moto
 * qui vont contenir des méthodes pour retourner :
 * - le nombre de roues (lié au type de véhicule)
 * - le type de carburant (essence ou diesel)
 * - la vitesse max
 *  Ajouter un constructeur
 *  Instancier un véhicule de chaque type
 */


/**
 * Ajouter 2 attributs contenanceReservoir et contenuReservoir
 * Créer une classe Pompe (à essence) avec 3 attributs :
 * TypeCarburant, contenance et contenu
 * Dans Vehicule, ajouter une méthode fairePlein() qui prend une Pompe
 * en paramètre, qui remplit le réservoir du véhicule
 * et enlève autant d'essence à la Pompe
 *
 * BONUS :
 * - jeter une erreur si le type de carburant n'est pas le bon
 * - gérer le cas où la pompe ne contient pas assez d'essence pour faire le plein
 */
require_once 'Vehicule.php';
require_once 'Voiture.php';
require_once 'Moto.php';

$voiture = new Voiture("Skyline",4,"essence",280);
$moto = new Moto("essence",200);

echo "<pre>";
var_dump($voiture);
echo "</pre>";














?>
