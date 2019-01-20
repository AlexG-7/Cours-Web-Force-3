<?php
$pdo = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

echo '<a href="?action=affichage&table=abonne">Abonne</a><br/>';
echo '<a href="?action=affichage&table=livre">Livre</a><br/>';
echo '<a href="?action=affichage&table=emprunt">Emprunt</a><br/>';

if(isset($_GET['action']) && $_GET['action'] == 'affichage'){
	
	if(isset($_GET['table']) && ($_GET['table'] == 'abonne' || $_GET['table'] == 'livre' || $_GET['table'] == 'emprunt')){
	
		
		$resultat = $pdo -> query("SELECT * FROM $_GET[table]");
		
		if($_GET['table'] == 'emprunt'){
			$resultat = $pdo -> query("SELECT l.auteur, l.titre, e.*, a.prenom 
			FROM livre l 
			LEFT JOIN emprunt e ON l.id_livre = e.id_livre
			LEFT JOIN abonne a ON a.id_abonne = e.id_abonne"
			);
		}
		
		echo '<table border="1">';
		echo '<tr>';
		for($i = 0; $i < $resultat -> columnCount(); $i++){
			$meta = $resultat -> getColumnMeta($i);
			echo '<th>' . $meta['name'] . '</th>';
		}
		// echo '<th colspan="2">action</th>';
		echo '</tr>';

		while($annuaire = $resultat -> fetch(PDO::FETCH_ASSOC)){ 
			echo '<tr>'; 
			foreach($annuaire as $valeur){
				echo ' <td>' . $valeur . '</td>';	
			}
			
			// echo '<td><a href="?action=modification&id_annuaire=' . $annuaire['id_annuaire'] . '">Modifier</a></td>';
			// echo '<td><a href="?action=suppression&id_annuaire=' . $annuaire['id_annuaire'] . '">Supprimer</a></td>';
			echo '</tr>';
		}
		echo '</table>';
	}
}