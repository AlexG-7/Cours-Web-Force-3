## Enoncé

Générer dynamiquement un menu accordéon depuis une données tableau,
puis ajouter l'interaction classique d'un menu accordéon : au clique sur un élément du menu, un panneau déroulant apparâit

## Consignes

### HTML

Dans l'en-tête de  la page :

- Ajouter un titre au programme : "Menu Dropdown".

Dans la partie principale de la page, reprenons la structure HTML d'un dropdown Bootstrap:

<div class="dropdown-group">
  <button id='dropdown-btn' class="btn">
    Click Me Please !
  </button>
  <ul id="dropdown-list">
    <li><a href="#">Item1</a></li>
    <li><a href="#">Item2</a></li>
    <li><a href="#">Item3</a></li>
  </ul>
</div>

### CSS

- la liste ul#dropdown-list doit être cachée au chargement de la page

### Interactions
Le comportement classique d'un menu dropdown comporte 2 interactions
- Lorsque l'utilisateur clique sur le bouton le menu s'affiche en 700ms, et se masque en 200ms, alternativement
- SI le menu est affiché : si l'utilisateur clique en dehors du bouton, alors le menu se masque brutalement
--> Attention : Les apparitions/disparitions doivent se faire progressivement

## Remarques

- Utiliser les fonctions de sélections jQuery
- Utiliser les méthodes d'apparition/disparition appropriées (.show(), .hide(), ou .fadeIn(), .fadeOut())
- Utiliser la méthode is() de jQuery (http://api.jquery.com/is/)