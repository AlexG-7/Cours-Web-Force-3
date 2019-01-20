# 2.3 Requête <code class="prettyprint">UPDATE</code>

<br>
>La requête `UPDATE` sert à modifier un (ou plusieurs) *enregistrement(s)* dans une **table**.

<br><br>

    UPDATE employes SET
        salaire = 2500,
        service = 'direction'
    WHERE id_employes = 699;

<br>
Il est important de cibler l'**ID** (la clé primaire ***unique***) afin d'éviter la modification d'une autre entrée ou de plusieurs ligne (excepté lorsque cela est intentionnel).
> **Attention:** ommettre la clause `WHERE` mettra à jour toute la **table**.

<br><br>
-----
**Précédent:** [2.2 Requête <code class="prettyprint">INSERT</code>](?file=5_insert.md)
**Suivant:** [2.4 Requête <code class="prettyprint">DELETE</code>](?file=7_delete.md)