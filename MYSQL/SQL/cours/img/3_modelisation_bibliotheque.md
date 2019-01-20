## Table <code class="prettyprint">abonne</code>

| nom colonne | type données | extra |
|---|---|---|
| id_abonne | <code class="prettyprint">INT(3)</code> | <code class="prettyprint">PK AI</code> |
| prenom | <code class="prettyprint">VARCHAR(30)</code> | |

<br>
## Table <code class="prettyprint">livre</code>

| nom colonne | type données | extra |
|---|---|---|
| id_livre | <code class="prettyprint">INT(3)</code> | <code class="prettyprint">PK AI</code> |
| auteur | <code class="prettyprint">VARCHAR(25)</code> | |
| titre | <code class="prettyprint">VARCHAR(30)</code> | |

<br>
## Table <code class="prettyprint">emprunt</code>

| nom colonne | type données | valeur par défaut | extra |
|---|---|---|---|
| id_emprunt | <code class="prettyprint">INT(3)</code> | | <code class="prettyprint">PK AI</code> |
| id_livre | <code class="prettyprint">INT(3)</code> | | |
| id_abonne | <code class="prettyprint">INT(3)</code> | | |
| date_sortie | <code class="prettyprint">DATE</code> | | |
| date_rendu | <code class="prettyprint">DATE</code> | <code class="prettyprint">NULL</code> | |