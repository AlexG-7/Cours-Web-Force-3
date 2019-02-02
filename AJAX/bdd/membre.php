<?php
require_once __DIR__ . '/cnx.php';

$query = 'SELECT * FROM membre WHERE id_membre=' . $_GET['id'];
$stmt = $pdo->query($query);
$membre = $stmt->fetch();
?>
<dl>
	<dt>Pseudo</dt>
	<dd><?= $membre['pseudo']; ?></dd>
	<dt>Email</dt>
	<dd><?= $membre['email']; ?></dd>
	<dt>Adresse</dt>
	<dd>
		<?= $membre['adresse']; ?><br>
		<?= $membre['code_postal'] . ' ' . $membre['ville']; ?>
	</dd>
</dl>