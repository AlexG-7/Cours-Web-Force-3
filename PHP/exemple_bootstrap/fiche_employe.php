<?php

if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])){
	$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '');


	$resultat = $pdo -> query("SELECT * FROM employes WHERE id_employes = $_GET[id]");


	if($resultat -> rowCount() > 0){
		$employe = $resultat -> fetch(PDO::FETCH_ASSOC);
		extract($employe);
	}
	else{
		header('location:index.php');
	}
}
else{
	header('location:index.php');
}


?>

<h1>Fiche de <?= $prenom ?> <?= $nom ?></h1>
<ul>
	<li>Prénom : <?= $prenom ?></li>
	<li>Nom : <?= $nom ?></li>
	<li>Service : <?= $service ?></li>
	<li>Date : <?= $date_embauche ?></li>
	<li>Salaire : <?= $salaire ?></li>
</ul>

<a href="index.php">Retour à la liste</a>