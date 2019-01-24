<?php

require_once('../inc/init.inc.php');

if (!empty($_GET)) {
    extract($_GET);
    
    $query = <<<EOS
SELECT
    c.montant,
    c.etat,
    d.*,
    p.*,
    concat_ws(' ', m.prenom, m.nom) AS membre
FROM
    details_commande d
JOIN commande c ON d.id_commande = c.id_commande
JOIN membre m ON c.id_membre = m.id_membre
JOIN produit p ON d.id_produit = d.id_produit
WHERE d.id_commande = :id AND p.id_produit = d.id_produit
EOS;

    $resultat = $pdo->prepare($query);
    $resultat -> bindParam(':id', $id);
    $resultat->execute();
    $commandes = $resultat -> fetchAll(PDO::FETCH_ASSOC);

}

// echo '<pre>';
// print_r($commandes);
// echo '</pre>';

echo '<h2>Détails de la commande n°'. $commandes[0]['id_commande'] .'</h2>';

echo '<h3>'. $commandes[0]['membre'] .'</h3>';
echo '<div><b>Montant : </b>'. number_format($commandes[0]['montant'], 2, ',', ' ') .' €</div>';
echo '<div><b>État : </b>'. ucfirst($commandes[0]['etat']) .'</div><br>';

echo '<table class="table table-dark table-fluid">';
echo '<tr>';
    echo '<th>Photo</th>';
    echo '<th>Produits</th>';
    echo '<th>Description</th>';
    echo '<th>Prix</th>';
    echo '<th>Quantité</th>';
    echo '<th>Détails</th>';
echo '</tr>';

foreach ($commandes as $key=>$commande) {

    echo '<tr>';
        echo '<td><img src="'. RACINE_SITE . '/photo/' . $commandes[$key]['photo'] .'"></td>';
        echo '<td>'. $commandes[$key]['titre'] .'</td>';
        echo '<td>'. $commandes[$key]['description'] .'</td>';
        echo '<td>'. number_format($commandes[$key]['prix'], 2, ',', ' ') .' €</td>';
        echo '<td>'. $commandes[$key]['quantite'] .'</td>';
        echo '<td><button class="btn btn-primary product" data-id="'. $commandes[$key]['id_produit'] .'">Voir produit</button></td>';
    echo '</tr>';
}
echo '</table>';

