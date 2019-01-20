// Déclaration de trois variables.
var nombre1;
var nombre2;
var somme;


/*
 * Affectation de la saisie de l'utilisateur aux variables.
 *
 * Les deux variables sont donc de type String.
 */
nombre1 = window.prompt('Veuillez saisir un premier nombre :');
nombre2 = window.prompt('Veuillez saisir un deuxième nombre :');

/*
 * window.prompt() a renvoyé une chaîne de caractère même si on a saisi un nombre.
 * On doit donc convertir nos variables en nombres avant de pouvoir les additionner.
 *
 * La fonction parseInt() ou parseFloat() convertit une variable de type String
 * en une variable de type Number.
 */
nombre1 = parseInt(nombre1);
nombre2 = parseInt(nombre2);


/*
 * Addition des deux variables.
 *
 * Ce n'est PAS une concaténation car les deux variables sont de type Number.
 */
somme = nombre1 + nombre2;


// Affichage du résultat directement dans la page HTML.
document.write(somme);