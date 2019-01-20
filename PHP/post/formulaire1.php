<?php


echo '<pre>';
print_r($_POST);
echo '</pre>';

if (!empty($_POST)) {
    echo 'Prénom : ' . $_POST['prenom'] . '<br/>';
    echo 'Description : ' . $_POST['description'] . '<br/>';
}


?>

<!-- php/post/formulaire1.php -->
<h1>Formulaire 1</h1>
<form method="post" action="">
	<label>Prénom</label><br/>
	<input type="text" name="prenom"/><br/><br/>

	<label>Description</label><br/>
	<textarea name="description" rows="6" cols="22"></textarea><br/><br/>

	<input type="submit" value="Valider" />
</form>
