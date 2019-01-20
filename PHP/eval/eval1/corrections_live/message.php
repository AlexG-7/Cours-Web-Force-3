<ul>
	<li><a href="?pays=fr">France</a></li>
	<li><a href="?pays=es">Espagne</a></li>
	<li><a href="?pays=it">Italie</a></li>
	<li><a href="?pays=an">Angleterre</a></li>
</ul><hr/>
<?php

	if(isset($_GET['pays']) && !empty($_GET['pays']) ){
		
		switch($_GET['pays']){
			
			case 'fr' : 
				echo 'Vous êtes français !';
			break; 
			
			case 'es' : 
				echo 'Vous êtes espagnol !';
			break;
			
			case 'it' : 
				echo 'Vous êtes italien !';
			break;
			
			case 'an' : 
				echo 'Vous êtes anglais !';
			break;
			
			default : 
				echo 'Veuillez choisir un pays dans la liste des pays disponibles';
			break;
		}
	}
	
?>