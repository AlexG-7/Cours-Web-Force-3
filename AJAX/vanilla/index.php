<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<button id="action">
			1er appel AJAX
		</button>
		<div id="reponse"></div>
		<script>
			document.getElementById('action').addEventListener('click', function() {
				// instanciation de l'objet
				var xhttp = new XMLHttpRequest();

				// on définit ce qui va être fait après l'appel ajax
				xhttp.onreadystatechange = function () {
					// xhttp.readyState === 4 : on a reçu la réponse du serveur
					// xhttp.status === 200 : le serveur a répondu avec le code HTTP 200 OK
					if (xhttp.readyState === 4 && xhttp.status === 200) {
						// dans xhttp.responseText, on a le contenu du fichier que l'on appelle
						document.getElementById('reponse').innerHTML = xhttp.responseText;
					}
				}

				// appel en HTTP GET du fichier hello.php à la racine du dossier ajax
				xhttp.open('GET', '../hello.php');
				// envoi de l'appel
				xhttp.send();
			});
		</script>
	</body>
</html>