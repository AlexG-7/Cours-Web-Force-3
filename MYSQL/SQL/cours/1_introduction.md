# 1.1 Introduction au SQL

<br>
<br>
## Pourquoi utiliser le **SQL** ?

>**SQL:** *Structured Query Language*

Interroger une ***base de données*** avec des ***requêtes***.

-----
<br>
<br>
## Termes à retenir

>**MCD:** *Modèle Conceptuel de Données*
**SGBD:** *Système de Gestion de Base de Données* (EN: *DBMS*)
**BDD:** *Base De Données* (EN: *DB*)

Liste de **SGBD**:
  - *PostGreSQL*
  - *Oracle*
  - *SQL Server*
  - *MySQL* (/ *MariaDB*)

-----
<br>
<br>
## Structure d'une BDD

Principe de **lignes** & **colonnes** -> **tableau** = `TABLE`
1 `BDD` = plusieurs `TABLE`s

> **Base de données:** `mon_forum`<br>
**Table:** `sujet`
>
>| titre       | description | cree_par | date_creation |
|-------------|-------------|----------|---------------|
| bienvenue ! | bonjour ... | admin    | 2018-09-01    |
| RDV demain  | rejoigne... | jules    | 2018-09-02    |
>
><br>
**Table:** `utilisateur`
>
>| pseudo | email          | mot_de_passe | type   |
|---------|----------------|--------------|--------|
| admin   | admin@site.fr  | 65h1-e(v468  | admin  |
| jules   | jules@mail.com | azerty123    | membre |

-----
<br>
<br>
## Exemples d'utilisation dans le web

<br>
### Espace de connexion
![Formulaires inscription/connexion](img/sql_1.png)
>Formulaires ***HTML/CSS***
Récupération des données en ***PHP***
Requêtes ***SQL***

<br>
### Catalogue dynamique
![Requete à resultat(s) multiples/unique](img/sql_2.png)
>| <code class="prettyprint">catalogue.php</code><br>Requête SQL à résultats multiples | <code class="prettyprint">produit.php</code><br>Requête SQL à résultat unique |
|---|---|
Contenu ***dynamique*** (provenant d'une *base de données*)

<br>
### Front-Office & Back-Office
![FO - DB - BO](img/sql_3.png)
>| Front-Office (partie publique) | Base de Données | Back-Office (espace d'administration) |
|---|---|---|

-----
<br>
<br>
## Elaborer une requête

Savoir exprimer précisément ce que l'on veut pour écrire la requête SQL correspondante.
Les 4 requêtes possibles:
 - **C** requête d'insertion
 - **R** requête de sélection
 - **U** requête de modification
 - **D** requête de suppression

>1 requête = 1 action

Il existe des alternatives au SQL, les bases de données **NoSQL**:
 - bases **clef/valeur** (ex: ***Redis***)
 - bases **orientées colonnes** (ex: ***HBase, Cassandra***)
 - bases **orientées document** (ex: ***MongoDB***)
 - bases **orientées graphe** (ex: ***Neo4J***)

<br>
<br>

-----
**Précédent:** [Plan](?)
**Suivant:** [1.2 Préparation](?file=2_preparation.md)