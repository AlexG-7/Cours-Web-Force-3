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
				<label>Action</label>
				<select name="action" id="action">
					<option value="saluer">Saluer</option>
					<option value="enregistrer">Enregistrer</option>
				</select>
			</div>
			<div>
				<button type="submit">Envoyer</button>
			</div>
		</form>
		<div id="reponse" style="display: none">
			<p>Données envoyées en <span id="method"></span> pour <span id="pour"></span></p>
			<p>Bonjour <span id="nom-complet"></span></p>
			<p>Statut : <span id="statut"></span></p>
			<p>Message : <span id="message"></span></p>
		</div>
		<script
			src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous"></script>
		<script>
			$(function(){ // DOM ready
				$('#qui').submit(function (event) {
					event.preventDefault();

					var action = $('#action').val();

					if (action == 'saluer') {
						$.get(
							'../traitement.php',
							$(this).serialize(),
							function (response) {
								$('#method').html(response.method);
								$('#pour').html(response.action);
								$('#nom-complet').html(response.nom_complet);
								$('#statut').html(response.status);
								$('span#message').html(response.message);
								$('#reponse').show();
							},
							'json' // type de données reçues
						);
					} else {
						$.post(
							'../traitement.php',
							$(this).serialize(),
							function (response) {
								$('#method').html(response.method);
								$('#pour').html(response.action);
								$('#nom-complet').html(response.nom_complet);
								$('#statut').html(response.status);
								$('span#message').html(response.message);
								$('#reponse').show();
							},
							'json' // type de données reçues
						);
					}
				});
			});
		</script>
	</body>
</html>