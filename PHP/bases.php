<!-- PHP/bases.php -->
<h1>Les bases du PHP</h1>
<!-- On peut écrire de l'HTML dans un fichier PHP -->

<?php
// Pour coder du PHP on ouvre la balise PHP
echo 'Bonjour !'; // Affiche 'Bonjour !'
//print 'Bonjour !';
//En regardant le code source, on se rend compte qu'il n'y a pas de PHP. Il est interprêté sur le serveur et non au niveau du navigateur.

echo '<br/>'; // On afficher de l'HTML
echo 'Bienvenue !';

echo '<h2>Les commentaires</h2>';
// Commentaires sur une ligne
/*
 Commentaire
 sur plusieurs
 lignes
*/
?>

<strong>Bonjour, je suis de l'HTML</strong>

<?php
ech '<br/><strong>Je suis du PHP !</strong>';

echo '<h2>Variables : Déclaration, affectation et type :</h2>';
// Une variables est une petite boîte dans laquelle on stocke une information... qu'on peut modifier.
$a = 127; // Déclaration et affectation;
echo gettype($a);

echo '<br/>';
$b = 15.25;
echo gettype($b);

echo '<br/>';
$c = 'Toto';
echo gettype($c);

echo '<br/>';
$d = true;
echo gettype($d);

echo '<br/>';
$e = '127';
echo gettype($e);

echo '<br/>';
$e = (int) $e;
echo gettype($e);

/*
    integer
    string
    double
    boolean
*/

// Les noms des variables :
$maSuperVariable = 'toto'; // camelCase
$ma_super_variable = 'toto'; //snake_case
//$ma-super-variable = 'toto'; //ERREUR : kebab-case
$MaSuperVariable = 'toto'; //SteadyCase (classe)

//$ma super variable = 'toto'; // pas d'espace dans le nom des variables
$prenom2 = 'Yakine'; // OK
//$2prenom = 'Yakine'; // ERREUR
//$prénom = 'Yakine'; // ERREUR (Pas d'accent)


echo '<h2>La concaténation</h2>';

$x = 'Bonjour ';
$y = 'tout le monde';

echo $x . $y . '<br/>'; // Affiche 'Bonjour tout le monde';
// Le point signifie 'suivi de...';

echo $x , $y , '<br/>'; // la virgule fonctionne aussi pour la concaténation.

echo "$x $y <br/>"; // Sans concaténation

echo '<h2>Concaténation lors de l\'affectation</h2>';

$prenom1 = 'Bruno'; // Affectation de la valeur 'Bruno', dans $prenom1;
$prenom1 = 'Claire'; // On remplace la valeur 'Bruno' par la valeur 'Claire';

$prenom2 = 'Nicolas'; // Affectation d ela valeur 'Nicolas'
$prenom2 .= ' Marie'; // Le .= permet d'ajouter une valeur dans la variable $prenom2
echo $prenom2;
// $prenom2 = $prenom2 . ' Marie';

echo '<h2>Guillemets et quotes</h2>';
$jour = "Aujourd'hui";
$jour = 'Aujourd\'hui';

$texte = 'Bonjour';
echo $texte . ' tout le monde<br/>'; // Concaténartion
echo "$texte tout le monde<br/>"; // Entre guillemets on dit qu'une variable est évaluée (interpêtrée)
echo '$texte tout le monde';

echo '<h2>Constantes et les constantes magiques</h2>';
// Une constante, comme une variable nous permet de stocker une information. Sauf qu'une constante est... constante, alors qu'une variable est... variable.

define("CAPITALE_FRANCE", "Paris");
echo "La capitale de la France est " . CAPITALE_FRANCE . '<br/>';

// Constantes magiques :
echo __DIR__ . '<br/>';
echo __FILE__ . '<br/>';
echo __LINE__ . '<br/>';

//echo __FUNCTION__ . '<br/>';
//echo __CLASS__ . '<br/>';
//echo __METHOD__ . '<br/>';

