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
    $(function() { // DOM ready: $(document).ready(function(){});
      $("#qui").submit(function(event) {
        event.preventDefault();

        $.ajax({
          url: "../hello.php",
          // Méthode d'envoi, GET ou POST
          // Par défaut GET
          method: "GET",
          // Les données que l'on envoie serialize() crée un jquery string
          // en utilisant l'attribut name des champs du formulaire
          data: $(this).serialize(),
          // La fonction qui traite la réponse de hello.php
          // response contient le contenu retrourné par hello.php
          success: function(response) {
            $("#reponse").html(response);
          }
        });
      });

    });
  </script>
</body>

</html>
