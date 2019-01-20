# 1.2 Préparation

<!-- >| Opération | SQL|
|---|---|
| **C**reate | <code class="prettyprint">INSERT</code> |
| **R**ead | <code class="prettyprint">SELECT</code> |
| **U**pdate | <code class="prettyprint">UPDATE</code> |
| **D**elete | <code class="prettyprint">DELETE</code> | -->

<br>
<br>
## Des outils pour démarrer

A télécharger et installer:
 - [**XAMPP**: serveur web](https://www.apachefriends.org/download.html)
 - [**MySQL Workbench**: Interface graphique intégrant divers outils pour MySQL](https://dev.mysql.com/downloads/workbench/)
>**ZIP complet:** [xampp_7_2_9_win32__mysql_workbench_8_0_12_win64.rar](files/xampp_7_2_9_win32__mysql_workbench_8_0_12_win64.rar)

Après installation, démarrer **MySQL** via le ***XAMPP Control Panel***.

-----
<br>
<br>
## Pour éxécuter une requête SQL

<br>
### Avec ***MySQL Workbench***

Ouvrir **MySQL Workbench** et ajouter la connexion au serveur local.
Exécuter ses requêtes dans l'onglet `Query 1`.

<br>
### Avec l'***invite de commandes***

Ouvrir l'**invite de commandes** (`cmd.exe`) puis se situer dans le répertoire `\bin`:

    cd C:\xampp\mysql\bin

Se connecter à **MySQL**:

    C:\xampp\mysql\bin> mysql.exe -u root --password
    Enter password:

Executer ses requêtes directement, sans oublier le `;` à la fin:

    MariaDB [ma_base_de_donnees]> SELECT * FROM ma_table;

<br>
### Avec ***PHPMyAdmin***

Démarrer **Apache** via le ***XAMPP Control Panel***.
Sur son navigateur, accéder à [`http://localhost/phpmyadmin`](http://localhost/phpmyadmin).

 - **Utilisateur:** <code class="prettyprint">root</code>
 - **Mot de passe:** <code class="prettyprint"></code>

Exécuter ses requêtes dans l'onglet `SQL`.

Problèmes courants:
 - [Login without a password is forbidden by configuration (see AllowNoPassword)](https://stackoverflow.com/questions/5908752/can-anyone-confirm-that-phpmyadmin-allownopassword-works-with-mysql-databases)
 - [Connexion impossible, sans message d'erreur](https://stackoverflow.com/questions/21903764/phpmyadmin-wont-let-me-login-no-error-shown)
 - [Erreur avec **alias** sur une déclaration <code class="prettyprint">CASE</code>](https://stackoverflow.com/questions/40389894/mysql-unrecognized-keyword-near-case)

-----
<br>
<br>
## Création de la base de données <code class="prettyprint">entreprise</code>

Création de la base:

    CREATE DATABASE entreprise;

<br>
Création de la **table** `employes`:

    CREATE TABLE employes (
        id_employes INT(3) NOT NULL AUTO_INCREMENT,
        prenom VARCHAR(20) NOT NULL,
        nom VARCHAR(20) NOT NULL,
        sexe ENUM('m','f') NOT NULL,
        service VARCHAR(30) NOT NULL,
        date_embauche DATE NOT NULL,
        salaire INT(3) NOT NULL,
        PRIMARY KEY (id_employes)
    ) ENGINE=InnoDB ;

**Exemples de type de données:**

| Nom                                       | Valeur                            | Exemple                                       |
|---|---|---|
| <code class="prettyprint">INT</code>      | Nombre entier                     | <code class="prettyprint">483</code>          |
| <code class="prettyprint">DECIMAL</code>  | Nombre à virgule                  | <code class="prettyprint">57.28</code>        |
| <code class="prettyprint">VARCHAR</code>  | Chaîne (jusqu'à 256 caractères)   | <code class="prettyprint">jules</code>        |
| <code class="prettyprint">TEXT</code>     | Chaîne de caractères (très long)  | *un article de blog*                          |
| <code class="prettyprint">DATE</code>     | Date                              | <code class="prettyprint">2018-09-02</code>   |

<br>
**Identifiant (Clé Primaire - *"PK (Primary Key)"*)**

L'identifiant est une colonne dont la valeur est unique (elle est différente d'une ligne à l'autre).
Ce champ consiste en général en un nombre entier.
>*"Identifiant"* abrégé `id`

L'option `AUTO_INCREMENT` permet à la **clé primaire** d'être générée automatiquement.

<br>
**Autorisation des valeurs nulles**

On peut décider d'accepter ou de refuser la valeur `NULL` sur une colonne avec `NULL` ou `NOT NULL`.
`NULL` est un type de valeur désignant l'absence d'information.
>**Attention:**
`NULL` =/= `0`
`NULL` =/= `""`

<br>
Enregistrement d'employés dans la table:

    INSERT INTO employes (id_employes, prenom, nom, sexe, service, date_embauche, salaire) VALUES
    (350, 'Jean-pierre', 'Laborde', 'm', 'direction', '1999-12-09', 5000),
    (388, 'Clement', 'Gallet', 'm', 'commercial', '2000-01-15', 2300),
    (415, 'Thomas', 'Winter', 'm', 'commercial', '2000-05-03', 3550),
    (417, 'Chloe', 'Dubar', 'f', 'production', '2001-09-05', 1900),
    (491, 'Elodie', 'Fellier', 'f', 'secretariat', '2002-02-22', 1600),
    (509, 'Fabrice', 'Grand', 'm', 'comptabilite', '2003-02-20', 1900),
    (547, 'Melanie', 'Collier', 'f', 'commercial', '2004-09-08', 3100),
    (592, 'Laura', 'Blanchet', 'f', 'direction', '2005-06-09', 4500),
    (627, 'Guillaume', 'Miller', 'm', 'commercial', '2006-07-02', 1900),
    (655, 'Celine', 'Perrin', 'f', 'commercial', '2006-09-10', 2700),
    (699, 'Julien', 'Cottet', 'm', 'secretariat', '2007-01-18', 1390),
    (701, 'Mathieu', 'Vignal', 'm', 'informatique', '2008-12-03', 2000),
    (739, 'Thierry', 'Desprez', 'm', 'secretariat', '2009-11-17', 1500),
    (780, 'Amandine', 'Thoyer', 'f', 'communication', '2010-01-23', 1500),
    (802, 'Damien', 'Durand', 'm', 'informatique', '2010-07-05', 2250),
    (854, 'Daniel', 'Chevel', 'm', 'informatique', '2011-09-28', 1700),
    (876, 'Nathalie', 'Martin', 'f', 'juridique', '2012-01-12', 3200),
    (900, 'Benoit', 'Lagarde', 'm', 'production', '2013-01-03', 2550),
    (933, 'Emilie', 'Sennard', 'f', 'commercial', '2014-09-11', 1800),
    (990, 'Stephanie', 'Lafaye', 'f', 'assistant', '2015-06-02', 1775);

<br>
<br>

-----
**Précédent:** [1.1 Intro](?file=1_introduction.md)
**Suivant:** [1.3 Requêtes sur base & table](?file=3_requetes_sur_base.md)