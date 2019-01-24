<?php

require_once('../inc/init.inc.php');

if (!empty($_GET)) {
    extract($_GET);

    $query = <<<EOS
        SELECT *
        FROM produit
        WHERE id_produit = :id
EOS;

    $resultat = $pdo->prepare($query);
    $resultat -> bindParam(':id', $id);
    
    if($resultat->execute()){
        $product = $resultat -> fetch(PDO::FETCH_ASSOC);

        $data = [
            'photo' => RACINE_SITE . '/photo/' . $product['photo'],
            'nom_produit' => $product['titre'],
            'cat_prod' => ucfirst($product['categorie']),
            'col_prod' => ucfirst($product['couleur']),
            'taille_prod' => $product['taille'],
            'desc_prod' => $product['description'],
            'prix_prod' => number_format($product['prix'], 2, ',', ' '),
        ];

        
    }
    
}

// echo '<pre>';
// print_r($product);
// echo '</pre>';

// echo '<pre>';
// print_r($data);
// echo '</pre>';

echo json_encode($data);

?>

