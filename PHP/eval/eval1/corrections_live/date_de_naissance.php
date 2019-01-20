
<?php

if($_POST){
	// En BDD on attend une date sous le format numerique (AAAA-MM-JJ), donc avant d'enregistrer les infos en BDD, on doit recomposer la date. Cf exemple ci-dessous : 
	// 03/01/2019 ---> 2019-01-03
	
	$date = $_POST['annee'] . '-' . $_POST['mois'] . '-' . $_POST['jours'];
	echo 'Date : ' . $date;
}


?>

<form method="post">
	<label>Date de naissance : </label>
	<select name="jours">
		<?php $i = 1;
		while($i <= 31){
			echo '<option>' . substr('0' . $i, -2) . '</option>';
			$i ++;
		}?>
	</select>

	<select name="mois">
		
		<?php
			$mois = array(
				'01' => 'Janvier',
				'02' => 'Février',
				'03' => 'Mars',
				'04' => 'Avril',
				'05' => 'Mai',
				'06' => 'Juin',
				'07' => 'Juillet',
				'08' => 'Août',
				'09' => 'Septembre',
				'10' => 'Octobre',
				'11' => 'Novembre',
				'12' => 'Décembre',
			);
			foreach($mois as $indice => $valeur){
				echo '<option value="'. $indice .'">'. $valeur .'</option>';
				//echo "<option value='$indice'>$valeur</option>";
			}
		?>

		
	</select>

	<select name="annee">
		<?php 
		for($i = date('Y'); $i >= 1900; $i --){
			echo "<option>$i</option>";
		}
		?>
	</select>
	<input type="submit" />
</form>