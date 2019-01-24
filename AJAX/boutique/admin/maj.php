<?php

require_once('../inc/init.inc.php');

$data = [
    'status'=>'ko'
];

if (!empty($_GET)) {
    extract($_GET);

    $query = <<<EOS
        SELECT *
        FROM commande
        WHERE id_commande = :id
EOS;

    $resultat = $pdo->prepare($query);
    $resultat -> bindParam(':id', $id);
    
    if($resultat->execute()){
        $commande = $resultat -> fetch(PDO::FETCH_ASSOC);


        if ($commande['etat'] == 'en cours de traitement') {
            $requete = $pdo->exec("UPDATE commande SET etat = 'envoyé' WHERE id_commande=$id");
            $data['etat'] = ucfirst('envoyé');
        } elseif ($commande['etat'] == 'envoyé') {
            $requete = $pdo->exec("UPDATE commande SET etat = 'livré' WHERE id_commande=$id");
            $data['etat'] = ucfirst('livré');
        }

        if ($requete) {
            $data['status'] = 'ok';
        }

        
    }
    
}

echo json_encode($data);

?>