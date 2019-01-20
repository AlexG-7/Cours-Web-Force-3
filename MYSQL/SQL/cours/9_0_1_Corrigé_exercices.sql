1)
SELECT service, id_employes
FROM employes
WHERE id_employes=547

2)
SELECT prenom,date_embauche
FROM employes
WHERE prenom="amandine"

3)
SELECT nom,prenom
FROM employes
WHERE prenom="guillaume"

4)
SELECT COUNT(id_employes) AS nombre_personnes_avec_id_5
FROM employes
WHERE id_employes LIKE "5%"

5)
SELECT service, COUNT(service) AS nombre_commercial
FROM employes
WHERE service="commercial"

6)
SELECT
    service,
    ROUND(AVG(salaire)) AS salaire_moyen
FROM
    employes
WHERE
    service = "informatique"

7)
SELECT nom,prenom
FROM employes
ORDER BY nom ASC
LIMIT 0,5

8)
SELECT service, SUM(salaire*12)
FROM employes
WHERE service="commercial"

9)
SELECT service, ROUND(AVG(salaire)) AS salaire_moyen
FROM employes
GROUP BY service

10)
SELECT COUNT(date_embauche)
FROM employes
WHERE date_embauche LIKE "2010-%"

11)
SELECT ROUND(AVG(salaire)) AS salaire_moyen
FROM employes
WHERE date_embauche BETWEEN "2005-01-01" AND "2007-12-31"

12)
SELECT COUNT(DISTINCT service)
FROM employes

13)
SELECT *
FROM employes
WHERE service NOT IN("production","secrétariat")

14)
SELECT COUNT(*),sexe
FROM employes
GROUP BY sexe

15)
SELECT
    *
FROM
    employes
WHERE
    service = "commercial" AND sexe = "m" AND salaire > 2500 AND date_embauche < "2005-01-01"

16)
SELECT *
FROM employes
ORDER BY date_embauche DESC
LIMIT 0,1

17)
SELECT *
FROM employes
WHERE service="commercial"
ORDER BY salaire DESC
LIMIT 0,1

18)
SELECT *
FROM employes
WHERE service="comptabilite"
ORDER BY salaire DESC
LIMIT 0,1

19)
SELECT prenom
FROM employes
WHERE service="informatique"
ORDER BY date_embauche ASC
LIMIT 0,1

20)
UPDATE employes SET
salaire = salaire+100

21)
DELETE FROM employes
WHERE service="secretariat"
