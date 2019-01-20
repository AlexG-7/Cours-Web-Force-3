## Base <code class="prettyprint">bibliotheque</code>

**Création et sélection:**

    CREATE DATABASE bibliotheque;
    USE bibliotheque;

<br>
## Table <code class="prettyprint">abonne</code>

**Structure:**

    CREATE TABLE abonne (
      id_abonne INT(3) NOT NULL AUTO_INCREMENT,
      prenom VARCHAR(15) NOT NULL,
      PRIMARY KEY (id_abonne)
    ) ENGINE=InnoDB ;

**Données:**

    INSERT INTO abonne (id_abonne, prenom) VALUES
    (1, 'Guillaume'),
    (2, 'Benoit'),
    (3, 'Chloe'),
    (4, 'Laura');

<br>
## Table <code class="prettyprint">livre</code>

**Structure:**

    CREATE TABLE livre (
      id_livre INT(3) NOT NULL AUTO_INCREMENT,
      auteur VARCHAR(25) NOT NULL,
      titre VARCHAR(30) NOT NULL,
      PRIMARY KEY (id_livre)
    ) ENGINE=InnoDB ;

**Données:**

    INSERT INTO livre (id_livre, auteur, titre) VALUES
    (100, 'GUY DE MAUPASSANT', 'Une vie'),
    (101, 'GUY DE MAUPASSANT', 'Bel-Ami '),
    (102, 'HONORE DE BALZAC', 'Le père Goriot'),
    (103, 'ALPHONSE DAUDET', 'Le Petit chose'),
    (104, 'ALEXANDRE DUMAS', 'La Reine Margot'),
    (105, 'ALEXANDRE DUMAS', 'Les Trois Mousquetaires');

<br>
## Table <code class="prettyprint">emprunt</code>

**Structure:**

    CREATE TABLE emprunt (
      id_emprunt INT(3) NOT NULL AUTO_INCREMENT,
      id_livre INT(3) DEFAULT NULL,
      id_abonne INT(3) DEFAULT NULL,
      date_sortie DATE NOT NULL,
      date_rendu DATE DEFAULT NULL,
      PRIMARY KEY  (id_emprunt)
    ) ENGINE=InnoDB ;

**Données:**

    INSERT INTO emprunt (id_emprunt, id_livre, id_abonne, date_sortie, date_rendu) VALUES
    (1, 100, 1, '2014-12-17', '2014-12-18'),
    (2, 101, 2, '2014-12-18', '2014-12-20'),
    (3, 100, 3, '2014-12-19', '2014-12-22'),
    (4, 103, 4, '2014-12-19', '2014-12-22'),
    (5, 104, 1, '2014-12-19', '2014-12-28'),
    (6, 105, 2, '2015-03-20', '2015-03-26'),
    (7, 105, 3, '2015-06-13', NULL),
    (8, 100, 2, '2015-06-15', NULL);