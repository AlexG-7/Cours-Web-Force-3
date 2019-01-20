<?php


if($_POST){
//if(!empty($_POST){
	// Si le formulaire est activé
	echo '<pre>'; 
	print_r($_POST);
	echo '</pre>';


	extract($_POST);
	//Fait ceci : 
	//$prenom = $_POST['prenom'];
	//$nom = $_POST['nom'];
	//$email = $_POST['email'];
	// extract() est une fonction très pratique, qui extrait les infos d'un array. Elle créé des variables au nom des indices, et met la valeur correspondante à l'intérieur. 
	
	
	$header = "From: $email \r\n";
	$header .= "Reply-To: $email \r\n";
	$header .= "MIME-Version: 1.0 \r\n";
	$header .= "Content-type: text/html; charset=iso-8859-1 \r\n";
	$header .= "X-Mailer: PHP/" . phpversion();
	
	switch($destinataire){
		
		case '1' : 
		$dest = 'service-client@monsite.com';
		break; 
		
		case '2' : 
		$dest = 'romain@monsitecom';
		break; 
		
		case '3' : 
		$dest = 'nathalie@monsite.com';
		break; 
		
		default : 
		$dest = 'contact@monsite.com';
		break; 
	}
	
	$content = "<h2>$sujet</h2>";
	$content .= "<ul>";
	$content .= "	<li>Prenom : <b> $prenom </b></li>";
	$content .= "	<li>Nom : <b> $nom </b></li>";
	$content .= "	<li>Email : <b> $email </b></li>";
	$content .= "</ul><hr/>";
	$content .= "<p>$message</p>";
	
	mail('yakine.hamida@gmail.com', $sujet, $content, $header);
	/*
	Permet d'envoyer un email via notre serveur
	Elle attend 4 arguments
		- 1 : Destinataire
		- 2 : Objet/sujet
		- 3 : Contenu du message
		- 4 : En-tête (optionnel)
		
		Pour configurer le server SMTP en local : c://xampp/php/php.ini, ligne (1045) smtp = smtp.orange.fr, puis redémarrer Apache. 
	*/
	
}



?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulaire de contact</title>
	</head>
	<body>
		<h1>Formulaire de contact</h1>
		<form method="post" action="">
			<label>Prénom</label><br/>
			<input type="text" name="prenom" /><br/><br/>
			
			<label>Nom</label><br/>
			<input type="text" name="nom" /><br/><br/>
			
			<label>Email</label><br/>
			<input type="text" name="email" /><br/><br/>
			
			<label>Sujet</label><br/>
			<input type="text" name="sujet" /><br/><br/>
			
			<label>Destinataire</label><br/>
			<select name="destinataire">	
				<option value="0">-- Choississez le destinataire --</option>
				<option value="1">Service Client</option>
				<option value="2">Service Technique</option>
				<option value="3">Ressources Humaines</option>
				<option value="4">Autre</option>
			</select><br/><br/>
			
			<label>Message</label><br/>
			<textarea name="message" rows="8" cols="22"></textarea><br/><br/>
			
			<input type="submit" value="Envoyer" />
		</form>
	</body>
</html>

			