// exercice : Afficher Bleu - Blanc - Rouge, en utilisant 3 variables et la concaténation.

$couleur1 = 'Bleu';
$couleur2 = 'Blanc';
$couleur3 = 'Rouge';
//$tiret = ' - ' ;

// Concaténation :
echo $couleur1 . ' - ' . $couleur2 . ' - ' . $couleur3 . '<br/>';

// Sans concaténation :
echo "$couleur1 - $couleur2 - $couleur3<br/>";

echo '<h2>Opérateurs arithmétiques</h2>';
$a = 10;
$b = 2;

echo $a + $b . '<br/>'; // Affiche 12
echo $a - $b . '<br/>'; // Affiche 8
echo $a * $b . '<br/>'; // Affiche 20
echo $a / $b . '<br/>'; // Affiche 5
echo $a%$b . '<br/>'; // Affiche 0

$a += $b;
//$a = $a + $b;
echo $a . '<br/>'; // Affiche 12

$a -= $b;
echo $a . '<br/>'; // Affiche 10

$a *= $b;
echo $a . '<br/>'; // Affiche 20

$a /= $b;
echo $a . '<br/>'; // Affiche 10

// Exemple :
$montant = 100;
$montant *= 1.2;

$transport = 10;
$montant += $transport;

$promo = 15;
$montant -= $promo;

echo '<br/>Montant totale de la commande : ' . $montant . '€<br/>';

$a = $a + 1;
$a += 1;
$a++;

echo '<h2>Les structures conditionnelles :</h2>';
// empty() : vide, false ou 0
// isset() : déclaré, définie, existe

$var1 = '';
$var2 = 'Valeur';

if (isset($var3)) {
    // instructions à exécuter;
} else {
    echo 'la variable n\'existe pas !';
}

echo '<br/>';
$a = 10; $b = 5; $c = 2;
if ($a > $b) {
    echo 'Oui A est supérieur à B';
} else {
    echo 'Non A n\'est pas supérieur à B';
}

echo '<br/>';
if ($a > $b && $b > $c) {
    echo 'OK les deux conditions sont réunies';
} else {
    echo 'Non au moins une des deux conditions est fausse';
}

// && (AND)
// true && true : true
// false && true : false
// true && false : false
// false && false : false

echo '<br/>';
$a = 10; $b = 5; $c = 2;
if ($a == 9 || $b > $c) {
    echo 'OK, au moins une des deux conditions est vraie';
} else {
    echo 'Aucune des deux conditions n\'est vraie';
}

// || (OR)
// true  || true  : true
// true  || false : true
// false || true  : true
// false || false : false

echo '<br/>';
$a = 10; $b = 5; $c = 2;
if ($a == 10 xor $b > $c) {
    echo 'Seulement une et une seule des deux conditions doit être vraie';
} else {
    echo 'Soit aucune condition n\'est vraie, soit les deux le sont';
}

// XOR (condition exclusive)
// true  XOR true  : false
// false XOR true  : true
// true  XOR false : true
// false XOR false : false

echo '<br/>';
$a = 10; $b = 5; $c = 2;

if ($a == 8) {
} elseif ($a != 10) {
} else {
    echo 'A n\'est pas égal à 8, et comme il est égal à 10, bah il n\'est pas différent de 10';
}



// forme contracté (ternaire)

echo ($a == 10) ? "A est égal à 10" : "a n\'est pas égale à 10";


// forme normale :
if ($a == 10) {
    echo "A est égal à 10";
} else {
    echo "a n\'est pas égale à 10";
}

// Comparaison :
echo '<br/>';
$ab = 5; // int
$cd = '5'; // string

if ($ab == $cd) {
    echo 'La valeur est la même<br/>';
}

if ($ab === $cd) {
    echo 'C\'est la même chose<br/>';
}

//  =    -> Affectation
//  ==   -> Comparaison de valeur
//  ===  -> Comparaison de valeur et de type


