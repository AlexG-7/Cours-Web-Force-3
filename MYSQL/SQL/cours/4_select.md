# 2.1 Requête <code class="prettyprint">SELECT</code> et les clauses

<br>
## Décomposition d'une requête
<br>

>La requête `SELECT` est celle qui permet d'afficher des résultats, elle n'effectue aucune action sur la base de données.

        SELECT nom, prenom		FROM employes    WHERE              service = 'informatique';

    -- affiches [champs]        de [table]       à condition que    [champ] = [valeur]

<br><br>
## Construire vos premières requêtes
<br>

Sélectionner tous les champs de la table avec `*`

    SELECT * FROM employes;

<br>
Spécifier les champs à afficher

    SELECT nom, prenom FROM employes;

>***<i class="far fa-question-circle"></i> Comment afficher les services occupés par les employés ?***

<br>
Eliminer les doublons avec `DISTINCT`

    SELECT DISTINCT service FROM employes;

<br>
Ajout de condition avec la clause `WHERE`

    SELECT nom, prenom, service FROM employes WHERE service='informatique';

<br><br><br>
## Les opérateurs

<br>
### Les opérateurs de comparaison
<br>

    SELECT nom, prenom, service FROM employes WHERE service = 'informatique';
    SELECT nom, prenom, service FROM employes WHERE service != 'commercial';
    SELECT nom, prenom, salaire FROM employes WHERE salaire > 3000;

>| Opérateur                                                                | Usage                     |
|---|---|
| <code class="prettyprint">=</code>                                        | est égal à                |
| <code class="prettyprint">></code>                                        | est supérieur à           |
| <code class="prettyprint"><</code>                                        | est inférieur à           |
| <code class="prettyprint">>=</code>                                       | est supérieur ou égal à   |
| <code class="prettyprint"><=</code>                                       | est inférieur ou égal à   |
| <code class="prettyprint">!=</code> <code class="prettyprint"><></code>   | est différent de          |

<br><br>
### Les opérateurs logiques
<br>
Les opérateurs `AND`, `OR` et l'importance des parenthèses

    SELECT prenom, nom, salaire, service FROM employes WHERE service = 'commercial' AND salaire > 2000;
    SELECT prenom, nom, salaire, service FROM employes WHERE service = 'commercial' OR service = 'comptabilite';

    SELECT prenom, nom, salaire, service FROM employes WHERE service = 'production' AND salaire = 1900 OR salaire = 2300;
    SELECT prenom, nom, salaire, service FROM employes WHERE service = 'production' AND (salaire = 1900 OR salaire = 2300);

<br>
Retourner les résultats inclus dans une intervalle de données avec `BETWEEN`

    SELECT nom, prenom, date_embauche FROM employes WHERE date_embauche BETWEEN '2010-01-01' AND '2018-09-01';
    SELECT nom, prenom, salaire FROM employes WHERE salaire BETWEEN 2000 AND 3000;

<br>
L'opérateur `LIKE` avec les caractères `%` & `_`

    -- afficher les employés embauchés en 2010
    SELECT nom, date_embauche FROM employes WHERE date_embauche LIKE '2010-%';

    -- afficher les prenoms des employés contenant la lettre "m" (ex: moteur de recherche)
    SELECT prenom FROM employes WHERE prenom LIKE '%m%';

    -- afficher les employés dont le nom en 6 lettres commençant par "Da"
    SELECT nom FROM employes WHERE nom LIKE 'Da____';

<br>
Afficher des résultats dont un champ existe dans une liste avec `IN`

    SELECT nom, prenom FROM employes WHERE service IN('comptabilite', 'informatique');

<br>
A l'inverse: exclure des résultats dont un champ existe dans une liste avec `NOT IN`

    SELECT nom, prenom FROM employes WHERE service NOT IN('comptabilite', 'informatique');

<br><br>
### Opérateurs arithmétiques

Afficher un résultat de calcul

    -- salaire annuel
    SELECT prenom, salaire * 12 FROM employes;

>| Opérateur arithmétique            | Usage                                                                        |
|---|---|
| <code class="prettyprint">+</code> | Addition                                                                     |
| <code class="prettyprint">-</code> | Soustraction                                                                 |
| <code class="prettyprint">*</code> | Multiplication                                                               |
| <code class="prettyprint">/</code> | Division                                                                     |
| <code class="prettyprint">%</code> | Modulo (reste de division. Ex: <code class="prettyprint">6 % 4 = 2</code>)   |

