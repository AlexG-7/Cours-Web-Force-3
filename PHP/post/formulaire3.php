<!-- formulaire3.php -->
<!--Exercice :
	Dans formulaire3.php (HTML)
	-> créer un formulaire (method='post' action="formulaire4.php")
		- pseudo (input text)
		- email (input text)
		- Enregistrer (input submit)

	-> Le formulaire envoie les infos à formulaire4.php

	Dans formulaire4.php
	-> récupérer les données transmises en post dans un print_r
	-> Afficher les données transmises en post avec echo
-->
<h1>Formulaire 3</h1>
<form method="post" action="formulaire4.php">
	<label>Pseudo</label><br/>
	<input type="text" name="pseudo"/><br/><br/>

	<label>Email</label><br/>
	<input type="text" name="email"/><br/><br/>

	<input type="submit" value="Enregistrer" />
</form>
