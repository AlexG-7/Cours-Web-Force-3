<?php
//php/post/lecture.php

/*Exercice : 
Faire une boucle qui affiche les infos de chaque inscrit de la manière suivante

<h2>Inscrit N° 1</h2>
<ul>
	Pseudo : Yakine
	Email : yakine.hamida@evogue.fr
</ul><hr/>
*/

$liste = file('liste.txt');

echo '<pre>'; 
print_r($liste);
echo '</pre>'; 

foreach($liste as $indice => $valeur){
	$valeur = utf8_decode($valeur);
	
	$position = strpos($valeur, ' - ');
	//echo $position . '<br/>'; 
	
	$pseudo = substr($valeur, 0, $position);
	//echo $pseudo . '<br/>'; 
		
	$email = substr($valeur, $position + 3);
	//echo $email . '<br/>'; 
	
	echo '<h2>Inscrit N°' . ($indice + 1) . '</h2>';
	echo '<ul>';
	echo '<li>Prénom : ' . $pseudo . '</li>';
	echo '<li>Email : ' . $email . '</li>';
	echo '</ul><hr/>';
}


// méthode avec explode
foreach($liste as $indice => $valeur){
	
	$tab = explode(' - ', $valeur);
	
	echo '<pre>';
	print_r($tab);
	echo '</pre>'; 
		
	$pseudo = $tab[0];
	$email = $tab[1];
	
	echo '<h2>Inscrit N°' . ($indice + 1) . '</h2>';
	echo '<ul>';
	echo '<li>Prénom : ' . $pseudo . '</li>';
	echo '<li>Email : ' . $email . '</li>';
	echo '</ul><hr/>';
}








?>