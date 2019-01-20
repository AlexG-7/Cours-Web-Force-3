<?php

if(isset($_GET['error']) && !empty($_GET['error'])){
	switch($_GET['error']){
		case '1' : 
			echo '<p style="background: pink; color: red; border: 1px solid red; padding: 5px">Veuillez entrer des valeurs numériques. </p>';
		break; 
		
		case '2' : 
			echo '<p style="background: pink; color: red; border: 1px solid red; padding: 5px">La division par 0 est impossible</p>';
		break; 
		
		case '3' : 
			echo '<p style="background: pink; color: red; border: 1px solid red; padding: 5px">Veuillez choisir un opérateur valide</p>';
		break; 
	}
}

?>

<form method="post" action="resultat.php">
	<input type="text" name="n1" />

	<select name="operateur">
			<option value="addition">+</option>
			<option value="soustraction">-</option>
			<option value="multiplication">*</option>
			<option value="division">/</option>
	</select>

	<input type="text" name="n2" />
	<input type="submit" value="Calculer" />

</form>


