<?php
// lister les commandes dans un tableau html
// avec le montant et la date formatés
// et le nom du membre au lieu de son id

require_once('../inc/init.inc.php');

$query = <<<EOS
SELECT
    c.*, concat_ws(' ', m.prenom, m.nom) AS membre
FROM
    commande c
JOIN membre m ON c.id_membre = m.id_membre
ORDER BY date_enregistrement DESC
EOS;
$resultat = $pdo -> query($query);
$commandes = $resultat -> fetchAll(PDO::FETCH_ASSOC);


require_once('../inc/header.inc.php');
?>
<h1>Gestion des commandes</h1>

<table class="table table-dark table-fluid">

    <tr>
        <th>ID commande</th>
        <th>Membre</th>
        <th>Montant</th>
        <th>Date</th>
        <th colspan="2">État</th>
        <th>Détails</th>
    </tr>

    <?php foreach($commandes as $commande) :
        $date = date_create($commande['date_enregistrement']);
        $montant = number_format($commande['montant'], 2, ',', ' ');
        ?>

    <tr>
        <td><?= $commande['id_commande'] ?></td>
        <td><?= $commande['membre'] ?></td>
        <td><?= $montant ?> €</td>
        <td><?= date_format($date, 'd/m/Y H:i:s') ?></td>
        <td><span id="etat-commande-<?= $commande['id_commande']?>"><?= ucfirst($commande['etat']) ?></span></td>
        <td><button class="btn btn-primary maj" data-id="<?= $commande['id_commande']?>" <?= ($commande['etat'] == 'livré') ? 'disabled' : ''?>>MàJ</button></td>
        <td><button class="btn btn-primary see" data-id="<?= $commande['id_commande']?>"><i class="fas fa-eye"></i></button></td>
    </tr>

    <?php endforeach?>

</table>

<div id="detail"></div>

<div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title text-center" id="modal-title">Fiche produit de <span id="nom-produit"></span></h4>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button> -->
        </div>
        <div class="modal-body">
            <img src="" alt="" class="img-responsive img-boutique" id="img-prod"><hr>
			<p class="text-center">Catégorie : <span id="cat-prod"></span></p>
			<p class="text-center">Couleur : <span id="col-prod"></span></p>
			<p class="text-center">Taille : <span id="taille-prod"></span></p>
			<p class="text-center">Description : <span id="desc-prod"></span></p>
			<p class="text-center">Prix : <span id="prix-prod"></span> €</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
        </div>
        </div>
    </div>
</div>

<?php

$javascripts = 'detail_commande.js';

require_once('../inc/footer.inc.php');
?>