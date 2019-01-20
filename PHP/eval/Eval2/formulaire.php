<?php 

// Connexion à la BDD : 
$pdo = new PDO('mysql:host=localhost;dbname=repertoire', 'root', '', array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
));

// variable de controle : 
$msg = ''; 

// echo '<pre>'; 
// print_r($_POST);
// echo '</pre>';


// récupérer toutes les infos de l'enregistrement à modifier (si il y a y un id_annuaire dans l'URL :
if(isset($_GET['id_annuaire']) && is_numeric($_GET['id_annuaire'])){
	// Il y a un id dans l'url et il s'agit bien d'une valeur numérique. 
	
	$resultat = $pdo -> query("SELECT * FROM annuaire WHERE id_annuaire = $_GET[id_annuaire]");
	$enr_a_modif = $resultat -> fetch(PDO::FETCH_ASSOC);
	
	echo '<pre>';
	print_r($enr_a_modif);
	echo '</pre>';	
}


// Enregistrer les info en BDD si tout est OK
if($_POST){
	
	
	// On recompose la date au format numérique/anglosaxon
	$date = $_POST['annee'] . '-' . $_POST['mois'] . '-' . $_POST['jour'];
	
	
	// bloc de vérif pour le prénom
	if(empty($_POST['prenom'])){
		$msg .= '<p style="color: red">Veuillez renseigner un prénom.</p>';
	}
	else{
		if(strlen(utf8_decode($_POST['prenom'])) < 3 ||strlen(utf8_decode($_POST['prenom'])) > 25){
			$msg .= '<p style="color: red">Veuillez renseigner un prénom de 3 à 30 caractères.</p>';
		}
	}
	
	
	
	// bloc de vérif pour le nom
	
	if(empty($_POST['nom']) || strlen(utf8_decode($_POST['nom'])) < 3 ||  strlen(utf8_decode($_POST['nom'])) > 25){
			$msg .= '<p style="color: red">Vous devez saisir un prénom, compris entre 3 et 25 caractères.</p>';
	}
	
	
	// bloc de vérif pour le téléphone
	
	if(empty($_POST['telephone']) || strlen($_POST['telephone']) > 10 ||  !is_numeric($_POST['telephone'])   ){
			$msg .= '<p style="color: red">Votre numéro de téléphone n\'est pas valide.</p>';
	}
	
	
	// Controles OK, requete : 
	if(empty($msg)){	
		if(isset($enr_a_modif)){
			$resultat = $pdo -> query("REPLACE INTO annuaire (id_annuaire, nom, prenom, telephone, profession,ville,  codepostal, adresse, date_de_naissance, sexe, description) 
			VALUES 
			($enr_a_modif[id_annuaire], '$_POST[nom]', '$_POST[prenom]', '$_POST[telephone]', '$_POST[profession]', '$_POST[ville]', '$_POST[codepostal]', '$_POST[adresse]', '$date', '$_POST[sexe]', '$_POST[description]') "); 	
		}
		else{
			$resultat = $pdo -> query("INSERT INTO annuaire (nom, prenom, telephone, profession,ville,  codepostal, adresse, date_de_naissance, sexe, description) VALUES ('$_POST[nom]', '$_POST[prenom]', '$_POST[telephone]', '$_POST[profession]', '$_POST[ville]', '$_POST[codepostal]', '$_POST[adresse]', '$date', '$_POST[sexe]', '$_POST[description]') "); 
		}
	
	
		
		
		
		
	}
	
	
	
}









?>



<h1>Formulaire Annuaire</h1>
<form action="" method="post">
<?php echo $msg; ?>
   <label>Nom :<label><br/>
	<input type="text" name="nom" value="<?php if(isset($enr_a_modif)){ echo $enr_a_modif['nom']; } ?>"/><br/><br/>

	<label>Prénom :<label><br/>
	<input type="text" name="prenom" value="<?php if(isset($enr_a_modif)){ echo $enr_a_modif['prenom']; } ?>"/><br/><br/>
	
	<label>Téléphone :<label><br/>
	<input type="text" name="telephone" value="<?php if(isset($enr_a_modif)){ echo $enr_a_modif['telephone']; } ?>"/><br/><br/>
	
	<label>Profession :<label><br/>
	<input type="text" name="profession" value="<?php if(isset($enr_a_modif)){ echo $enr_a_modif['profession']; } ?>"/><br/><br/>
	
	<label>Ville :<label><br/>
	<input type="text" name="ville" value="<?php if(isset($enr_a_modif)){ echo $enr_a_modif['ville']; } ?>"/><br/><br/>
	
	<label>Code postal :<label><br/>
	<input type="text" name="codepostal" value="<?php if(isset($enr_a_modif)){ echo $enr_a_modif['codepostal']; } ?>"/><br/><br/>
	
	<label>Adresse :<label><br/>
	<textarea name="adresse" rows="10" cols="30"><?php if(isset($enr_a_modif)){ echo $enr_a_modif['adresse']; } ?></textarea><br/><br/>

	<label>Date de naissance :</label><br/>

	<?php
	echo '<select name="jour">';
	$i = 1;
	while($i <= 31){
		if($i < 10){
			echo '<option>0' . $i . '</option>';
		}
		else{
			echo '<option>' . $i . '</option>';
		}	
		$i ++;
	}
	echo '</select>';
	?>
	
	<select name="mois">
		<?php
			$mois = array(
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
				"12" => "Décembre",
			);
		
			foreach($mois as $indice => $valeur){
				echo '<option value="' . $indice . '">' . $valeur .  '</option>';
			}	
		?>
	</select>	
	
	<select name="annee">
	<?php for($i = date('Y'); $i >= 1900; $i --) : ?>
		<option><?= $i ?></option>
	<?php endfor; ?>
	</select><br/><br/>
	
	<label>Sexe :</label><br/>
	<select name="sexe">
		<option <?php if(isset($enr_a_modif) && $enr_a_modif['sexe'] == 'm'){ echo 'selected'; } ?> value="m">Homme</option>
		<option <?php if(isset($enr_a_modif) && $enr_a_modif['sexe'] == 'f'){ echo 'selected'; } ?> value="f">Femme</option>
	</select><br/><br/>

	<label>Description :<label><br/>
	<textarea name="description" rows="10" cols="30"><?php if(isset($enr_a_modif)){ echo $enr_a_modif['description']; } ?></textarea><br/><br/>
	
	<input type="submit" value="<?php if(isset($enr_a_modif)){ echo 'Modifier'; }else{ echo 'Enregistrer'; } ?>" />

</form>






