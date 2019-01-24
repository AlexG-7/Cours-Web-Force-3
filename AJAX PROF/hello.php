<?php
if (!empty($_GET)) {
	extract($_GET);
} else {
	$nom = 'Doe';
	$prenom = 'John';
}

echo "Bonjour $prenom $nom";