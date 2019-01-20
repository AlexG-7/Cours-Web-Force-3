<?php

//PHP/requetes/pdo.php

// PDO : PHP DATA OBJECT

$pdo = new PDO('mysql:host=localhost;dbname=entreprise', 'root', '', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
));

// $pdo représente un objet de la classe PDO. Classe existante dans le langage. On dit que $pdo est une instance de la classe PDO.
// On parle d'instanciation.

// Pour créer un objet PDO, on doit fournir 4 infos :
    // 1 : Serveur de BDD
    // 2 : Nom de la BDD
    // 3 : Login
    // 4 : MDP

/*
La classe PDO contient plusieurs méthodes (fonction) pour effectuer des requêtes auprès de la BDD (query, exec, prepare, execute).
Dans ce fichier, on va s'intéresser à query(). Et dans le fichier pdo_avance.php, on verra les autres méthodes.

----------------------
Méthode query() :
    Valeurs de retour :

        SELECT/SHOW :
            - succès : PDOStatement (OBJ)
            - echec : FALSE (bool)

        INSERT/DELETE/UPDATE/REPLACE :
            - succès : TRUE (bool)
            - echec : FALSE (bool)
*/


// 0 : Erreur SQL volontaire

// $pdo -> query("fsfsdfsdfdsfdsfsd");
// par défaut, PDO n'affiche pas les erreurs SQL. En revanche, on peut se mettre en mode d'erreur pour les avoir en Dev'.


// 1 : REQUETE INSERT (DELETE/REPLACE/UPDATE)
$resultat = $pdo -> query("INSERT INTO employes (prenom, nom, sexe, service, date_embauche, salaire) VALUES ('Yakine', 'Hamida', 'm', 'informatique', CURDATE(), 5000)");

if ($resultat) {
    // Si la requête s'est bien déroulée
    echo '<p style="background: lightgreen; color: green; border: 1px solid green; padding: 5px">Enregistrement OK </p>';
}









// 2 : REQUETE SELECT (1 seul résultat)

$resultat = $pdo -> query("SELECT * FROM employes WHERE id_employes = 350");

// $resultat ---> OBJ PDOStatement ----> INEXPLOITABLE (en l'état)

//echo '<pre>';
//var_dump($resultat);
//var_dump(get_class_methods($resultat));
//echo '</pre>';

//------------
$employe = $resultat -> fetch(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($employe);
echo '</pre>';

echo 'Bonjour ' . $employe['prenom'] . '<br/>';

// Le résultat d'une requête SELECT est un objet PDOStatement INEXPLOITABLE.
// la fonction fetch de cet objet PDOStatement permet d'indéxer le résultat sous forme d'un array (indexation).

// fetch()  : indexation numérique ET associative
// fetch(PDO::FETCH_ASSOC) : Indéxation associative = Les noms des champs en BDD deviennent les indices
// fetch(PDO::FETCH_NUM) : Indexation numérique = Les indices sont numériques
// fetch(PDO::FETCH_OBJ) : Indéxation sous forme d'un objet StdClass






// 3 : REQUETE SELECT (plusieurs resultats) + fetch()

$resultat = $pdo -> query("SELECT * FROM employes");
//$resultat ---> OBJ PDOStatement ---> INEXPLOITABLE

echo 'Nombre d\'employés : ' . $resultat -> rowCount();

while ($employes = $resultat -> fetch(PDO::FETCH_ASSOC)) {

    // echo '<pre>';
    // print_r($employes);
    // echo '</pre>';

    echo '<h2>' . $employes['nom'] . ' ' . $employes['prenom'] . '</h2>';
    echo '<ul>';
    echo '<li>Sexe : ' . $employes['sexe'] . '</li>';
    echo '<li>Service : ' . $employes['service'] . '</li>';
    echo '<li>Salaire : ' . $employes['salaire'] . '€</li>';
    echo '</ul><hr/>';
}

// La fonction fetch() créer un array PAR ENREGISTREMENT et non un array avec tous les enregistrements.
// Donc lorsque notre requête récupère plusieurs enregistrements, il faut effectuer le fetch et les affichages dans une boucle while.
// la boucle While va tourner tant que la requête retourne des résultats.

// Un seul résultat : PAS DE BOUCLE
// Plusieurs résultats : BOUCLE
// Un résultat mais potentiellement plusieurs : BOUCLE








// 4 : REQUETE SELECT (plusieurs resultats) + fetchAll()

$resultat = $pdo -> query("SELECT * FROM employes");
//$resultat ----> OBJ PDOStatement ----> INEXPLOITABLE

$employes = $resultat -> fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// print_r($employes);
// echo '</pre>';

foreach ($employes as $valeur) {
    echo '<h2>' . $valeur['nom'] . ' ' . $valeur['prenom'] . '</h2>';
    echo '<ul>';
    echo '<li>Sexe : ' . $valeur['sexe'] . '</li>';
    echo '<li>Service : ' . $valeur['service'] . '</li>';
    echo '<li>Salaire : ' . $valeur['salaire'] . '€</li>';
    echo '</ul><hr/>';
}






// 5 : DUPLIQUER UNE TABLE SQL en tableau HTML

$resultat = $pdo -> query("SELECT * FROM employes");
// $resultat ---> OBJ PDOStatement ---> INEXPLOITABLE
$employes = $resultat -> fetchAll(PDO::FETCH_ASSOC);

echo '<table border="1">';
echo '<tr>';
for ($i = 0; $i < $resultat -> columnCount(); $i ++) { // la boucle va tourner autant de fois qu'il y a de champs dans la table.
    $champs = $resultat -> getColumnMeta($i);
    echo '<th>' . $champs['name'] . '</th>';
    // Affiche le nom du champs dans une cellule TH
}
echo '</tr>';

foreach ($employes as $value) {
    echo '<tr>';
    foreach ($value as $indice => $info) {
        echo '<td>' . $info . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
