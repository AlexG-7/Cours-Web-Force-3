<?php
$pdo = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
$msg = ''; 
if($_POST){
	if(empty($_POST['auteur'])){
		$msg .= '<p style="background: red; font-weight: bold; color: white; padding: 5px">Veuillez renseigner un auteur</p>'; 
	}
	else{
		if(strlen($_POST['auteur']) > 25 || strlen($_POST['auteur']) < 3){
			$msg .= '<p style="background: red; font-weight: bold; color: white; padding: 5px">Veuillez renseigner un auteur de 3 caractères mini et 25 caractères max !</p>';
		}
	}
	//-----------------
	if(empty($_POST['titre'])){
		$msg .= '<p style="background: red; font-weight: bold; color: white; padding: 5px">Veuillez renseigner un titre</p>'; 
	}
	else{
		if(strlen($_POST['titre']) > 50 || strlen($_POST['titre']) < 3){
			$msg .= '<p style="background: red; font-weight: bold; color: white; padding: 5px">Veuillez renseigner un titre de 3 caractères mini et 50 caractères max !</p>';
		}
	}
	
	if(empty($msg)){ // Tout est OK !! 
	
		$auteur = strtoupper($_POST['auteur']);
		$titre = ucfirst($_POST['titre']);
	
		$pdo -> query("INSERT INTO livre (auteur, titre) VALUES ('$auteur', '$titre')"); 
		$msg .= '<p style="background: green; font-weight: bold; color: white; padding: 5px">Le livre a été ajouté !</p>';
	}
}
?>
<html>
	<h1>Ajouter un livre</h1>
	<?php echo $msg; ?>
	<form method="post" action="">
		<label>Auteur :</label><br/>
		<input type="text" name="auteur" /><br/>
		<label>Titre :</label><br/>
		<input type="text" name="titre" /><br/>
		<input type="submit" value="Ajouter" />
	</form>
</html>