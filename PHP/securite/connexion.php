<?php 
/*
 Une injection SQL, permet de détourner le comportement initialement prévu d'une requête. 
 
 ---- 
 Exemple 1 : 
	
	pseudo : juju'#
	mdp : 
	
	Requete : Requête : SELECT * FROM membre WHERE pseudo = 'juju'#' AND mdp = ''
	
	Explications : La quote permet de terminer la CC pseudo, et le # termine la requete. ON cherche donc juste un membre par son pseudo. 
	

 -----	
 Exemple 2 : 
	
	pseudo : 
	mdp : ' OR id_membre='2

	requete : SELECT * FROM membre WHERE pseudo = '' AND mdp = '' OR id_membre='2'
	
	Explications : On cherche à se connecter avec un membre dont pseudo et mdp sont vides (n'existe pas) OU ALORS, avec le membre id 2. 
	
 ---
 exemple 3 : 
	pseudo : 
	mdp : ' OR 1 = '1
	
	Requête : Requête : SELECT * FROM membre WHERE pseudo = '' AND mdp = '' OR 1 = '1'
	
	Explications : On demande un membre vide, OU ALORS on dit que 1 = 1... SQL Ne comprend pas et nous renvoie toutes la table o_O

	
 ---
 Exemple (injection decode dans un form)

	pseudo : <p style="color:red">test</p>
	pseudo : <script type="text/javascript">var i =0;while(i < 10){alert('pb');i++}(</script>

*/

session_start();
$pdo = new PDO('mysql:host=localhost;dbname=securite', 'root', '');

if($_POST){
	
	echo '<pre>'; 
	print_r($_POST);
	echo '</pre>'; 
	
	echo 'Pseudo : ' . $_POST['pseudo'] . '<br/>'; 
	echo 'MDP : ' . $_POST['mdp'] . '<hr/>';

	//----------
	echo '<h3>Après netoyage :</h3>'; 
	
	$_POST['pseudo'] = htmlentities(addslashes($_POST['pseudo']));
	$_POST['mdp'] = htmlentities(addslashes($_POST['mdp']));
	
	// Avec une boucle foreach
	foreach($_POST as $indice => $value){
		$_POST[$indice] = htmlentities(addslashes($value));
	}
	
	echo 'Pseudo : ' . $_POST['pseudo'] . '<br/>'; 
	echo 'MDP : ' . $_POST['mdp'] . '<hr/>';
	//--------
	
	$requete = "SELECT * FROM membre WHERE pseudo = '$_POST[pseudo]' AND mdp = '$_POST[mdp]'";
	$resultat = $pdo -> query($requete);
	
	echo 'Requête : ' . $requete . '<hr/>';

	if($resultat -> rowCount() > 0){
	// Si la requête nous retourne un résultat, cela signifie qu'il existe bien un membre avec ce pseudo et ce MDP... On purrait donc le connecté
		
		// Pour le connecter : 
		//1 : Récupère les infos du membre
		//2 : On enregistre ses infos dans le fichier de session ($_SESSION)
		
		$membre = $resultat -> fetch(PDO::FETCH_ASSOC);
		// $membre est un array contenant les infos du membre.
		
		echo '<div style="background: lightgreen; border: 1px solid green; padding: 5px; color: green">';
		echo '<p>Félicitations vous êtes connecté !</p>';
		echo '<ul>';
		echo '<li>Pseudo : '. $membre['pseudo'] .'</li>'; 
		echo '<li>Email : '. $membre['email'] .'</li>'; 
		echo '<li>Mdp : '. $membre['mdp'] .'</li>'; 
		echo '</ul>';
		echo '</div>';
	}
	else{
		echo '<p style="background: pink; border: 1px solid red; color: red; padding: 5px;">Erreur d\'identifiants !</p>'; 
	}
}




?>

<h1>Connexion</h1>
<form method="post" action="">
	<label>Pseudo :</label><br/>
	<input type="text" name="pseudo" /><br/><br/>
	
	<label>Mot de passe :</label><br/>
	<input type="text" name="mdp" /><br/><br/>
	
	<input type="submit" value="Connexion" />
</form>

