<?php

echo '<pre>'; 
print_r($_POST);
echo '</pre>';

if($_POST){
	
	if(is_numeric($_POST['n1']) && is_numeric($_POST['n2'])){
		
		switch($_POST['operateur']){
			
			case 'addition' : 
				$resultat = $_POST['n1'] + $_POST['n2'];
			break; 
			
			case 'soustraction' : 
				$resultat = $_POST['n1'] - $_POST['n2'];
			break; 
			
			case 'multiplication' : 
				$resultat = $_POST['n1'] * $_POST['n2'];
			break; 
			
			case 'division' : 
				if($_POST['n2'] == '0'){
					header('location:calculatrice.php?error=2');
				}
				else{
					$resultat = $_POST['n1'] / $_POST['n2'];
				}
			break; 
			
			default : 
				header('location:calculatrice.php?error=3');
			break; 
		}
	}
	else{
		header('location:calculatrice.php?error=1');
	}
	
	echo 'Voici le résultat : ' . $resultat . '<br/>'; 
	echo '<a href="calculatrice.php">Effectuer un nouveau calcul</a>';
}

