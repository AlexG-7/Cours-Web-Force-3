<?php
$pdo = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

// Infos sur les abonnées : 
$resultat_abonne = $pdo -> query("SELECT * FROM abonne"); // $resultat_abonne est un objet innexploitable 

  
// Infos sur les livres : 
$resultat_livre = $pdo -> query("SELECT * FROM livre");
$resultat_livre = $pdo -> query("SELECT * FROM livre WHERE id_livre NOT IN (SELECT id_livre FROM emprunt WHERE date_rendu IS NULL)"); // resultat_livre est innexploitable

// Traitement pour l'enregistrement :
if($_POST){
	
	extract($_POST);
	
	$date_s = $annee_s . '-' . $mois_s . '-' . $jour_s;
	$date_r = $annee_r . '-' . $mois_r . '-' . $jour_r;
	
	
	
	// vérification abonne:
	$abonne_exist = $pdo -> query("SELECT * FROM abonne WHERE id_abonne = $_POST[abonne]");
	if($abonne_exist -> rowCount() == 0){
		echo 'Erreur, l\'abonne n\'existe pas !';
	}
	
	// vérification livre:
	$livre_exist = $pdo -> query("SELECT * FROM livre WHERE id_livre = $_POST[livre]");
	if($livre_exist -> rowCount() == 0){
		echo 'Erreur, le livre n\'existe pas !';
	}
	
	if($annee_r == '0' || $mois_r == '0' || $jour_r == '0'){
		$pdo -> query("INSERT INTO emprunt (id_livre, id_abonne, date_sortie) VALUES ($livre, $abonne, '$date_s')");
	}
	else{
		$pdo -> query("INSERT INTO emprunt (id_livre, id_abonne, date_sortie, date_rendu) VALUES ($livre, $abonne, '$date_s', '$date_r')");
	}
}
?>
<html>
	<h1>Ajout d'un emprunt :</h1>
	<form method="post" action="">
		<label>Abonnés :</label><br/>
		<select name="abonne">
			<?php
			while($abonne = $resultat_abonne -> fetch(PDO::FETCH_ASSOC)){
				echo '<option value="'. $abonne['id_abonne'] .'">' . $abonne['id_abonne'] . ' - ' . $abonne['prenom'] .'</option>';
			}
			?>
		</select><br/><br/>
		
		<label>Livre :</label><br/>
		<select name="livre">
			<?php
			while($livre = $resultat_livre -> fetch(PDO::FETCH_ASSOC)){
				echo '<option value="'. $livre['id_livre'] .'">' . $livre['id_livre'] . ' - ' . $livre['auteur'] . ' | ' . $livre['titre'] . '</option>';
				
				// echo "<option value='$livre[id_livre]'>$livre[id_livre]  - $livre[auteur] | $livre[titre]</option>";
			}
			?>
		</select><br/><br/>
		
		<label>Date de sortie : </label><br/>
		<select name="jour_s">
		<?php
			for($i=1; $i<= 31; $i++){
				
				if($i < 10){
					echo '<option value="0'. $i .'">0' . $i .'</option>';
				}
				else{
					echo '<option value="'. $i .'">' . $i .'</option>';
				}
			}
		?>
		</select>
		
		<select name="mois_s">
		<?php
			$les_mois = array(
				"01" => "Janvier",
				"02" => "Février",
				"03" => "Mars",
				"04" => "Avril",
				"05" => "Mai",
				"06" => "Juin",
				"07" => "Juillet",
				"08" => "Août",
				"09" => "Septembre",
				"10" => "Octobre",
				"11" => "Novembre",
				"12" => "Décembre"
			);
			foreach($les_mois as $indice => $valeur){
				echo '<option value="' . $indice . '">' . $valeur . '</option>';
				
			}
		?>

		</select>
		
		<select name="annee_s">
			<?php
				$i = date('Y');
				while($i >= 1990){
					echo '<option>' . $i . '</option>';
					$i --;
				}
			?>
		</select><br/><br/>
		
		<label>Date de rendu : </label><br/>
		<select name="jour_r">
			<option value="0">--</option>
		<?php
			for($i=1; $i<= 31; $i++){
				
				if($i < 10){
					echo '<option value="0'. $i .'">0' . $i .'</option>';
				}
				else{
					echo '<option value="'. $i .'">' . $i .'</option>';
				}
			}
		?>
		</select>
		
		<select name="mois_r">
		<option value="0">--</option>
		<?php
			$les_mois = array(
				"01" => "Janvier",
				"02" => "Février",
				"03" => "Mars",
				"04" => "Avril",
				"05" => "Mai",
				"06" => "Juin",
				"07" => "Juillet",
				"08" => "Août",
				"09" => "Septembre",
				"10" => "Octobre",
				"11" => "Novembre",
				"12" => "Décembre"
			);
			foreach($les_mois as $indice => $valeur){
				echo '<option value="' . $indice . '">' . $valeur . '</option>';
				
			}
		?>

		</select>
		
		<select name="annee_r">
		<option value="0">--</option>
			<?php
				$i = date('Y')-10;
				while($i <= date('Y')+10){
					echo '<option>' . $i . '</option>';
					$i ++;
				}
			?>
		</select><br/><br/>
		
		<input type="submit" value="Ajouter" />
		
	</form>
</html>