echo '<h2>Condition switch</h2>';
$couleur = 'rouge';
switch ($couleur) {

    case 'bleu':
        echo 'Vous aimez le bleu';
    break;

    case 'rouge':
        echo 'Vous aimez le rouge';
    break;

    case 'vert':
        echo 'Vous aimez le vert';
    break;

    default:
        echo 'Vous n\'aimez ni le bleu, ni le rouge, ni le vert';
    break;
}

// Exercice : Faire la même chose avec un if/elseif/else
echo '<br/>';
if ($couleur == 'bleu') {
    echo 'Vous aimez le bleu';
} elseif ($couleur == 'rouge') {
    echo 'Vous aimez le rouge';
} elseif ($couleur == 'vert') {
    echo 'Vous aimez le vert';
} else {
    echo 'Vous n\'aimez ni le bleu, ni le rouge, ni le vert';
}

echo '<h2>Fonctions prédéfinies</h2>';
// Une fonction prédéfinie existe dans le langage de manière native, et permet d'effectuer un traitement spécifique.
// Il y a beaucoup de fonctions dans le PHP

echo date("d/m/Y - H:i:s"); // retourne la date et l'heure du jours (du moment).
    // Arg 1 : Le format de retour
    // Arg 2 : (optionnel)

echo '<br/>';
echo time();

echo '<br/>';
echo date("d/m/Y - H:i:s", 374050623);

// La fonction date() nous retourne une date formatée. Sans deuxième argument il s'agit de la date/heure du moment. Elle accepte un timestamp en second argument.

// time() nous retourne le nbre de secondes écoulées depuis le 1er janvier 1970. timestamp()

echo '<h2>Fonctions prédéfinies et chaîne de caractères : </h2>';

$email = 'yakine.hamida@evogue.fr';
echo strpos($email, '@');
// retourne la position d'un caractère
 // arg 1 : La CC sur laquelle on travaille
 // arg 2 : Le (les) caractères cherché(s)
 // Succès : INT (position)
 // echec : false


echo '<br/>';
$phrase = "Nous sommes le lendemain de noël";
echo strlen(utf8_decode($phrase)); // Nous retourne le nbre de caractères dans une CC (En réalité c'est le nombre d'octets)

echo mb_strlen($phrase);

echo '<br/>';
$texte = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod pulvinar facilisis. Etiam et ante ut purus tristique gravida eget ut odio.';

 echo substr($texte, 0, 30) . '... <a href="">> Lire la suite</a>';

// Retourne une partie de la CC.
// Arg 1 : La CC sur laquelle on travaille
// Arg 2 : Le point de départ
// Arg 3 : Le nbre de caractères conservés

// Exercice  : Afficher l'extension de l'adresse email saisie (peu importe l'adresse email':

$email = 'Yakine.hamida@evogue.fr';

$position_at = strpos($email, '@'); //13
$fin_email = substr($email, $position_at + 1); //evogue.fr

$position_point = strpos($fin_email, '.'); //6

$extension = substr($email, $position_at + 1, $position_point); //evogue
$extension2 = substr($fin_email, 0, $position_point);


echo '<br/>L\'extension de l\'email est : ' . $extension . '<br/>';
echo '<br/>L\'extension de l\'email est : ' . $extension2 . '<br/>';


$email = 'toto@gmail.com';

$position_at = strpos($email, '@'); //13
$fin_email = substr($email, $position_at + 1); //evogue.fr

$position_point = strpos($fin_email, '.'); //6
$extension = substr($email, $position_at + 1, $position_point); //evogue
echo '<br/>L\'extension de l\'email est : ' . $extension . '<br/>';

echo '<h2>Les fonctions utilisateurs</h2>';
// Le fait de créer ses propres fonctions (fonctions utilisateurs) permet de factoriser le code (masquer la complexité), de pouvoir utiliser le même traitement plusieurs fois, et d'aller plus loin dans les outils fournis par le langage.

