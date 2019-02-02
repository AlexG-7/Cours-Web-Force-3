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
				<select id="action">
					<option value="saluer">Saluer</option>
					<option value="enregistrer">Enregistrer</option>
				</select>
			</div>
			<div>
				<button type="submit">Envoyer</button>
			</div>
		</form>
		<div id="reponse"></div>
		<script
			src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous"></script>
		<script>
			$(function(){ // DOM ready
				$('#qui').submit(function (event) {
					event.preventDefault();

					var action = $('#action').val();

					if (action == 'saluer') { // afficher Bonjour prenom nom
						// raccourci pour $.ajax avec méthod: 'GET'
						$.get(
							'../hello.php', // fichier appelé
							$(this).serialize(), // données envoyées
							function (response) { // success
								$('#reponse').html(response);
							}
						);
					} else { // enregistrer dans noms.txt
						// raccourci pour $.ajax avec méthod: 'POST'
						$.post(
							'../save.php', // fichier appelé
							$(this).serialize(), // données envoyées
							function (response) { // success
								$('#reponse').html(response);
							}
						);
					}
				});
			});
		</script>
	</body>
</html>