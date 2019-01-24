<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<form id="qui">
			<div>
				<label>Nom</label>
				<input type="text" name="nom">
			</div>
			<div>
				<label>Prénom</label>
				<input type="text" name="prenom">
			</div>
			<div>
				<button type="submit">Envoyer</button>
			</div>
		</form>
		<div id="reponse"></div>
		<script
			src="../jquery.min.js"></script>
		<script>
			$(function(){ // DOM ready : $(document).ready(function () {});
				$('#qui').submit(function(event) {
					event.preventDefault();

					$.ajax({
						url: '../hello.php',
						// méthode d'envoi, GET ou POST
						// par défaut GET
						method: 'GET',
						// les données que l'on envoie
						// serialize() crée une query string en utilisant l'attribut name des champs du formulaire
						data: $(this).serialize(),
						// la fonction qui traite la réponse de hello.php
						// response contient le contenu retourné par hello.php
						success: function (response) {
							$('#reponse').html(response);
						}
					});
				});
			});
		</script>
	</body>
</html>	