// déclaration :
function bonjour()
{
    return 'Bonjour !<br/>';
}

// exécution :
echo bonjour();

//-------------
// déclaration :
function hello($prenom)
{
    echo 'Bonjour ' . $prenom . ' !<br/>';
}

//executions :
hello('Yakine');
hello('Svetlana');

$prenom  = 'Jean-Christophe';
hello($prenom);

//-------
//fonction pour calculer un prix HT en TTC (20%)
function appliqueTva($prixHt)
{
    return $prixHt * 1.2;
}

$montant = 150;

echo 'Le montant du panier, ' . $montant . '€ HT, correspond à ' . appliqueTva($montant) . '€TTC <br/>';

$montantTtc = appliqueTva($montant);
echo 'Le montant du panier, ' . $montant . '€ HT, correspond à ' . $montantTtc . '€TTC <br/>';

// exercice :
// Faire Une fonction appliqueTva2() qui permet de calculer un montant HT en montant TTC, selon les 3 taux de TVA existant (20%, 10%, 5.5%)

// méthode simple
function appliqueTva2($montantHt, $tva = 1.2)
{
    return $montantHt * $tva;
}

$prix = 150;
$taux = 1.10;

echo '<hr/>Le prix de ' . $prix . '€Ht au taux de ' . $taux . ' correspond à un prix de ' .
appliqueTva2($prix) . '€TTC<br/>';
//---------------
function appliqueTva3($montantHt, $tva = 20)
{
    return $montantHt + ($montantHt * $tva/100);
}

$prix = 150;
$taux = 10;

echo '<hr/>Le prix de ' . $prix . '€Ht au taux de ' . $taux . ' % correspond à un prix de ' .
appliqueTva3($prix) . '€TTC<br/>';

// version plus élaborée :
function appliqueTva4($montantHt, $tva = 20)
{
    switch ($tva) {
        case 10:
            $resultat = $montantHt * 1.1;
        break;

        case 20:
            $resultat = $montantHt * 1.2;
        break;

        case 5.5:
            $resultat = $montantHt * 1.055;
        break;

        default:
            $resultat = $montantHt * 1.2;
        break;
    }

    return $resultat;
}

echo '<hr/>Le prix de 150€HT, équivaut à ' . appliqueTva4(150) . '€TTC<br/>';

// Déclaration :
function meteo($saison, $temp)
{
    echo "Nous sommes en " . $saison . " et il fait " . $temp . " degrés";
}

// Exécution :
meteo('printemps', 1);

// exercice : Faire une fonction meteo2, qui est capabmle de gérer l'article en/au en fonction de la saison, et le pluriel/singulier de degré(s)

function meteo2($saison, $temp)
{
    $art = 'en';
    if ($saison == 'printemps') {
        $art = 'au';
    }

    $pluriel = 's';
    if ($temp <= 1 && $temp >= -1) {
        $pluriel = '';
    }

    //echo "<hr/>Nous sommes " . $art . " " . $saison . " et il fait " . $temp . " degré" . $pluriel;
    echo "<hr/>Nous sommes $art $saison et il fait  $temp degré$pluriel ";
}

//exécution :
meteo2('printemps', 0);
meteo2('printemps', 10);
meteo2('été', 25);
meteo2('hiver', -1);


function meteo3($saison, $temp)
{
    if ($saison == 'printemps') {
        if ($temp >= -1 && $temp <= 1) {
            echo "Nous sommes au " . $saison . " et il fait " . $temp . " degré";
        } else {
            echo "Nous sommes au " . $saison . " et il fait " . $temp . " degrés";
        }
    } else {
        if ($temp >= -1 && $temp <= 1) {
            echo "Nous sommes en " . $saison . " et il fait " . $temp . " degré";
        } else {
            echo "Nous sommes en " . $saison . " et il fait " . $temp . " degrés";
        }
    }
}

