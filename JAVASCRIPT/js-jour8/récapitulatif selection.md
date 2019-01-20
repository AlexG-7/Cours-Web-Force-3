SELECTION

JS
.getElementById() // renvoi le 1er Elt avec l'id spécifié en param
.getElementsByTagName() // renvoi une collection d'Elts
.getElementsByClassName() // renvoi une collection d'Elts
.querySelector() // renvoi le 1er selectionné
.querySelectorAll() // renvoi une collection d'Elts

jQUERY
$(selectionCSS) // Renvoi un Elt jQuery

---------------------------------------


MODIFICATION DU DOM

JS
.textContent = '' // Remplacer du texte à l'intérieur d'un Elt selectionné
.innerHTML = '' // Remplacer du HTML à l'intérieur d'un Elt selectionné

.classList.add() // Ajouter une class
          .remove() // retirer une class
          .toggle() // Ajouter  et retirer alternativement une class
          .contains() // renvoie TRUE ou FALSE selon la class spécifiée en paramètre
          
.style.color = "#ff0000" // modiifer le style inline d'un Elt HTML

.src = "" // modifie la valeur de l'attribut src d'un Elm 

.id = "" // Modifie la valeur de l'attribut id d'un Elmt

.setAttribute('src', 'images/1.jpg') // modifier n'importe quel attribut d'un Elmt
.getAttribute('id') // Lit n'importe quel attribut d'un Elmt

.value = "" // perme de lire ou de modifier un Elm de type formulaire (input, textarea, select, ...)


JQUERY
.text() // Remplacer du texte à l'intérieur d'un Elt selectionné en jQuery
.html() // Remplacer du HTML à l'intérieur d'un Elt selectionné en jQuery

.addClass()
.removeClass()
.toggleClass()
.contains()

.css('background') // Lire la valeur de la propriété background d'un Elt
.css('background', '#ff0000') // Modifier la valeur de la propriété background d'un Elt

.attr('id') // Lire la valeur de l'attribut id d'un Elt sélectionné en jQuery
.attr('id', 'logo') // modifier la valeur de l'attribut id d'un Elt sélectionné en jQuery


.val() permet de lire ou modifier une balise de formulaire (input, texteara, select, ...)



EVENEMENTS

JS 
.addEventListener('click', laFonctionAExecuter)
// Poser un écouteur d'évènement qui execute une fonction qu'il faut déclarer

jQUERY
.on('keyup', laFonctionAExecuter)

----------------------------------------------------------------------------------
----------------------------------------------------------------------------------
----------------------------------------------------------------------------------
----------------------------------------------------------------------------------
----------------------------------------------------------------------------------
----------------------------------------------------------------------------------
----------------------------------------------------------------------------------
*Les méthodes utilisées dans ces 3 exercices* :

$() // sélectionner un elt ou une collection d'elt
.next() // selection avancée-sélectionner l'elt frère suivant
.not() // selection avancée-sélectionner le/les elt(s) qui ne sont pas

.on() // poser un écouteur d'evt

*la modifications du DOM*
.text() // Lire ou modifier du texte

.html() // Lire ou modifier du HTML

.addClass(), .removeClass(), .toggleClass(), .hasClass() // manipuler les class

.css() // lire ou modifier du css inline sur une balise html

.attr() // lire ou modifier n'importe quel attribut d'une balise html

*La variable $(this)*
$(this) // à l'intérieur d'une fonction exécutée par un évènement: représente l'elt qui sur lequel un évènement a été déclenché

*Les méthodes d'apparition/disparition*
.show(), .hide(), .fadeIn(), .fadeOut(), .slideDown(), .slideUp(), .fadeToggle, .slideToggle()

*La méthode is()*
.is() // Renvoie TRUE ou FALSE selon la sélection css passée en paramètre

Bonne relecture du code au calme :visage_légèrement_souriant:

Pour rappel nous utilisons aussi :
*L'objet event*
event.preventDefault() // permet de couper l'exécution d'un lien ou d'une soumission de formulaire

event.keyCode // permet de récupérer le keyCode d'une touche

*la liste des évènements* : click, dblclick, mouseover, mouseout keyup, keydown, submit, scroll, ... (modifié)