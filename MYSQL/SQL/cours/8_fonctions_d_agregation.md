# 2.5 Fonctions d'agrégation

<br>
>Les **fonctions d'agrégation** permettent d'effectuer de simples opérations statistiques sur un ensemble de lignes.

<br><br>
## Compter des résultats avec <code class="prettyprint">COUNT()</code>
<br>

`COUNT()` va compter le nombre de lignes d'un résultat. Cette fonction est très utile avec la clause `GROUP BY`.

    SELECT
        COUNT(*) AS nombre_employes,
        service
    FROM employes
    GROUP BY service;

<br>
**Rappel:** Pour ajouter une condition sur un agrégat, on utilisera la clause `HAVING` et non pas `WHERE`.

    SELECT
        COUNT(*) AS nombre_employes,
        service
    FROM employes
    GROUP BY service
    HAVING COUNT(*) > 2;

<br><br>
## Obtenir une moyenne avec <code class="prettyprint">AVG()</code>
<br>

La fonction `AVG()` retourne la valeur moyenne sur un ensemble de valeur numériques.

    SELECT
        service,
        ROUND(AVG(salaire)) AS salaire_moyen
    FROM employes
    GROUP BY service
    ORDER BY salaire_moyen DESC;

>**Note:** La fonction `ROUND()`, qui permet d'arrondir une valeur numérique, n'est pas une fonction d'agrégation car elle n'agit que sur une valeur et non pas un ensemble.

<br><br>
## Calculer une somme avec <code class="prettyprint">SUM()</code>
<br>

`SUM()` effectuera la somme des valeur de toute une colonne.

    -- Exemple: masse salariale sur une année
    SELECT SUM(salaire * 12) FROM employes;

<br><br>
## Obtenir les valeurs minimum/maximum avec <code class="prettyprint">MIN()</code> & <code class="prettyprint">MAX()</code>
<br>

Les fonctions `MIN()` & `MAX()` permettent d'isoler les valeurs minimum & maximum d'un ensemble.

    SELECT
        service,
        MIN(salaire) AS salaire_minimum,
        MAX(salaire) AS salaire_maximum,
        COUNT(*) AS nombre_employes
    FROM employes
    GROUP BY service
    HAVING COUNT(*) >= 2;

<br><br>
-----
**Précédent:** [2.4 Requête <code class="prettyprint">DELETE</code>](?file=7_delete.md)
**Suivant:** [2.6 Exercices](?file=9_exercices.md)