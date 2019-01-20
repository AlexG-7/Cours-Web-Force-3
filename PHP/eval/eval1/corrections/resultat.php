<?php

echo '<pre>';
print_r($_POST);
echo '</pre>'; 


if(is_numeric($_POST['n1']) && is_numeric($_POST['n2'])){

	extract($_POST);
	//Fait la même cbhose que les trois lignes ci-dessous  :
	//$n1 = $_POST['n1'];
	//$n2 = $_POST['n2'];
	//$operateur = $_POST['operateur'];

	switch($operateur){

		case 'addition' : 
		$resultat = $n1 + $n2;
		break; 

		case 'soustraction' : 
		$resultat = $n1 - $n2;
		break; 

		case 'multiplication' : 
		$resultat = $n1 * $n2;
		break; 

		case 'division' : 
			if($n2 == 0){
				$resultat = "Résultat nul ! Veuillez effectuer un nouveau calcul";
			}
			else{
				$resultat = $n1 / $n2;
			}
		break; 

		default : 
		$resultat = "Résultat nul ! Veuillez effectuer un nouveau calcul";
		break; 
	}
	echo 'Résultat : ' . $resultat . '<br/>';
}



?>

<a href="calculatrice.php">Effectuer un nouveau calcul</a>