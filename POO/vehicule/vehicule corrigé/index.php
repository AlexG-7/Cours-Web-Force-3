<?php
/*
 * Créer une classe abstraite Vehicule
 * 2 classes qui en héritent : Voiture et Moto
 * qui vont contenir des méthodes pour retourner :
 * - le nombre de roues (lié au type de véhicule)
 * - le type de carburant (essence ou diesel)
 * - la vitesse max
 * Ajouter un constructeur
 * Instancier un véhicule de chaque type
 */
require_once 'Voiture.php';
require_once 'Moto.php';
require_once 'Pompe.php';

$voiture = new Voiture('diesel', 180, 80, 50);
$moto = new Moto('essence', 200, 30, 10);

echo 'La voiture utilise le carburant "' . $voiture->getTypeCarburant()
    . '" et va à ' . $voiture->getVitesseMax() . ' km/h max';

echo '<br>La moto utilise le carburant "' . $moto->getTypeCarburant()
    . '" et va à ' . $moto->getVitesseMax() . ' km/h max';

echo '<br>Une voiture a ' . Voiture::getNbRoues() . ' roues';
echo '<br>Une moto a ' . Moto::getNbRoues() . ' roues';

/*
 * Ajouter 2 attributs contenanceReservoir et contenuReservoir
 * Créer une classe Pompe (à essence) avec 3 attributs :
 * typeCarburant, contenance et contenu
 * Dans Vehicule, ajouter une méthode fairePlein() qui prend une Pompe
 * en paramètre, qui remplit le reservoir du Vehicule
 * et enlève autant d'essence à la Pompe
 *
 * Bonus:
 * - jeter une erreur si le type de carburant n'est pas le bon
 * - gérer le cas où la pompe ne contient pas assez d'essence pour faire le plein
 */

$pompe = new Pompe('essence', 2000, 1500);

echo '<br>Avant :<br>'
    . 'véhicule : ' . $moto->getContenuReservoir()
    . '/' . $moto->getContenanceReservoir()
    . '<br>Pompe : ' . $pompe->getContenu() . '/' . $pompe->getContenance()
;

$moto->fairePlein($pompe);

echo '<br>Après :<br>'
    . 'véhicule : ' . $moto->getContenuReservoir()
    . '/' . $moto->getContenanceReservoir()
    . '<br>Pompe : ' . $pompe->getContenu() . '/' . $pompe->getContenance()
;

echo '<br>Avant :<br>'
    . 'véhicule : ' . $voiture->getContenuReservoir()
    . '/' . $voiture->getContenanceReservoir()
    . '<br>Pompe : ' . $pompe->getContenu() . '/' . $pompe->getContenance()
;

$voiture->fairePlein($pompe);

echo '<br>Après :<br>'
    . 'véhicule : ' . $voiture->getContenuReservoir()
    . '/' . $voiture->getContenanceReservoir()
    . '<br>Pompe : ' . $pompe->getContenu() . '/' . $pompe->getContenance()
;

$pompeASec = new Pompe('diesel', 1500, 10);

echo '<br>Avant :<br>'
    . 'véhicule : ' . $voiture->getContenuReservoir()
    . '/' . $voiture->getContenanceReservoir()
    . '<br>Pompe : ' . $pompeASec->getContenu() . '/' . $pompeASec->getContenance()
;

$voiture->fairePlein($pompeASec);

echo '<br>Après :<br>'
    . 'véhicule : ' . $voiture->getContenuReservoir()
    . '/' . $voiture->getContenanceReservoir()
    . '<br>Pompe : ' . $pompeASec->getContenu() . '/' . $pompeASec->getContenance()
;
