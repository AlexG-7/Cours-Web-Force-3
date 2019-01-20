# 3.2 Jointure

<br>
>Une **jointure** a la même utilité qu'une requête imbriquée (récupérer des informations d'une autre table), mais se fait dans une seule requête.

<br>
Dates de sortie/rendu de Guillaume:

    SELECT a.prenom, e.date_sortie, e.date_rendu    -- noms de colonne préfixés
    FROM abonne a, emprunt e                        -- tables suivies de leur préfixe
    WHERE a.id_abonne = e.id_abonne                 -- le champ en commun
        AND a.prenom = 'guillaume';                 -- la condition

Equivalent avec une requête imbriquée:

    SELECT date_sortie, date_rendu FROM emprunt WHERE id_abonne = (SELECT id_abonne FROM abonne WHERE prenom = 'guillaume');

>**Note:** Avec la requête imbriquée, on ne peut pas afficher le prénom de l'abonné. La requête imbriquée est limitée à l'affichage des colonnes d'une seule et même table.

<br><br>

><i class="far fa-question-circle"></i> Affichez les dates de sortie/rendu des livres écrits par Alphonse DAUDET.
>
| date_sortie | date_rendu |
|-------------|------------|
| 2011-12-19  | 2011-12-22 |

><i class="far fa-question-circle"></i> Qui a emprunté le livre *"Une vie"* en 2014 ?
>
| prenom    |
|-----------|
| guillaume |
| chloe     |

><i class="far fa-question-circle"></i> Affichez le nombre de livre(s) emprunté(s) par abonné.
>
| prenom    | nb de livre emprunte |
|-----------|----------------------|
| guillaume |                    2 |
| benoit    |                    3 |
| chloe     |                    2 |
| laura     |                    1 |

<br><br>
-----
**Précédent:** [3.1 Requêtes imbriquées](?file=11_requetes_imbriquees.md)
**Suivant:** [3.3 Jointure externe](?file=13_jointure_externe.md)