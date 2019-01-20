# 2.4 Requête <code class="prettyprint">DELETE</code>

<br>
>La requête `DELETE` supprime un (ou plusieurs) *enregistrement(s)* dans une **table**.

<br><br>

    DELETE FROM employes WHERE id_employes = 739;

<br>
Il est important de cibler l'**ID** (la clé primaire ***unique***) afin d'éviter la suppression d'une autre entrée ou de plusieurs ligne (excepté lorsque cela est intentionnel).
> **Attention:** ommettre la clause `WHERE` reviendra à éxécuter une requête `TRUNCATE`, c'est-à-dire vider la table de son contenu.

<br><br>
-----
**Précédent:** [2.3 Requête <code class="prettyprint">UPDATE</code>](?file=6_update.md)
**Suivant:** [2.5 Fonctions d'agrégation](?file=8_fonctions_d_agregation.md)