<br>
Renommer temporairement une colonne en créant un **alias** avec `AS`

    SELECT prenom, salaire * 12 AS 'salaire annuel' FROM employes;

<br><br><br>
## Clauses
<br>

### Clause <code class="prettyprint">ORDER BY</code>
<br>

Permet d'ordonner des résultats

    SELECT prenom FROM employes ORDER BY prenom ASC;
    SELECT prenom FROM employes ORDER BY prenom DESC;
    SELECT prenom, salaire FROM employes ORDER BY salaire DESC, prenom;

<br><br>
### Clause <code class="prettyprint">LIMIT</code>
<br>

Permet de limiter le nombre de résultats *(peut s'avérer utile pour créer une pagination sur un site)*

    SELECT prenom FROM employes ORDER BY prenom ASC LIMIT 0,3;      -- Page 1
    SELECT prenom FROM employes ORDER BY prenom ASC LIMIT 3,3;      -- Page 2
    SELECT prenom FROM employes ORDER BY prenom ASC LIMIT 6,3;      -- Page 3

<br><br>
### Clause <code class="prettyprint">GROUP BY</code>
<br>

Permet de grouper les résultats

    SELECT service FROM employes GROUP BY service;

<br><br>
### Clause <code class="prettyprint">HAVING</code>
<br>

La clause `HAVING` est utilisée pour les conditions sur les **agrégats (alias, calculs)**, ce que l'on ne peut pas faire avec `WHERE`

    -- retournera une erreur
    SELECT prenom, salaire * 12 AS salaire_annuel FROM employes WHERE salaire_annuel > 35000;

    -- fonctionnera mais nécessite de réécrire le calcul
    SELECT prenom, salaire * 12 AS salaire_annuel FROM employes WHERE salaire * 12 > 35000;

    -- en utilisant la clause HAVING
    SELECT prenom, salaire * 12 AS salaire_annuel FROM employes HAVING salaire_annuel > 35000;

<br><br><br>
## Des conventions et bonnes pratiques
<br>
### Syntaxe

Le **SQL** est ***insensible à la casse*** par défaut.

    select nom, prenom from employes where service='informatique';

Par convention, les mots-clés du langage sont écrits en **majuscules**

    SELECT nom, prenom FROM employes WHERE service = 'informatique';

Il est possible d'écrire ses requêtes sur plusieurs lignes, par exemple:

    SELECT
        nom,
        prenom
    FROM employes
    WHERE service = 'informatique';


    SELECT  nom
            , prenom
      FROM  employes
     WHERE  service = 'informatique';

<br><br>
### L'ordre d'éxécution des clauses
<br>

Les clauses précédemment vues sont éxécutées *(lues)* dans l'ordre suivant:

 1. <code class="prettyprint">FROM</code>
 2. <code class="prettyprint">WHERE</code>
 3. <code class="prettyprint">SELECT</code>
 4. <code class="prettyprint">GROUP BY</code>
 5. <code class="prettyprint">HAVING</code>
 6. <code class="prettyprint">ORDER BY</code>
 7. <code class="prettyprint">LIMIT</code>

<br>
>***<i class="far fa-question-circle"></i> Que peut-on en conclure sur l'utilisation d'agrégats (alias, calculs) dans la clause <code class="prettyprint">WHERE</code>, ceux-ci étant déclarés dans la clause <code class="prettyprint">SELECT</code> ?
Pourquoi la requête suivante retourne une erreur ?***


    SELECT
        prenom,
        salaire * 12 AS salaire_annuel
    FROM employes
    WHERE salaire_annuel > 35000;

<br><br>
### L'ordre d'écriture des clauses
<br>

    SELECT      [champs]

    FROM        [table]

    WHERE       [conditions]

    GROUP BY    [groupements]

    HAVING      [conditions]

    ORDER BY    [ordre]             ASC|DESC

    LIMIT       [offset, limit]

<br><br>
-----
**Précédent:** [1.3 Requêtes sur base & table](?file=3_requetes_sur_base.md)
**Suivant:** [2.2 Requête <code class="prettyprint">INSERT</code>](?file=5_insert.md)