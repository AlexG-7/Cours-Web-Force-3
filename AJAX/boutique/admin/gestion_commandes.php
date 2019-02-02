<?php
// lister les commandes dans un tableau html,
// avec le montant et la date formatés
// et le nom du membre au lieu de son id
require_once('../inc/init.inc.php');

$query = <<<EOS
SELECT c.*, concat_ws(' ', m.prenom, m.nom) AS membre 
FROM commande c
JOIN membre m ON c.id_membre = m.id_membre
ORDER BY date_enregistrement DESC
EOS;

$stmt = $pdo->query($query);
$commandes = $stmt->fetchAll();


require_once('../inc/header.inc.php');
?>
<h1>Gestion des commandes</h1>

<table class="table">
	<tr>
		<th>Id</th>
		<th>Membre</th>
		<th>Montant</th>
		<th>Date</th>
		<th>Etat</th>
		<th></th>
	</tr>
	<?php foreach ($commandes as $commande) : ?>
		<tr>
			<td><?= $commande['id_commande']; ?></td>
			<td><?= $commande['membre']; ?></td>
			<td><?= number_format($commande['montant'], 2, ',', ' ') . ' €'; ?></td>
			<td><?= date('d/m/Y H:i:s', strtotime($commande['date_enregistrement'])); ?></td>
			<td class="td-etat"><?= ucfirst($commande['etat']); ?></td>
			<td>
				<button class=" btn btn-info btn-detail" data-id="<?= $commande['id_commande']; ?>">Voir détail</button>
				<?php if ($commande['etat'] != 'livré') : ?>
					<button class="btn btn-primary btn-etat" data-id="<?= $commande['id_commande']; ?>">
						MAJ état
					</button>
				<?php endif; ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
<div id="detail"></div>

<div class="modal fade" id="modal-produit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Détail produit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<?php
$javascripts = 'detail_commande.js';

require_once('../inc/footer.inc.php');
?>