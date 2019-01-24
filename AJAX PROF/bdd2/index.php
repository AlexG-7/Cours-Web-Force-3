<!--
Faire un formulaire pour insérer un livre en ajax :
- faire un formulaire avec 2 champs, auteur et titre
- intercepter le submit en js
- envoyer les valeurs des 2 champs en ajax en POST vers un fichier PHP
- ce fichier vérifie que les 2 valeurs ne sont pas vides
- s'ils ne sont pas vides : insert en bdd dans la table livre
ce fichier retourne un JSON av 2 informations :
	- statut: ok ou ko
	- message : de confirmation ou d'erreur
- afficher le message au-dessus du formulaire en vert si le statut est ok, en rouge si ko
-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<div id="message"></div>
		<form id="livre">
			<div>
				<label>Auteur</label>
				<input type="text" name="auteur">
			</div>
			<div>
				<label>Titre</label>
				<input type="text" name="titre">
			</div>
			<div>
				<button type="submit">Enregistrer</button>
			</div>
		</form>
		<script src="../jquery.min.js"></script>
		<script src="livre.js"></script>
	</body>
</html>