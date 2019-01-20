# 4.2 Exercices (Pt. 3-4)

<br>
>**1)** Afficher la liste des emprunts contenant:
 - le prénom de l'abonné
 - la date de sortie formatée en français (<code class="prettyprint">JJ/MM/AAAA</code>)
 - le titre du livre

    SELECT
    	a.prenom,
        DATE_FORMAT(e.date_sortie, '%d/%m/%Y'),
        l.titre
    FROM emprunt AS e
        INNER JOIN abonne AS a
            ON e.id_abonne = a.id_abonne
     	INNER JOIN livre AS l
            ON e.id_livre = l.id_livre;

<br>
>**2)** Afficher la durée (en jours) de chaque emprunt (pour les livres qui ont été rendus):
 - titre du livre
 - nombre de jours tels que: <code class="prettyprint">N jours</code>

    SELECT
        l.titre,
        DATEDIFF(e.date_rendu, e.date_sortie)
    FROM emprunt AS e
        LEFT JOIN livre AS l
            ON e.id_livre = l.id_livre
    WHERE e.date_rendu IS NOT NULL;

>**Bonus:** afficher aussi depuis combien de jours sont empruntés les livres qui n'ont pas encore été rendus.

    SELECT
        l.titre,
        DATEDIFF(COALESCE(e.date_rendu, NOW()), e.date_sortie)
    FROM emprunt AS e
        LEFT JOIN livre AS l
            ON e.id_livre = l.id_livre;

<br>
>**3)** Afficher la liste des livres et le nombre de fois qu'ils ont été empruntés, classés par nombre d'emprunts en ordre décroissant.

    SELECT
    	l.titre,
        l.auteur,
        COUNT(e.id_livre) AS nombre_emprunt
    FROM livre AS l
    	LEFT JOIN emprunt AS e
    		ON l.id_livre = e.id_livre
    GROUP BY l.id_livre
    ORDER BY nombre_emprunt DESC;

<br>
>**4)** Afficher la liste des livres disponibles à la bibliotheque.

    SELECT *
    FROM livre
    WHERE id_livre NOT IN(
    	SELECT id_livre
        FROM emprunt
        WHERE date_rendu IS NULL
    );

<br>
>**5)** Afficher le nombre d'emprunts par an.

    SELECT
    	DATE_FORMAT(date_sortie, '%Y') AS annee,
        COUNT(*) AS nombre_emprunt
    FROM emprunt
    GROUP BY annee;

<br>
>**6)** Afficher la liste des livres classés du titre le plus long au plus court, ainsi que le nom de l'auteur avec uniquement la 1e lettre en majuscule.

    SELECT
        CONCAT(UPPER(SUBSTR(auteur, 1, 1)), LOWER(SUBSTR(auteur, 2))) AS auteur,
        titre
    FROM livre
    ORDER BY LENGTH(titre) DESC;

<br>
>**7)** Afficher le nombre d'emprunts par auteur.

    SELECT
        l.auteur,
        COUNT(e.id_livre)
    FROM livre AS l
    LEFT JOIN emprunt e
        ON l.id_livre = e.id_livre
    GROUP BY l.auteur;

>**8)** Si les livres devaient être rendus au bout de 2 mois, afficher les dates auxquelles les livres qui n'ont pas été rendus auraient dû l'être.

    SELECT
    	a.prenom,
        l.titre,
        e.date_sortie,
        DATE_ADD(e.date_sortie, INTERVAL 2 MONTH) AS "date de rendu supposée"
    FROM
    	emprunt e,
        abonne a,
        livre l
    WHERE
    	e.id_abonne = a.id_abonne
        AND e.id_livre = l.id_livre
        AND e.date_rendu IS NULL;

>**Bonus:** Indiquez aussi depuis combien de jours les abonnés sont en retard pour rendre leurs livres.

    SELECT
    	a.prenom,
        l.titre,
        e.date_sortie,
        DATE_ADD(e.date_sortie, INTERVAL 2 MONTH) AS date_rendu_supposee,
        CONCAT(DATEDIFF(NOW(), (SELECT date_rendu_supposee)), ' jours') AS retard
    FROM
    	emprunt e,
        abonne a,
        livre l
    WHERE
    	e.id_abonne = a.id_abonne
        AND e.id_livre = l.id_livre
        AND e.date_rendu IS NULL;

<br>
>**9)** Afficher la liste des emprunts contenant:
 - le prénom de l'abonné
 - le numéro d'emprunt pour l'abonné (1er, 2e, ... emprunt par l'abonné)
 - la date d'emprunt
 - le titre du livre
 - le numéro d'emprunt pour le livre (1e, 2e, ... fois que le livre est emprunté)

    SELECT
    	a.prenom,
        (
    		SELECT COUNT(*)
            FROM emprunt AS e2
            WHERE
    			e2.id_abonne = a.id_abonne
                AND e2.id_emprunt <= e.id_emprunt
        ) AS "emprunt abonné n°",
        e.date_sortie,
        l.titre,
        (
    		SELECT COUNT(*)
            FROM emprunt AS e2
            WHERE
    			e2.id_livre = l.id_livre
                AND e2.id_emprunt <= e.id_emprunt
        ) AS "emprunt livre n°"
    FROM emprunt AS e
    	LEFT JOIN abonne AS a
    		ON e.id_abonne = a.id_abonne
    	LEFT JOIN livre AS l
    		ON e.id_livre = l.id_livre;

<br><br>
-----
**Précédent:** [4.1 Fonctions prédéfinies](?file=15_fonctions_predefinies.md)
<!-- **Suivant:** [4.2 Fonctions utilisateur](?file=15_fonctions_predefinies.md) -->