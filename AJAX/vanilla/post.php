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
                <label for="nom">Prénom</label><br>
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


    <script>
        document.getElementById('qui').addEventListener('submit', function(event){
            // On annule la soumission du formulaire
            event.preventDefault();

            var nom = document.getElementById('nom').value;
            var prenom = document.getElementById('prenom').value;
            var queryString = 'nom=' + nom + '&prenom=' + prenom;
            // Instanciation de l'objet
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function(){
                // xhhtp.readyState === 4 : on a reçu la réponse du serveur
                // xttp.status === 200 : le serveur a répondu avec le code HTTP 200 OK
                if (xhttp.readyState === 4 && xhttp.status === 200) {
                    // dans xhttp.responseText, on a le contenu du fichier que l'on appelle
                    document.getElementById("reponse").innerHTML = xhttp.responseText;
                }
             };

            // Appel en HTTP GET du fichier hello.php à la racine du dossier ajax
            xhttp.open("POST","../save.php");
            // On ajoute une entête HTTP pour signifier qu'on envoie des données en POST
            xhttp.setRequestHeader(
              "Content-type",
              "application/x-www-form-urlencoded" // Type MIME d'une page qui contient du POST
            );
            // On passe la queryString au moment de l'envoi
            xhttp.send(queryString);
        });
    </script>
</body>
</html>
