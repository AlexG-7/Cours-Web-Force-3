<?php
require_once('../inc/init.inc.php');

$query = 'SELECT * FROM produit WHERE id_produit=' . $_GET['id'];
$stmt = $pdo->query($query);
$produit = $stmt->fetch();
?>

<dl>
	<dt>Titre</dt>
	<dd><?= $produit['titre'] ?></dd>
	<dt>Référence</dt>
	<dd><?= $produit['reference'] ?></dd>
	<dt>Catégorie</dt>
	<dd><?= $produit['categorie'] ?></dd>
	<dt>Prix</dt>
	<dd><?= number_format($produit['prix'], 2, ',', ' ') . ' €' ?></dd>
</dl>