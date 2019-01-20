<?php

for ($i = 1; $i <= 31; $i++) {

}

?>

<form action="">

<label for="">Jour</label>
<select name="jour" id="">
<option value="0">--choisissez un jour--</option>
<?php
for ($i = 1; $i <= 31; $i++) {
    echo "<option value=" . $i . ">" . $i . "</option>";
}
?>
</select>

<label for="">Mois</label>
<select name="mois" id="">
<option value="0">--choisissez un mois--</option>
<option value="1">Janvier</option>
<option value="2">Février</option>
<option value="3">Mars</option>
<option value="4">Avril</option>
<option value="5">Mai</option>
<option value="6">Juin</option>
<option value="7">Juillet</option>
<option value="8">Août</option>
<option value="9">Septembre</option>
<option value="10">Octobre</option>
<option value="11">Novembre</option>
<option value="12">Décembre</option>
</select>

<label for="">Année</label>
<select name="annee" id="">
<option value="0">--Choisissez une année</option>
<?php
for ($i = 2019; $i >= 1900; $i--) {
    echo "<option value=" . $i . ">" . $i . "</option>";
}
?>
</select>

<input type="submit" value="Envoi">
</form>