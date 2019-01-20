<!-- PHP/cookies/langue.php -->
<ul>
	<li><a href="?lang=fr">Français</a></li>
	<li><a href="?lang=es">Espagnol</a></li>
	<li><a href="?lang=it">Italien</a></li>
	<li><a href="?lang=en">Anglais</a></li>
</ul>

<?php 

echo '<pre>'; 
print_r($_GET);
echo '</pre>'; 

if(isset($_GET['lang'])){ // Signifie que user vient de choisir une langue
	$langue = $_GET['lang']; 
}
elseif(isset($_COOKIE['lang'])){ // Signifie que user a déjà visité le site
	$langue = $_COOKIE['lang'];
}
else{ // signifie que User n'a jamais visité le site (ou supprimé ses cookies depuis)
	$langue = 'fr'; 
}

// On sort de cette condition avec forcément une valeur dans la variable $langue. Soit la valeur a été choisie par USER (maintenant ou lors d'une précédente visite), soit par défaut, on stocke français. 

$expiration = time() + (395 * 24 * 60 * 60); // timestamp actuel + nbre de seconde dans 13 mois (durée légale en France).

setCookie('lang', $langue, $expiration ); // permet de créer un cookie. Cette fonction attend 3 arguments : 
	//1 : Le nom du cookie,
	//2 : La valeur du cookie, 
	//3 : La date d'expiration en timestamp


switch($langue){ 

	case 'fr' : 
		echo 'Bonjour et bienvenu !';
	break;

	case 'en' : 
		echo 'Hello, welcome !'; 
	break;
	
	case 'it' :
		echo 'Buongiorno, benvenuto !'; 
	break; 
	
	case 'es' :
		echo 'Hola ! Bienvenido !'; 
	break; 
	
	default :
		echo 'Bonjour et bienvenu !';
	break; 
}	
	
	
	
	
	
	


