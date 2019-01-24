<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax</title>
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
        <div id="reponse" style="color: #eee; background: firebrick; text-align: center; padding: 0.5em; border-radius: 0.3em;"></div>
    </div>

    <!-- CDN jQuey -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script>
        $(function(){ // DOM ready (= la page a été chargée)
            $('#qui').submit(function(event) {
                event.preventDefault();

                $.ajax({
                    url: '../hello.php',
                    // méthode d'envoi, GET ou POST (par défaut = GET)
                    method: 'GET',
                    // serialize() crée une query string en utilisant l'atttribut name des champs du formulaire
                    data: $(this).serialize(),
                    // fonction qui traite la réponse de hello.php
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