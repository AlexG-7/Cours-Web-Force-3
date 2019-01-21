<?php

if ($_POST) {

    echo "Nom : " . $_POST["nom"] . "<br>";
    echo "Prénom : " . $_POST["prenom"] . "<br>";
    echo "Adresse : " . $_POST["adresse"] . "<br>";
    echo "Ville : " . $_POST["ville"] . "<br>";
    echo "Code Postal : " . $_POST["cp"] . "<br>";
    echo "Sexe : " . $_POST["sexe"] . "<br>";
    echo "Description : " . $_POST["description"] . "<br>";

}

?>











<h1>Formulaire</h1>

<form action="" method="post">

<label for="">Nom</label>
<input type="text" name="nom" id=""><br><br>

<label for="">Prénom</label>
<input type="text" name="prenom" id=""><br><br>

<label for="">Adresse</label>
<input type="text" name="adresse" id=""><br><br>

<label for="">Ville<label>
<input type="text" name="ville" id=""><br><br>

<label for="">Code Postal</label>
<input type="text" name="cp" id=""><br><br>

<label for="">Sexe</label>
<select name="sexe" id="">
<option value="0">--Selectionner votre sexe--</option>
<option value="m">Homme</option>
<option value="f">Femme</option>
</select><br><br>

<label for="">Description</label><br>
<textarea name="description" id="" cols="30" rows="10"></textarea><br><br>

<input type="submit" value="Envoi">

</form>
