// Déclaration de deux variables.
var jourDimanche;
var monTableau;


// Affectation d'un tableau vide à une variable.
monTableau = new Array();   // syntaxe longue

// La syntaxe raccourcie est : monTableau = [];


// Affectation de valeurs au tableau.
monTableau[0] = 'Lundi';
monTableau[1] = 'Mardi';
monTableau[2] = 'Mercredi';
monTableau[3] = 'Jeudi';
monTableau[4] = 'Vendredi';
monTableau[5] = 'Samedi';
monTableau[6] = 'Dimanche';

// Affectation d'une valeur à la variable.
jourDimanche = 6;


/*
 * Affichage du contenu d'une partie du tableau directement dans la page HTML.
 *
 * La variable jourDimanche est utilisée comme un indice dans le tableau monTableau.
 */
document.write('Le premier jour de la semaine est le ' + monTableau[0] + ' ');
document.write('et le dernier jour de la semaine est le ' + monTableau[jourDimanche] + '.');