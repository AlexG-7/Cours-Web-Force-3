# 3.3 Jointure externe

<br>
>Une **jointure** externe se fera en utilisant le mot-clé `JOIN`.

    INSERT INTO abonne (prenom) VALUES ('aymeric');

<br>
Comparons les résultats de ces deux requêtes:

    -- Jointure
    SELECT a.prenom, e.id_livre
    FROM abonne a, emprunt e
    WHERE a.id_abonne = e.id_abonne;

    -- Jointure externe
    SELECT a.prenom, e.id_livre                         -- champs à afficher
    FROM abonne a                                       -- à partir de la table
        LEFT JOIN emprunt e                             -- à laquelle on en joint une autre
            ON a.id_abonne = e.id_abonne;               -- sur une colonne

<br>
La jointure externe permet de rappatrier toutes les données d'une table sans correspondance obligatoire.
Ici il s'agit de la table `abonne` qui est ***"à gauche"*** car nous avons effectué un `LEFT JOIN`.
<br>
><i class="far fa-question-circle"></i> Rajoutez une 2nde jointure pour afficher le titre des livres à la place de leur *ID*.

<br><br>
-----
**Précédent:** [3.2 Jointure](?file=12_jointure.md)
**Suivant:** [3.4 Union](?file=14_union.md)