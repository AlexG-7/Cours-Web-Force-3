'use strict';   // Mode strict du JavaScript

// Déclaration d'une variable.
var nombre;


/*
 * La boucle doit au moins s'exécuter une fois pour que la comparaison
 * puisse s'effectuer, il faut donc utiliser un DO ... WHILE.
 */
do
{
    nombre = parseFloat(window.prompt('Veuillez saisir un nombre :'));
}
while(isNaN(nombre) == true);

document.write('<p>Merci, vous avez saisi <strong>' + nombre + '</strong>.</p>');