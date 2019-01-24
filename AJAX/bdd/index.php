<?php

require_once __DIR__ . '/cnx.php';

$resultat = $pdo->query("SELECT * FROM membre ORDER BY nom, prenom");
$membres = $resultat->fetchAll();

// echo '<pre>';
// var_dump($membres);
// echo '</pre>';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BDD</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
        }
        .container {
            width: 1050px;
            margin: auto;
            padding: 2em 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <select name="membre" id="membre">
            <option value="">Choisissez un membre</option>
            <?php foreach ($membres as $membre) :?>
            <option value="<?=$membre['id_membre']?>"><?= ucfirst($membre['nom'])?> <?= ucfirst($membre['prenom'])?></option>
            <?php endforeach;?>
        </select>
        <br><br>
        <div id="detail"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="membre.js"></script>
</body>

</html>