//exécution :
meteo3('printemps', 0);
meteo3('printemps', 10);
meteo3('été', 25);
meteo3('hiver', -1);

// déclaration d'une fonction pour les titres
function titre($content)
{
    echo '<hr/><h2>' . $content . '</h2>';
}

titre('Structures itératives : Les boucles');

$i = 0;
while ($i < 3) {
    echo $i . '---';
    $i++;
    //$i = $i + 1 // $i += 1
}

// exercice : afficher 0---1---2
echo '<br/>';
$i = 0;
while ($i < 3) {
    if ($i < 2) {
        echo $i . '---';
    } else {
        echo $i;
    }
    $i++;
}

echo '<br/>';
$i = 0;
while ($i < 3) {
    echo $i;
    if ($i != 2) {
        echo '---';
    }
    $i ++;
}

// boucle For
echo '<br/>Boucle for :<br/>';
for ($i = 0; $i < 3; $i ++) {
    echo $i . '---';
}


// Exercice 1 : Afficher 0123456789 avec une boucle for
echo '<hr/>';
for ($i = 0; $i < 10; $i ++) {
    echo $i;
}

// Exercice 2 : Afficher 0123456789 dans un tableau html avec une boucle for

echo '<table border="1">';
echo '<tr>';
for ($i = 0; $i < 10; $i ++) {
    echo '<td>' . $i . '</td>';
}
echo '</tr>';
echo '</table>';


// Exercice 3 : Afficher de 0 à 99 dans un tableau html de 10 lignes (0 à 9, 10 à 19 etc...) avec une boucle for

// Méthode du calcul :
echo '<table border="1">';
for ($i = 0; $i < 10; $i++) {
    echo '<tr>';
    for ($j = 0; $j < 10; $j++) {
        echo '<td>' . ($i * 10 + $j) . '</td>';
    }
    echo '</tr>';
}
echo '</table>';

// Méthode de la variable extérieure :
$z = 0;
echo '<table border="1">';
for ($i = 0; $i < 10; $i++) {
    echo '<tr>';
    for ($j = 0; $j < 10; $j++) {
        echo '<td>' . $z . '</td>';
        // Combien de fois je passe dans cette ligne ?
        // 100 fois
        $z++;
    }
    echo '</tr>';
}
echo '</table>';

// méthode du modulo :

echo '<table border="1">';
echo '<tr>';
for ($i = 0; $i < 100; $i++) {
    echo '<td>'. $i .'</td>';
    if ($i%10 == 9) {
        echo '</tr><tr>';
    }
}
echo '</tr>';
echo '</table>';


//----------
titre('Les inclusions de fichiers');
/*
L'inclusion de fichier permet de prendre le code d'un fichier et de le copier/coller.
Cela va être utile pour inclure les parties communes d'un site sur chaque page (cf compartiment_site).
Cela sera utile pour récupérer des fonctionnalités communes (fonctions, session, connexion à la BDD...)
    - include : S'il y a erreur dans le fichier inclus, l'erreur est affichée mais le reste du script est exécuté

    - require : S'il y a erreur dans le fichier inclus, l'erreur est affichée et le script est STOPPÉ

    - include_once : Fait la même chose qu'include, mais si le fichier est appelé plusieurs il ne l'inclura qu'une fois.

    - require_once : Fait la même chose que require, mais si le fichier est appelé plusieurs il ne l'inclura qu'une fois.
*/

titre('Les tableaux de données ARRAY');
// Un ARRAY est une variable dans laquelle on peut stocker plusieurs informations.
// Les informations stockées sont rangées/classées avec un indice. Comme si notre petite boîte contenait des tiroirs/compartiments.

$liste = array('Rachid', 'Sarah', 'Christian', 'Sandra');

//echo $liste; // Erreur, on ne peut pas afficher un ARRAY.

echo '<pre>';
print_r($liste);
var_dump($liste);
echo '</pre>';

echo 'Bonjour ' . $liste[2] . ' !';

