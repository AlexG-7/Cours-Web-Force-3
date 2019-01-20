<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

$error = ''; // variable vide !!!

if ($_POST) {
    // Si le formulaire est activé

    // vérifications : taille, type (string, numeric), email...

    foreach ($_POST as $indice => $valeur) {
        if (empty($valeur)) {
            $error .= '<p style="background: pink; color: red; border:1px solid red; border-radius: 3px; padding: 5px">Veuillez renseigner le champs ' . $indice . ' </p>';
        }
    }// fin du foreach

    if (empty($error)) {
        // Tout va bien, error est vide, donc les feux sont au vert !! On peut poursuivre (Insertion en BDD par exemple).
        $error .= '<p style="background: lightgreen; color: green; border:1px solid green; border-radius: 3px; padding: 5px">Félicitations ❤️</p>';
    }
}
?>
<!-- php/post/formulaire2.php -->
<h1>Formulaire 2</h1>
<?= $error ?>
<form method="post" action="">
	<label>Ville</label><br/>
	<input type="text" name="ville" value="<?php if (isset($_POST['ville'])) {
    echo $_POST['ville'];
} ?>"/><br/><br/>

	<label>Code Postal</label><br/>
	<input type="text" name="cp" value="<?php if (isset($_POST['cp'])) {
    echo $_POST['cp'];
} ?>"/><br/><br/>
	<label>Adresse</label><br/>

	<textarea name="adresse" rows="6" cols="22"><?php if (isset($_POST['adresse'])) {
    echo $_POST['adresse'];
} ?></textarea><br/><br/>

	<input type="submit" value="Enregistrer" />
</form>
