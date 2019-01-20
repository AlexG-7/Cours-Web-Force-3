<?php
// boutique/inc/init.inc.php


//-- SESSION
session_start(); 

//-- CONNEXION BDD
$pdo = new PDO('mysql:host=localhost;dbname=boutique', 'root', '', array(
	PDO::ATTR_ERRMODE 				=> PDO::ERRMODE_WARNING,
	PDO::MYSQL_ATTR_INIT_COMMAND 	=> 'SET NAMES utf8',
	PDO::ATTR_DEFAULT_FETCH_MODE 	=> PDO::FETCH_ASSOC
));

//-- VARIABLES
$error = ''; 
$page = '';
$html = '';

//-- CHEMIN

define('RACINE_SITE', '/php/boutique/');
define('RACINE_SERVEUR',$_SERVER['DOCUMENT_ROOT']);


//-- AUTRES INCLUSIONS
require_once('fonctions.inc.php');