//ON ne peut pas afficher le contenu d'un ARRAY avec echo, mais avec print_r() ou var_dump(), on peut constater ce qu'il y a à l'intérieur. On dit qu'on fait un debug de l'ARRAY.
// Pour afficher/manipuler une information contenue dans l'array, on utilise [] et on cible l'info via son indice ($liste[2] --> 'Christian')


titre('Les boucles FOREACH pour les ARRAY');

// autre façon de créer un ARRAY :
$tab[] = 'France';
$tab[] = 'Italie';
$tab[] = 'Espagne';
$tab[] = 'Portugal';

echo '<pre>';
print_r($tab);
echo '</pre>';

$tab[3] = 'Suisse';

echo '<pre>';
print_r($tab);
echo '</pre>';

$tab[] = 'Angleterre';

echo '<pre>';
print_r($tab);
echo '</pre>';

$tab2 = ['France', 'Italie', 'Espagne', 'Suisse', 'Angleterre'];
echo '<pre>';
print_r($tab2);
echo '</pre>';

// La boucle Foreach :
foreach ($tab as $valeur) { // Le mot clé 'as' est obligatoire, il fait partie du langage
    echo 'Pays : ' . $valeur . '<br/>';
}

foreach ($tab as $indice => $valeur) {
    echo 'A l\'indice N°' . $indice . ' : ' . $valeur . '<br/>';
}
// Dans les paramètre de FOREACH, lorsqu'il y a deux variables, le première représente l'indice, et la seconde, la valeur.

// Comment faire la même chose avec une boucle for ?

for ($i = 0; $i < count($tab) ; $i ++) {// 0-1-2-3-4-etc..
    echo 'A l\'indice N°' . $i . ' : ' . $tab[$i] . '<br/>';
}

$employe = array(
    'id_employes' 	=> 350,
    'prenom' 		=> 'Jean-pierre',
    'nom' 			=> 'Laborde',
    'sexe' 			=> 'm',
    'service' 		=> 'Direction',
    'date_embauche' => '1999-12-09',
    'salaire' 		=> 5275
);

echo '<pre>';
print_r($employe);
echo '</pre>';

echo 'Bonjour ' . $employe['prenom'] . '<br/>';

titre('Les tableaux multidimentionnels');
// Nous parlons de tableau multidimentionnel quand un tableau est contenu dans un autre tableau.

$tab_multi = array(
    0 => array(
        'prenom' => 'Jean-Pierre',
        'nom' => 'Laborde'
    ),
    1 => array(
        'prenom' => 'Clement',
        'nom' => 'Gallet'
    )
);

echo '<pre>';
print_r($tab_multi);
echo '</pre>';

echo 'Bonjour ' . $tab_multi[1]['prenom'] . ' !<br/>';

echo 'Il y a ' . count($tab_multi) . ' élément(s) dans mon tableau multi <br/>';
echo 'Il y a ' . sizeof($tab_multi) . ' élément(s) dans mon tableau multi <br/>';







titre('PHP OO : Exemple');

// Etudiant.class.php
class Etudiant
{
    // variable ---> propriété
    public $prenom;
    public $nom;
    public $email;

    // function ---> méthode
    public function allumerOrdinateur()
    {
        echo 'J\'allume l\'ordinateur !';
    }

    public function reviser()
    {
        echo 'Je révise !';
    }

    public function poserUneQuestion()
    {
        echo 'Je pose une question';
    }
}

$etudiant1 = new Etudiant; // Je créé un objet de la classe etudiant.
$etudiant1 -> prenom = 'Rachid';
$etudiant1 -> nom = 'Hamida';
$etudiant1 -> email = 'rachid.hamida@gmail.com';

echo '<pre>';
var_dump($etudiant1);
echo '</pre>';

$etudiant1 -> allumerOrdinateur();
$etudiant1 -> reviser();
$etudiant1 -> poserUneQuestion();

$etudiant2 = new Etudiant;












echo '<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>';




?>
