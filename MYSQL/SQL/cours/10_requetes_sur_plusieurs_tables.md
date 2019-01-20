# 3 Requêtes sur plusieurs tables

<br>
>`1` BDD = `n` tables

<br><br>
## Les relations

>1 utilisateur passe une commande

<br>
**Table `utilisateur`:**

| id_utilisateur | pseudo | ... |
|---|---|---|
| <code class="prettyprint">INT(4) PK AI</code> | <code class="prettyprint">VARCHAR(50)</code> | ... |

<br>
**Table `commande`:**

| id_commande | id_utilisateur | ... |
|---|---|---|
| <code class="prettyprint">INT(4) PK AI</code> | <code class="prettyprint">INT(4)</code> | ... |

<br><br>
## Les cardinalités
>`Cardinalités = (minimum, maximum)`
>`Relation = (minimum, maximum) ... (minimum, maximum)`
**Valeurs:**
 - <code class="prettyprint">0</code>
 - <code class="prettyprint">1</code>
 - <code class="prettyprint">n</code> = plusieurs

<br>
**Exemple:** 1 utilisateur peut passer plusieurs commandes, ou aucune.
**Cardinalités:** `(0, n)`

<br>
**Exemple:** 1 livre ne peut avoir qu'un auteur.
**Cardinalités:** `(1, 1)`

<br>
**Exemple:** 1 livre peut avoir plusieurs catégories.
**Cardinalités:** `(1, n)`

<br><br>
## Table de jointure
>**Contexte:** un blog
**Tables:** `utilisateur`, `article_blog`
**Fonctionnalité:** *"Liker"* les articles.

1 utilisateur `(U)` peut liker plusieurs articles `(0, n)`.
1 article `(A)` peut avoir plusieurs likes `(0, n)`.
**Relation:** `U(0, n) ... A(0, n)`
Comment enregistrer les *"like"* ?

<br>
**Table de jointure `like`:**

| id_like <code class="prettyprint">INT(4) PK AI</code> | id_utilisateur <code class="prettyprint">INT(4)</code> | id_article_blog <code class="prettyprint">INT(4)</code> |
|---|---|---|
| 1 | 5 | 7 |
| 2 | 9 | 2 |
| 3 | 8 | 1 |

<br><br>

><i class="far fa-question-circle"></i> Quelles sont les cardinalités de la relation suivante ?
><i class="far fa-question-circle"></i> Comment enregistriez-vous cette relation dans une base de données ?
><br>
>**entité:** une personne (P)
**propriété:** mère
**Cardinalités:** `(?, ?)`
><br>
**entité:** une femme (F)
**propriété:** enfant
**Cardinalités:** `(?, ?)`
><br>
**Relation:** `P(?, ?) ... F(?, ?)`

<br><br>
## Création d'une base de données pour une bibliothèque
<br>
Une bibliothèque vous demande une base de données afin d'informatiser ses services.
Elle permet à ses abonnés d'emprunter des livres.
**Quelles seraient les tables de cette base ?**


[Modélisation prévue](?file=img/3_modelisation_bibliotheque.md)
[Requêtes de création/insertion](?file=img/3_population_bibliotheque.md)

<br><br>
-----
**Précédent:** [2.6 Exercices](?file=9_exercices.md)
**Suivant:** [3.1 Requêtes imbriquées](?file=11_requetes_imbriquees.md)