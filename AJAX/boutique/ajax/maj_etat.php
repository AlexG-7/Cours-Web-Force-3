<?php
require_once('../inc/init.inc.php');

$query = 'SELECT etat FROM commande WHERE id_commande=' . $_POST['id'];
$stmt = $pdo->query($query);
$etat = $stmt->fetchColumn();

switch ($etat) {
	case 'en cours de traitement':
		$nlEtat = 'envoyé';
		break;
	case 'envoyé':
		$nlEtat = 'livré';
		break;
}

if (isset ($nlEtat)) {
	$query = 'UPDATE commande SET etat = :etat WHERE id_commande=' . $_POST['id'];
	$stmt = $pdo->prepare($query);
	$stmt->bindValue(':etat', $nlEtat);
	$stmt->execute();

	echo ucfirst($nlEtat);
}

