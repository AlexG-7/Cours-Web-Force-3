<?php
$pdo = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
$msg = ''; 
if($_POST){
	if(empty($_POST['prenom'])){
		$msg .= '<p style="background: red; font-weight: bold; color: white; padding: 5px">Veuillez renseigner un prénom</p>'; 
	}
	else{
		if(strlen($_POST['prenom']) > 25 || strlen($_POST['prenom']) < 3){
			$msg .= '<p style="background: red; font-weight: bold; color: white; padding: 5px">Veuillez renseigner un prénom de 3 caractères mini et 25 caractères max !</p>';
		}
		else{
			$pdo -> query("INSERT INTO abonne (prenom) VALUES ('$_POST[prenom]')"); 
			$msg .= '<p style="background: green; font-weight: bold; color: white; padding: 5px">L\'abonné à été ajouté !</p>';
		}
	}
}
?>
<html>
	<h1>Ajouter un abonné</h1>
	<?php echo $msg; ?>
	<form method="post" action="">
		<label>Prénom :</label><br/>
		<input type="text" name="prenom" /><br/>
		<input type="submit" value="Ajouter" />
	</form>
</html>