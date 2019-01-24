<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<form id="qui">
			<div>
				<label>Nom</label>
				<input type="text" id="nom">
			</div>
			<div>
				<label>Prénom</label>
				<input type="text" id="prenom">
			</div>
			<div>
				<button type="submit">Envoyer</button>
			</div>
		</form>
		<div id="reponse"></div>
		<script>
			document.getElementById('qui').addEventListener('submit', function(event) {
				// on annule la soumission du formulaire
				event.preventDefault();

				var nom = document.getElementById('nom').value;
				var prenom = document.getElementById('prenom').value;
				var queryString = 'nom=' + nom + '&prenom=' + prenom;
				// instanciation de l'objet
				var xhttp = new XMLHttpRequest();

				xhttp.onreadystatechange = function () {
					if (xhttp.readyState === 4 && xhttp.status === 200) {
						document.getElementById('reponse').innerHTML = xhttp.responseText;
					}
				}

				// appel en post
				xhttp.open('POST', '../save.php');
				// on ajoute une entête HTTP pour signifier qu'on envoie des données en POST
				xhttp.setRequestHeader(
					'Content-type',
					'application/x-www-form-urlencoded'
				);
				// on passe la query string au moment de l'envoi
				xhttp.send(queryString);
			});
		</script>
	</body>
</html>