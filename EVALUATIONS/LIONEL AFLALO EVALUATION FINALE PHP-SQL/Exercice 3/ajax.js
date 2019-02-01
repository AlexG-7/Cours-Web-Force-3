$(function() { // DOM ready
  $('#ajoutVoiture').submit(function(event) {
    event.preventDefault();

    $.post(
      'connexion.php', {
        marque: $("#marque").val(), // Nous récupérons la valeur de nos inputs
        modele: $("#modele").val(),
        annee: $("#annee").val(),
        couleur: $("#couleur").val(),
      },

      function(data) {

        if (data == 'Success') {


          $("#response").html("<p>Vous avez bien enregistré votre voiture !</p>");
        } else {
          // Le membre n'a pas été connecté. (data vaut ici "failed")

          $("#response").html("<p>Erreur lors de la saisie de la voiture</p>");
        }

      },
      'json'
    );
  });
});