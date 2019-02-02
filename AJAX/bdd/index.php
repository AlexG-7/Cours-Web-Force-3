<?php
require_once __DIR__ . '/cnx.php';

$query = 'SELECT id_membre, nom, prenom FROM membre ORDER BY nom, prenom';
$stmt = $pdo->query($query);
$membres = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<select id="membre">
			<option value="">Choisissez un membre</option>
			<!-- faire une option par membre en bdd : value : l'id du membre, contenu : nom prénom ; tri : nom prénom -->
			<?php foreach ($membres as $membre) : ?>
				<option value="<?= $membre['id_membre']; ?>">
					<?= $membre['nom'] . ' ' . $membre['prenom']; ?>
				</option>
			<?php endforeach; ?>
		</select>
		<div id="detail"></div>
		<!-- script
			src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous"></script -->
		<script src="../jquery.min.js"></script>
		<script src="membre.js"></script>
	</body>
</html>