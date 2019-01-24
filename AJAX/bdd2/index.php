<?php

$pdo = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '', array(
	PDO::ATTR_ERRMODE 				=> PDO::ERRMODE_WARNING,
	PDO::MYSQL_ATTR_INIT_COMMAND 	=> 'SET NAMES utf8',
	PDO::ATTR_DEFAULT_FETCH_MODE 	=> PDO::FETCH_ASSOC
));

// Faire un formulaire pour insérer un livre en ajax :
//     - faire un formulaire avec 2 champs, auteur et titre
//     - intercepter le submit en JS
//     - envoyer les valeurs des 2 champs en ajex avec POST vers un fichier PHP
//     - dans fichier PHP : vérification que les 2 valeurs reçues ne sont pas vides
//     - auquel cas : insert en bdd dans la table livre
//     - puis retour d'un fichier JSON avec 2 infos :
//         + statut : ok ou ko
//         + message : confirmation ou erreur
//     - affichage (au-dessus du formulaire) du message du json en vert ou rouge suivant ok ou ko


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BDD 2</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
        }
        .container {
            width: 1050px;
            margin: auto;
            padding: 2em 0;
        }
        .green {
            background: lightgreen;
            text-align: center;
            color: green;
            padding: 0.5em;
            border: 1px solid green;
            border-radius: 0.3em;
        }
        .red {
            background: pink;
            text-align: center;
            color: red;
            padding: 0.5em;
            border: 1px solid red;
            border-radius: 0.3em;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="" id="book">
            <div>
                <label for="titre">Titre</label><br>
                <input type="text" name="titre" id="titre">
            </div>
            <div>
                <label for="auteur">Auteur</label><br>
                <input type="text" name="auteur" id="auteur">
            </div>
            <div>
                <br><br>
                <button type="submit">Enregistrer</button>
            </div>
        </form>
        <br><br>
        <div id="check"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="ajax.js"></script>
</body>

</html>