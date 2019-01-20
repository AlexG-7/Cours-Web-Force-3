<?php
/*
$_GET représente l'URL. Il s'agit d'une superglobale, elle appartient au langage. 
Elle s'écrit OBLIGATOIREMENT en majuscule et avec '_'. 
Comme toutes les superglobales, $_GET est tableau de données ARRAY. 
Les paramètre d'URL sont toujours constitués d'une clé et d'une valeur, qui deviendront les indices et valeur de l'ARRAY $_GET. 

page2.php  ?  article=jean  &  couleur=bleu
page2.php  ?  clé=valeur    &  clé=valeur

*/

if(!empty($_GET)){
	
	echo '<pre>'; 
	print_r($_GET);
	echo '</pre>'; 

	if(isset($_GET['article']) && isset($_GET['couleur']) && isset($_GET['prix'])){
		echo 'paramètre article : ' . $_GET['article'] . '<br/>'; 
		echo 'paramètre couleur : ' . $_GET['couleur'] . '<br/>'; 
		echo 'paramètre prix : ' . $_GET['prix'] . '<br/>'; 
	}
}
else{
	// redirection vers la page accueil/404
}

?>




<!-- page2.php -->
<h1>Page 2</h1>

<a href="page1.php">Retour à la page 1</a>