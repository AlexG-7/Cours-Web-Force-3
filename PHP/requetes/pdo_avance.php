<?php
// PHP/requetes/pdo_avance.php

$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));


/*
Il existe plusieurs fonctions pour effectuer une requete avec PDO (query, exec, prepare + execute). On a vu query dans le fichier pdo.php

-------
exec() : INSERT / UPDATE / DELETE / REPLACE

Valeurs de retour :
    Succès : N (INT)
    Echec : FALSE (BOOL)

------
prepare() + execute() : On utilise les requêtes préparées pour tous les types de requête... Lorsqu'il y a des données sensibles (POST et GET)

Valeurs de retour :
    prepare() : PDOStatement (OBJ)

    execute() :
        Succès : TRUE (BOOL)
        Echec : FALSE (BOOL)

-----
Quand utiliser quelle méthode ?

$resultat = $pdo -> query(SELECT * FROM employes);

$resultat = $pdo -> query(SELECT * FROM employes WHERE prenom ='Jean-pierre')

$resultat = $pdo -> prepare(SELECT * FROM employes WHERE id_employes = $_GET[id])
// traitements...
$resultat -> execute();

$resultat = $pdo -> exec("INSERT INTO employes (prenom, nom) VALUES ('toto', 'tata')")

$resultat = $pdo -> prepare("INSERT INTO employes (prenom, nom) VALUES ('$_POST[prenom]', '$_POST[nom]')");
// traitements
$resultat -> execute();
*/



try {
    // 6 : ERREUR SQL VOLONTAIRE
    //$resultat = $pdo -> query("wscdqsdqsdqsdqsd");


    // 7 : REQUETE UPDATE avec EXEC()

    $resultat = $pdo -> exec("UPDATE employes SET salaire = (salaire + 150) WHERE service = 'informatique'");

    if ($resultat) {
        echo 'tous les informaticiens gagnent 150 euros de plus';
        echo '<br/>nbre d\'informaticiens : ' . $resultat;
    }



    // 8 : SELECT avec prepare + execute et marqueur '?'

    $_POST['prenom'] = 'Amandine';
    $_POST['nom'] = 'Thoyer';

    $resultat = $pdo -> prepare("SELECT * FROM employes WHERE prenom = ? AND nom = ? ");
    $resultat -> execute(
        array(
            $_POST['prenom'],
            $_POST['nom']
        )
    );
    // les requêtes préparées permettent de déléguer la gestion des données sensibles à PDO. On prépare la requête puis on execute en transmettant les données.

    // execute() est une methode de notre objet $resultat (PDOStatement)
    // Le marqueur non nominatif '?' permet de passer les valeurs sensibles dans un array en argument de la méthode execute().
    // /!\ Attention : Les valeurs doivent être passées dans l'ordre des marqueurs.


    // 9 : SELECT avec prepare + execute et marqueur ':'
    $_POST['prenom'] = 'Amandine';
    $_POST['nom'] = 'Thoyer';

    $resultat = $pdo -> prepare("SELECT * FROM employes WHERE prenom = :prenom AND nom = :nom ");
    $resultat -> execute(array(
        'nom' 		=> $_POST['nom'],
        'prenom' 	=> $_POST['prenom']
    ));


    // 10 : SELECT avec prepare + execute et marqueur ':' + BindParam/bindValue
    $_POST['prenom'] = 'Amandine';
    $_POST['nom'] = 'Thoyer';

    $resultat = $pdo -> prepare("SELECT * FROM employes WHERE prenom = :prenom AND nom = :nom ");

    $resultat -> bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
    $resultat -> bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
    // Avec BindParam() ou bindValue() les données sont castées avant que la requête soit exécutée.

    $resultat -> execute();


    // 11 : SELECT avec fetch directement dans la requete
    $resultat = $pdo -> query("SELECT * FROM employes", PDO::FETCH_ASSOC);

    echo '<pre>';
    var_dump($resultat);
    echo '</pre>';

    foreach ($resultat as $value) {
        echo 'Bonjour ' . $value['prenom'] . '!<br/>';
    }
} catch (PDOException $e) {
    echo '<div style="color: red; background: pink; padding: 10px; border: 1px solid red" >';
    echo '<h2>ERREUR SQL :</h2>';
    echo 'Code : ' . $e -> getCode() . '<br/>';
    echo 'Message : ' . $e -> getMessage() . '<br/>';
    echo 'Fichier : ' . $e -> getFile() . '<br/>';
    echo 'Ligne : ' . $e -> getLine() . '<br/>';
    echo '</div>';

    // Rapport d'erreur :

    $f = fopen('error.txt', 'a');

    $erreur = 'Erreur SQL : ' . date('d/m/Y - h:i:s') . ' - ' .  $e -> getFile() . ' - ' . $e -> getLine() . "\r\n";

    fwrite($f, $erreur);
    fclose($f);

    exit; // Stoppe le script
    // redirection...
}
