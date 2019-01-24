<?php
require_once __DIR__ . '/cnx.php';

if (!empty($_POST['titre']) && !empty($_POST['auteur'])) {
	$query = <<<EOS
INSERT INTO livre (
	titre,
	auteur
) VALUES (
	:titre,
	:auteur
)
EOS;
	$stmt = $pdo->prepare($query);
	$stmt->bindValue(':titre', $_POST['titre']);
	$stmt->bindValue(':auteur', $_POST['auteur']);
	$stmt->execute();

	$response = [
		'statut' => 'ok',
		'message' => 'Le livre est enregistré'
	];
} else {
	$response = [
		'statut' => 'ko',
		'message' => 'Tous les champs ne sont pas remplis'
	];
}

echo json_encode($response);