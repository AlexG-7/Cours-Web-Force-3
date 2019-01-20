## Enoncé

Afficher une liste de photos sélectionnable d'un clic de souris, avec un message indiquant le nombre de photos sélectionnées à chaque instant.

## Consignes

### HTML

Dans l'en-tête de la page :

- Ajouter un titre au programme : "Sélecteur de Photos".

Dans la partie principale de la page :

- Créer une liste (_id : photo-list_) affichant toutes les photos du dossiers _images_.
- Ajouter un paragraphe (_id : total_) avec le message "Vous avez sélectionné 0 photo(s)", le chiffre 0 devant s'afficher en italique.

### CSS

- Le nombre de photos sélectionnées doit s'afficher en rouge et en gras.
- Les photos doivent s'afficher les unes à côté des autres sur une largeur de 800 pixels, sans les puces, avec une marge de _1em_ et un padding de _0.5em_.
- Au survol d'un élément de la liste _photo-list_, la couleur de fond devient grise (_silver_).
- Quand un élément de la liste _photo-list_ à la classe _selected_, la couleur de fond devient verte (_forestgreeen_).
- Le changement de couleur de fond d'un élément de la liste _photo-list_ doit s'animer.

### Interactions

- Quand on clique sur un élément de la liste _photo-list_, l'élément en question se voit affecter la class _selected_ et le message avec le nombre de photos sélectionnées se met à jour. Un deuxième clic inverse l'opération.

## Remarques

- Comme pour l'exercice Dragon Slayer, organiser le code en trois parties : les variables, les fonctions et enfin le code principal.
- Nommer correctement le gestionnaire d'évènements pour qu'il ait un sens.
