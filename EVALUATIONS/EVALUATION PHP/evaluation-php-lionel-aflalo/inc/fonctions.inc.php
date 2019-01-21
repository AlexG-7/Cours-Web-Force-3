<?php

// Fonction pour améliorer le debug

function debug($var){
	echo '<div style="background:#' . rand(111111, 999999) . '; color: white; padding: 5px;">';
	$trace = debug_backtrace(); // Retourne un array contenant des infos sur la ligne exécutée
	$info = array_shift($trace); // Extrait la 1ere valeur d'un ARRAY

	echo 'Le debug a été demandé dans le fichier ' . $info['file'] .  ' à la ligne '. $info['line'] . '<hr/>';

	echo '<pre>';
	print_r($var);
	echo '</pre>';

	echo '</div>';
}


?>
