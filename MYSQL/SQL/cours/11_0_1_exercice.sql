
1-Affichez les prénoms des abonnés qui ont emprunté un livre le 19/12/2014.

2-Combien de livres Guillaume a t-il emprunté ?

3-Affichez le titre des livres empruntés par Chloé.

4-A l'inverse, affichez le titre des livres que Chloé n'a pas encore emprunté.

5-Aussi, affichez le titre des livres que Chloé na pas encore rendu

6-Qui a emprunté le plus de livres ?





1-  SELECT
    prenom
FROM
    abonne
WHERE
    id_abonne IN(
    SELECT
        id_abonne
    FROM
        emprunt
    WHERE
        date_sortie = "2014-12-19"
)


2-SELECT
    COUNT(id_emprunt)
FROM
    emprunt
WHERE
    id_abonne IN(
    SELECT
        id_abonne
    FROM
        abonne
    WHERE
        prenom = "guillaume"
)

3-SELECT
    titre
FROM
    livre
WHERE
    id_livre IN(
    SELECT
        id_livre
    FROM
        emprunt
    WHERE
        id_abonne IN(
        SELECT
            id_abonne
        FROM
            abonne
        WHERE
            prenom = "chloe"
    )
)

4-SELECT
    titre
FROM
    livre
WHERE
    id_livre NOT IN(
    SELECT
        id_livre
    FROM
        emprunt
    WHERE
        id_abonne IN(
        SELECT
            id_abonne
        FROM
            abonne
        WHERE
            prenom = "chloe"
    )
)

5-SELECT
    titre
FROM
    livre
WHERE
    id_livre IN(
    SELECT
        id_livre
    FROM
        emprunt
    WHERE
        date_rendu IS NULL AND id_abonne IN(
        SELECT
            id_abonne
        FROM
            abonne
        WHERE
            prenom = "chloe"
    )
)

6-SELECT
    *
FROM
    abonne
WHERE
    id_abonne IN(
    SELECT
        COUNT(*)
    FROM
        emprunt
    GROUP BY
        id_abonne
    ORDER BY
        COUNT(*)
    DESC
LIMIT 1
)