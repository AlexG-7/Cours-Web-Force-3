# 2.2 Requête <code class="prettyprint">INSERT</code>

<br>
>La requête `INSERT` sert à enregistrer une nouvelle *ligne* dans une **table**.

<br>
## Insertion avec indication des champs
<br>

    INSERT INTO employes (
        service,
        prenom,
        nom,
        sexe,
        date_embauche,
        salaire
    ) VALUES (
        'informatique',
        'john',
        'doe',
        'm',
        '2018-03-16',
        2300
    );

Le champ `id_employes` a été omis. Les champs avec une valeur par défaut peuvent être omis lors de l'insertion.
On peut aussi changer l'ordre des colonnes, les informations seront toujours insérées correctement.

<br><br>
## Insertion sans indication des champs
<br>

    INSERT INTO employes VALUES (
        '',
        'jane',
        'dales',
        'f',
        'direction',
        '2018-09-01',
        4300
    );

Les valeurs de toutes les colonnes sont indiquées, dans l'ordre des colonnes.
le champ `id_employes` est précisé par une chaîne vide et sera remplacé par une valeur automatique.

<br><br>
## Insertion d'une sélection
<br>

    INSERT INTO employes (
        prenom,
        nom,
        sexe,
        service,
        date_embauche,
        salaire
    ) SELECT
        first_name,
        name,
        gender,
        'informatique',
        hiring_date,
        salary
    FROM employees
    WHERE employees.id = 123

Ce type d'insertion permet d'enregistrer un résultat de requête pouvant provenir d'une table différente.
Les requêtes d'insertion `INSERT ... SELECT` sont moins courantes que les précédentes mais tout à fait valides.

<br><br>
-----
**Précédent:** [2.1 Requête <code class="prettyprint">SELECT</code> et les clauses](?file=4_select.md)
**Suivant:** [2.3 Requête <code class="prettyprint">UPDATE</code>](?file=6_update.md)