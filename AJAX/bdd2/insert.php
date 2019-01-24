<?php

$pdo = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '', array(
	PDO::ATTR_ERRMODE 				=> PDO::ERRMODE_WARNING,
	PDO::MYSQL_ATTR_INIT_COMMAND 	=> 'SET NAMES utf8',
	PDO::ATTR_DEFAULT_FETCH_MODE 	=> PDO::FETCH_ASSOC
));

$data = [
    'statut' => 'ko',
    'message' => 'Les deux champs doivent être remplis'
];

if (!empty($_POST)) {
    // insert en bdd si les 2 champs ne sont pas vides
    if ($_POST['titre'] != '' && $_POST['auteur'] != '') {
        // on peut utliser la syntaxe irdoc pour chaîne de caractères entre double quote
        // /!\ rien après <<<EOS et EOS; seul sur sa ligne avec aucun espace avant
        $query = <<<EOS
        INSERT INTO livre (
            titre,
            auteur
        ) VALUES (
            :titre,
            :auteur
        )
EOS;

        $resultat = $pdo->prepare($query);
    
        $resultat -> bindParam(':titre', $_POST['titre'], PDO::PARAM_STR);
        $resultat -> bindParam(':auteur', $_POST['auteur'], PDO::PARAM_STR);
    
        if($resultat->execute()){
            $data['statut'] = 'ok';
            $data['message'] = 'Livre enregistré';
        }

    }
}

// transforme un array PHP en JSON
echo json_encode($data);

// echo '<pre>';
// var_dump($data);
// echo '</pre>';