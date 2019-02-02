<?php
require_once('../inc/init.inc.php');

$query = 'SELECT dc.*, p.titre FROM details_commande dc'
	. ' JOIN produit p ON dc.id_produit=p.id_produit'
	. ' WHERE id_commande=' . $_GET['id']
;
$stmt = $pdo->query($query);
$details = $stmt->fetchAll();
?>
<table class="table">
	<tr>
		<th>ID</th>
		<th>Produit</th>
		<th>Qté</th>
		<th>Prix</th>
		<th></th>
	</tr>
	<?php foreach ($details as $detail) : ?>
		<tr>
			<td><?= $detail['id_details_commande'] ?></td>
			<td><?= $detail['titre'] ?></td>
			<td><?= $detail['quantite'] ?></td>
			<td><?= number_format($detail['prix'], 2, ',', ' ') . ' €' ?></td>
			<td>
				<button class="btn btn-info btn-produit" data-id="<?= $detail['id_produit'] ?>">Voir produit</button>
			</td>
		</tr>
	<?php endforeach; ?>
</table>