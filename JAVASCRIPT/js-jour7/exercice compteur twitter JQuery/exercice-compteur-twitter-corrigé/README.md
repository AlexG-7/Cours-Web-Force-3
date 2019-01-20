## Enoncé

Comme sur Twitter, proposer un champs de saisie de texte 
et un compteur qui affiche le nombre de caractères restants à l'utlisateur

## Consignes

### HTML

Dans l'en-tête de  la page :

- Ajouter un titre au programme : "Compteur Twitter".

Dans la partie principale de la page :

- Créer une balise textarea (*id: tweetContent, *placeholder: votre tweet ici)
- Ajouter un paragraphe (*id : counterBlock*) avec le message "140"

### CSS

- Le textarea et le paragraphe doivent être centré et contenus dans une balise de 700px
- Ajouter une class CSS .important qui a une couleur rouge

### Interactions

- Lorsque l'utlisateur saisit du texte dans le champ de saisi, le nombre de caractère restants s'affichent
- Lorsque le nombre de caractères restants est inférieur à 0, alors on ajoute la class important, sinon on la retire

## Remarques

Organiser le code en trois parties : les variables, les fonctions et enfin le code principal.
- Nommer correctement le gestionnaire d'évènements pour qu'il ait un sens.