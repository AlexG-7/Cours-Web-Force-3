<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paramètres</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
        }
        .container {
            width: 1050px;
            margin: auto;
        }
    </style>
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
        document.getElementById('qui').
            addEventListener('submit', function(event) {
                // on annule la soumission du formulaire
                event.preventDefault();

                var nom = document.getElementById('nom').value;
                var prenom = document.getElementById('prenom').value;

                var queryString = 'nom=' + nom + '&prenom=' + prenom;

                // instanciation de l'objet
                var xhttp = new XMLHttpRequest();

                // on définit ce qui va être fait après l'appel ajax
                xhttp.onreadystatechange = function () {
                    if (xhttp.readyState === 4 && xhttp.status === 200) {
                        document.getElementById('reponse').innerHTML = xhttp.responseText;
                    }
                };

                // appel en HTTP GET du fichier hello.php à la racine du dossier ajax
                xhttp.open('GET', '../hello.php?' + queryString);

                //envoi de l'appel
                xhttp.send();
                
            });
    </script>
</body>
</html>