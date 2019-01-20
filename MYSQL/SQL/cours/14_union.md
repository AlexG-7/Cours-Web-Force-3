# 3.4 Union

<br>
>Une **union** mettra bout-à-bout les résultats de 2 requêtes `SELECT`.
Pour se faire, les 2 requêtes doivent retourner le même nombre de colonnes.

<br><br>
## 3.4.1 <code class="prettyprint">UNION</code>

<br>Liste de noms (prénoms des abonnés suivis des noms des auteurs)

    SELECT prenom FROM abonne
    UNION
    SELECT auteur FROM livre;

<br>Les noms de colonnes du résultat seront ceux indiqués dans la 1e requête.<br>

<br><br>
## 3.4.2 <code class="prettyprint">UNION ALL</code>

<br>Par défaut, `UNION` est un `UNION DISTINCT` (élimine les doublons). Si vous souhaitez conserver les doublons il faudra alors utiliser `UNION ALL`.

**Résultat:** `16`

    SELECT COUNT(*)
    FROM (
        SELECT SUBSTR(prenom, 1, 1) FROM employes
        UNION
        SELECT SUBSTR(nom, 1, 1) FROM employes
    ) initiales

**Résultat:** `40`

    SELECT COUNT(*)
    FROM (
        SELECT SUBSTR(prenom, 1, 1) FROM employes
        UNION ALL
        SELECT SUBSTR(nom, 1, 1) FROM employes
    ) initiales

<br><br>
-----
**Précédent:** [3.3 Jointure externe](?file=13_jointure_externe.md)
**Suivant:** [4.1 Fonctions prédéfinies](?file=15_fonctions_predefinies.md)