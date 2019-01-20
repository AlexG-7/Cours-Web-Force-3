# 3.1 Requêtes imbriquées

<br>
>Une **requête imbriquée** *(ou "sous-requête")* est une requête à l'intérieur d'une autre. Elle permet d'aller chercher des informations dans une table différente de celle de la requête initiale.
**Note:** Une requête imbriquée doit être contenue entre des parenthèses.

<br>
Titre des livres actuellement empruntés:

    SELECT titre FROM livre WHERE id_livre IN
        (SELECT id_livre FROM emprunt WHERE date_rendu IS NULL);

> le type `NULL` se teste avec `IS NULL` & `IS NOT NULL`

<br>
Nom des abonnés qui ont actuellement emprunté des livres:

    SELECT prenom FROM abonne WHERE id_abonne IN 	
        (SELECT id_abonne FROM emprunt WHERE date_rendu IS NULL);

> Pour réaliser une requête imbriquée, il faut obligatoirement un champ commun entre les 2 tables.

<br>
*ID* des livres que Chloé a emprunté:

    SELECT id_livre FROM emprunt WHERE id_abonne =
        (SELECT id_abonne FROM abonne WHERE prenom='chloe');

<br>
Liste des abonnés qui ont déjà emprunté un livre d'Alphonse DAUDET:

    SELECT prenom FROM abonne WHERE id_abonne IN
        (SELECT id_abonne FROM emprunt WHERE id_livre IN
            (SELECT id_livre FROM livre WHERE auteur='ALPHONSE DAUDET') );

> On peut imbriquer plusieurs requêtes

<br>
><i class="far fa-question-circle"></i> Affichez les prénoms des abonnés qui ont emprunté un livre le 19/12/2014.
><i class="far fa-question-circle"></i> Combien de livres Guillaume a t-il emprunté ?
><i class="far fa-question-circle"></i> Affichez le titre des livres empruntés par Chloé.
><i class="far fa-question-circle"></i> A l'inverse, affichez le titre des livres que Chloé n'a pas encore emprunté.
><i class="far fa-question-circle"></i> Aussi, affichez le titre des livres que Chloé n'a pas encore rendu.
><i class="far fa-question-circle"></i> Qui a emprunté le plus de livres ?

<br><br>
-----
**Précédent:** [3 Requêtes sur plusieurs tables](?file=10_requetes_sur_plusieurs_tables.md)
**Suivant:** [3.2 Jointure](?file=12_jointure.md)