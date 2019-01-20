-- Prénoms des abonnés qui ont emprunté un livre le 19/12/2014
SELECT prenom
FROM abonne
WHERE id_abonne IN(
	SELECT id_abonne
	FROM emprunt
	WHERE date_sortie = "2014-12-19"
	);
	
-- Nombre de livres empruntés par Guillaume
SELECT COUNT(*) AS nombre_emprunt
FROM emprunt
WHERE id_abonne = (
	SELECT id_abonne
	FROM abonne
	WHERE prenom = "Guillaume"
	);
	
-- Titre des livres empruntés par Chloé
SELECT titre
FROM livre
WHERE id_livre IN(
	SELECT id_livre
	FROM emprunt
	WHERE id_abonne = (
		SELECT id_abonne
		FROM abonne
		WHERE prenom = "Chloe"
		)
	);

-- Titre des livres que Chloé n'a pas encore emprunté
SELECT titre
FROM livre
WHERE id_livre NOT IN(
	SELECT id_livre
	FROM emprunt
	WHERE id_abonne = (
		SELECT id_abonne
		FROM abonne
		WHERE prenom = "Chloe"
		)
	);

-- Titre des livres que Chloé n'a pas encore rendu
SELECT titre
FROM livre
WHERE id_livre IN(
	SELECT id_livre
	FROM emprunt
	WHERE
		date_rendu IS NULL
		AND id_abonne = (
			SELECT id_abonne
			FROM abonne
			WHERE prenom = "Chloe"
		)
	);
	
-- Qui a emprunté le plus de livres
SELECT prenom
FROM abonne
WHERE id_abonne = (
	SELECT id_abonne
	FROM emprunt
	GROUP BY id_abonne
	ORDER BY COUNT(*) DESC
	LIMIT 0, 1
	);