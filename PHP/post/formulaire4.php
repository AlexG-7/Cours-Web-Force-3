<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

if ($_POST) {
    // si le formulaire a été activé
    echo 'Pseudo : ' . $_POST['pseudo'] . '<br/>';
    echo 'Email : ' . $_POST['email'] . '<br/>';

    $f = fopen('liste.txt', 'a'); // permet d'ouvrir un fichier. Avec le mode 'a', si le fichier n'existe pas, elle le créé à la volée

    $info = $_POST['pseudo'] . ' - ' . $_POST['email'];

    fwrite($f, $info . "\r\n"); // permet d'écrire dans un fichier
    fclose($f); // permet de fermer un fichier
}

?>
<h1>Formulaire 4</h1>
