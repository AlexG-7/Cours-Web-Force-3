<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Paramètres</title>

</head>

<body>

  <div class="container">
    <form action="" id="qui">
      <div>
        <label for="nom">Nom</label><br>
        <input type="text" name="nom" id="nom">
      </div>
      <div>
        <label for="prenom">Prénom</label><br>
        <input type="text" name="prenom" id="prenom">
      </div>
      <div>
        <label>Action</label>
        <select id="action">
          <option value="saluer">Saluer</option>
          <option value="enregistrer">Enregistrer</option>
        </select>
      </div>
      <div>
        <br><br>
        <button type="submit">Envoyer</button>
      </div>
    </form>
    <br><br>
    <div id="reponse"></div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
  </script>
  <script>
    $(function() { // DOM ready
      $("#qui").submit(function(event) {
        event.preventDefault();

        var action = $("#action").val();

        if (action == "saluer") {
          // Afficher Bonjour prenom nom
          // Raccourci pour $.ajax avec method: "GET"
          $.get(
            "../hello.php", // Fichier appelé
            $(this).serialize(), // Données envoyées
            function(response) { // Sucess
              $("#reponse").html(response);
            }
          );
        } else {
          // Enregistrer dans nom.txt
          // Raccourci pour $.ajax avec method: "POST"
          $.post(
            "../save.php", // Fichier appelé
            $(this).serialize(), // Données envoyées
            function(response) {
              $("#reponse").html(response);
            }
          )

        }
      });
    });
  </script>
</body>

</html>