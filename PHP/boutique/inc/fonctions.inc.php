<?php

//php/boutique/inc/fonctions.inc.php


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


// fonction pour savoir si l'utilisateur est connecté

function userConnecte(){
	if(isset($_SESSION['membre'])){
		return true; 
	}
	else{
		return false; 
	}
}

// fonction pour savoir si l'utilisateur est Admin 
function userAdmin(){
	if(userConnecte() && $_SESSION['membre']['statut'] == '1'){
		return true;
	}
	else{
		return false;
	}
}


// Fonction pour ajouter un produit au panier
function ajouterProduit($id_produit, $quantite, $photo, $titre, $prix){
	if(!isset($_SESSION['panier'])){
		$_SESSION['panier'] = array();
		// $_SESSION['panier']['id_produit'] = array();
		// $_SESSION['panier']['titre'] = array();
		// $_SESSION['panier']['photo'] = array();
		// $_SESSION['panier']['prix'] = array();
		// $_SESSION['panier']['quantite'] = array();
	}
	else{
		$position = array_search($id_produit, $_SESSION['panier']['id_produit']);
		// Si le produit existe déjà dans le panier, $position va contenir un chiffre (0, 1, 2...), ou alors false si le produit n'est pas déjà dans le panier. 
	}
	
	if(isset($position) && $position !==  false){
		// Si le produit existe dans le panier, on va dans le tableau qui stocke les quantité pour lui ajouter la nouvelle quantité
		$_SESSION['panier']['quantite'][$position] += $quantite;
	}
	else{
		// Le produit n'était pas dans le panier
		$_SESSION['panier']['titre'][] = $titre;
		$_SESSION['panier']['id_produit'][] = $id_produit;
		$_SESSION['panier']['quantite'][] = $quantite;
		$_SESSION['panier']['photo'][] = $photo;
		$_SESSION['panier']['prix'][] = $prix;
	}
}


// fonction pour compter le nombre d'article dans le panier
function nbProduit(){
	$nombre = 0; 
	
	if(isset($_SESSION['panier']['quantite'])){
		for($i=0; $i < count($_SESSION['panier']['quantite']); $i++){
		// On tourne autant de fois qu'il y a de références dans le panier (nombre de ligne dans le petit tableau des quantités)
			$nombre += $_SESSION['panier']['quantite'][$i];
		}
	}
	
	return $nombre;
}


function montantTotal()
{
	$total = 0;
	
	for($i = 0; $i < count($_SESSION['panier']['id_produit']); $i++)
	{
		$total += $_SESSION['panier']['quantite'][$i] * $_SESSION['panier']['prix'][$i];
	}
	return round($total,2);
}



function retirerProduit($id_produit_a_supprimer)
{
	$position_produit = array_search($id_produit_a_supprimer, $_SESSION['panier']['id_produit']);
	
	if($position_produit !== false)
	{
		array_splice($_SESSION['panier']['titre'], $position_produit,1);	
		array_splice($_SESSION['panier']['id_produit'], $position_produit,1);	
		array_splice($_SESSION['panier']['quantite'], $position_produit,1);	
		array_splice($_SESSION['panier']['prix'], $position_produit,1);	
		array_splice($_SESSION['panier']['photo'], $position_produit,1);	
	}
}





