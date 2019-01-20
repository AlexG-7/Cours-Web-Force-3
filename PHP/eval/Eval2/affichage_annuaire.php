<?php

// Connexion à la BDD : 
$pdo = new PDO('mysql:host=localhost;dbname=repertoire', 'root', '', array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
));


// Affichage nombre hommes et femmes : 

$resultat_m = $pdo -> query("SELECT * FROM annuaire WHERE sexe = 'm'");
$resultat_f = $pdo -> query("SELECT * FROM annuaire WHERE sexe = 'f'");

$nbreHomme = $resultat_m -> rowCount();
$nbreFemme = $resultat_f -> rowCount();

echo 'Nombre d\'hommes : ' . $nbreHomme . ' <br/>';
echo 'Nombre de femmes : ' . $nbreFemme . ' <br/>';


// récupération de toutes les données et affichage

$resultat = $pdo -> query("SELECT * FROM annuaire");

echo '<table border="1">';

echo '<tr>';
for($i = 0; $i < $resultat -> columnCount(); $i++){
	$champs = $resultat -> getColumnMeta($i);
	echo '<th>' . $champs['name'] . ' </th>'; 
}

echo '<th colspan="2">Actions</th>';
echo '</tr>';

while($infos = $resultat -> fetch(PDO::FETCH_ASSOC)){
	echo '<tr>'; 
	foreach($infos as $indice => $valeur){
		echo '<td>' . $valeur . '</td>';
	}
	
	echo '<td><a href="formulaire.php?id_annuaire=' . $infos['id_annuaire'] . '">modification</a></td>';
	echo '<td><a href="suppression.php?id_annuaire=' . $infos['id_annuaire'] . '">suppresion</a></td>';
	echo '</tr>';
}
echo '</table>';






