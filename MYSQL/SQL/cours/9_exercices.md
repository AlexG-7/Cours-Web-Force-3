# 2.6 Exercices

<br>
>Quelques exercices reprennant les points revus précédemment.
Trouvez les requêtes qui afficheront le résultat demandé.

<br><br>
## 1) Afficher le service de l'employé n°547.
>Résultat:
>
>| id_employes | service |
|---|---|
| 547 | commercial |

<br>
## 2) Afficher la date d'embauche d'Amandine.
<!-- >Résultat:
>
>| prenom | date_embauche |
|---|---|
| Amandine | 2010-01-23 | -->

<br>
## 3) Afficher le nom de famille de Guillaume.
<!-- >Résultat:
>
>| prenom | nom |
|---|---|
| Guillaume | Miller | -->

<br>
## 4) Afficher le nombre de personne ayant un identifiant commençant par le chiffre 5.
<!-- >Résultat:
>
>| nombre |
|---|
| 3 | -->

<br>
## 5) Afficher le nombre de commerciaux.
<!-- >Résultat:
>
>| nombre |
|---|
| 6 | -->

<br>
## 6) Afficher le salaire moyen arrondi des informaticiens.
<!-- >Résultat:
>
>| moyenne |
|---|
| 1983 | -->

<br>
## 7) Afficher les 5 premiers employés après les avoir classés par nom de famille dans l'ordre alphabétique.
<!-- >Résultat:
>
>| id_employes | prenom | nom | sexe | service | date_embauche | salaire |
|---|---|---|---|---|---|---|
| 592 | Laura | Blanchet | f | direction | 2005-06-09 | 4500 |
| 854 | Daniel | Chevel | m | informatique | 2011-09-28 | 1700 |
| 547 | Melanie | Collier | f | commercial | 2004-09-08 | 3100 |
| 699 | Julien | Cottet | m | secretariat | 2007-01-18 | 1390 |
| 739 | Thierry | Desprez | m | secretariat | 2009-11-17 | 1500 | -->

<br>
## 8) Afficher le coût des commerciaux sur 1 an.
<!-- >Résultat:
>
>| cout |
|---|
| 184200 | -->

<br>
## 9) Afficher le salaire moyen (arrondi) par service.
<!-- >Résultat:
>
>| service | salaire_moyen |
|---|---|
| assistant | 1775 |
| commercial | 2558 |
| communication | 1500 |
| comptabilite | 1900 |
| direction | 4750 |
| informatique | 1983 |
| juridique | 3200 |
| production | 2225 |
| secretariat | 1497 | -->

<br>
## 10) Afficher le nombre de recrutement sur l'année 2010.
<!-- >Résultat
>
>| nombre_recrutement |
|---|
| 2 | -->

<!-- 10-1-> SELECT COUNT(*) as 'nb de recrutement' FROM employes WHERE date_embauche BETWEEN '2010-01-01' AND '2010-12-31';
10-2-> SELECT COUNT(*) as 'nb de recrutement' FROM employes WHERE date_embauche LIKE '2010%';
10-3-> SELECT COUNT(*) as 'nb de recrutement' FROM employes WHERE date_embauche >= '2010-01-01' AND date_embauche <= '2010-12-31'; -->

<br>
## 11) Afficher le salaire moyen appliqué lors des recrutements sur la période allant de 2005 a 2007.
<!-- >Résultat:
>
>| salaire_moyen |
|---|
| 2622.5 | -->

<br>
## 12) Afficher le nombre de service différent.
<!-- >Résultat:
>
>| nombre_service |
|---|
| 9 | -->

<br>
## 13) Afficher tous les employés, excepté ceux du service production et secrétariat.
<!-- >Résultat:
>
>| nom | prenom | service |
|---|---|---|
| Laborde | Jean-pierre | direction |
| Gallet | Clement | commercial |
| Winter | Thomas | commercial |
| Grand | Fabrice | comptabilite |
| Collier | Melanie | commercial |
| Blanchet | Laura | direction |
| Miller | Guillaume | commercial |
| Perrin | Celine | commercial |
| Vignal | Mathieu | informatique |
| Thoyer | Amandine | communication |
| Durand | Damien | informatique |
| Chevel | Daniel | informatique |
| Martin | Nathalie | juridique |
| Sennard | Emilie | commercial |
| Lafaye | Stephanie | assistant | -->

<br>
## 14) Afficher conjoitement le nombre d'homme et de femme dans l'entreprise.
<!-- >Résultat:
>
>| sexe | nombre |
|---|---|
| m | 11 |
| f | 9 | -->

<br>
## 15) Afficher les commerciaux ayant été recrutés avant 2005 de sexe masculin et gagnant un salaire supérieur a 2500 €
<!-- >Résultat:
>
>| nom | prenom | service | salaire |
|---|---|---|---|
| Winter | Thomas | commercial | 3550 | -->

<br>
## 16) Qui a été embauché en dernier ?
<!-- >Résultat:
>
>| id_employes | prenom | nom | sexe | service | date_embauche | salaire |
|---|---|---|---|---|---|---|
| 990 | Stephanie | Lafaye | f | assistant | 2015-06-02 | 1775 | -->

<br>
## 17) Afficher les informations sur l'employé du service commercial gagnant le salaire le plus élevé.
<!-- >Résultat:
>
>| id_employes | prenom | nom | sexe | service | date_embauche | salaire |
|---|---|---|---|---|---|---|
| 415 | Thomas | Winter | m | commercial | 2000-05-03 | 3550 | -->

<br>
## 18) Afficher le prénom du comptable gagnant le meilleur salaire.
<!-- >Résultat:
>
>| prenom |
|---|
| Fabrice | -->

<br>
## 19) Afficher le prénom de l'informaticien ayant été recruté en premier.
<!-- >Résultat:
>
>| prenom |
|---|
| Mathieu | -->

<br>
## 20) Augmenter chaque employé de 100 €

<br>
## 21) Supprimer les employés du service secrétariat

<br><br>
-----
**Précédent:** [2.5 Fonctions d'agrégation](?file=8_fonctions_d_agregation.md)
**Suivant:** [3 Requêtes sur plusieurs tables](?file=10_requetes_sur_plusieurs_tables.md)