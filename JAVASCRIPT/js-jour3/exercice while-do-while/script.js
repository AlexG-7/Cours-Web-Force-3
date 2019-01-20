// ## Enoncé

// Demander à l'utilisateur de saisir obligatoirement un nombre quoiqu'il arrive, afficher ce nombre ensuite en HTML.

// ## Remarques

// * On peut saisir un nombre entier comme un nombre à virgule.

var nombre;

do {
  nombre = window.prompt("Saisir obligatoirement un nombre svp :");
} while (isNaN(parseFloat(nombre)));

document.write("<p>Vous avez saisi le chiffre " + nombre + "</p>");
