-- Date de sortie/rendu des livres écrits par Alphonse Daudet
SELECT
	e.date_sortie,
	e.date_rendu
FROM
	emprunt e,
	livre l
WHERE
	e.id_livre = l.id_livre
	AND l.auteur = "ALPHONSE DAUDET";

SELECT
	e.date_sortie,
	e.date_rendu
FROM
	emprunt AS e
	INNER JOIN livre AS l ON e.id_livre = l.id_livre
WHERE l.auteur = "ALPHONSE DAUDET";


-- Qui a emprunté le livre "Une vie" en 2014
SELECT a.prenom
FROM
	abonne a,
	emprunt e,
	livre l
WHERE
	e.id_abonne = a.id_abonne
	AND e.id_livre = l.id_livre
	AND l.titre = "Une vie"
	AND e.date_sortie LIKE "2014%";

SELECT a.prenom
FROM
	emprunt AS e
	INNER JOIN abonne AS a ON e.id_abonne = a.id_abonne
	INNER JOIN livre AS l ON e.id_livre = l.id_livre
WHERE
	l.titre = "Une vie"
	AND e.date_sortie LIKE "2014%";
	
	
-- Afficher le nombre de livres empruntés par abonné
SELECT
	a.prenom,
	COUNT(*) AS nombre_livres_empruntes
FROM
	abonne a,
	emprunt e,
	livre l
WHERE
	e.id_abonne = a.id_abonne
	AND e.id_livre = l.id_livre
GROUP BY e.id_abonne;

SELECT
	a.prenom,
	COUNT(*) AS nombre_livres_empruntes
FROM
	emprunt AS e
	INNER JOIN abonne AS a ON e.id_abonne = a.id_abonne
	INNER JOIN livre AS l ON e.id_livre = l.id_livre
GROUP BY e.id_abonne