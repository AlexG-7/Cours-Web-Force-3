***

> Au fur et à mesure de la lecture du fichier **HTML** le navigateur construit dans la mémoire une structure de données représentant chaque balise **HTML**.

***

Cette structure de données, le **Document Object Model** (DOM), est en forme d'arbre, comme une pyramide :

- la racine de l'arbre, ou haut de la pyramide, est la balise *html*,
- les descendants directs (ou enfants) les balises *head* et *body*,
- et ainsi de suite.

On dit également que les balises *head* et *body* sont frères (siblings).

Le **DOM** est la structure de données centrale du navigateur et sert autant au **CSS** qu'au **JavaScript**.