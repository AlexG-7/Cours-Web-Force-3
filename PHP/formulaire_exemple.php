<?php
$error = ''; // vide
if (!empty($_POST)) {
    // Si le formulaire est activé

    if (empty($_POST['pseudo'])) {
        $error .=  '<p style="color: red; border: 1px solid red; background: pink; padding: 5px;">Veuillez remplir le pseudo !</p>';
    }

    if (empty($_POST['email'])) {
        $error .= '<p style="color: red; border: 1px solid red; background: pink; padding: 5px;">Veuillez remplir l\'email !</p>';
    } else {
        // L'email n'est pas vide
        if (!strpos($_POST['email'], '@')) {
            $error .= '<p style="color: red; border: 1px solid red; background: pink; padding: 5px;">Veuillez renseigner une adresse mail valide !</p>';
        }
    }

    if (empty($_POST['mdp'])) {
        $error .= '<p style="color: red; border: 1px solid red; background: pink; padding: 5px;">Veuillez remplir le mot de passe !</p>';
    } else {
        // Le mdp n'est pas vide
        if (strlen($_POST['mdp']) < 8 || strlen($_POST['mdp']) > 20) {
            $error .= '<p style="color: red; border: 1px solid red; background: pink; padding: 5px;">Veuillez saisir un mot de passe compris entre 8 et 20 caractères !</p>';
        }
    }







    if (empty($error)) {
        $error .= '<p style="color: green; border: 1px solid green; background: lightgreen; padding: 5px;">Félicitations</p>';
    }
}


?>

<!DOCTYPE html>
<html>
	<head>
		<title>Formulaire exemple</title>
	</head>
	<body>
		<header style="height: 80px; background: red;">
		</header>
		<h1>Formulaire</h1>

		<?php echo $error; ?>

		<form method="post" action="">
	<label>Pseudo</label><br/>
	<input type="text" name="pseudo" /><br/><br/>

	<label>Email</label><br/>
	<input type="text" name="email" /><br/><br/>


	<label>Mot de passe</label><br/>
	<input type="text" name="mdp" /><br/><br/>
	<label>Date de naissance</label><br/>

	<select name="jour">
		<?php
        for ($i = 1; $i <= 31; $i++) {
            //echo '<option>' . substr('0'.$i, -2) . '</option>';
            echo '<option>' . sprintf('%02d', $i) . '</option>';
        }
        //2018-12-01
        ?>
	</select>

	<select name="mois">
		<option>Janvier</option>
		<option>Février</option>
		<option>Mars</option>
		<option>...</option>
		<option>Décembre</option>
	</select>

	<select name="annee">
		<?php
        $i = date('Y') - 16;
        while ($i >= 1950) {
            echo '<option>' . $i . '</option>';
            $i --;
        }
        ?>
	</select><br/><br/>

	<input type="submit" value="Inscription" />
		</form>
	</body>
</html>
