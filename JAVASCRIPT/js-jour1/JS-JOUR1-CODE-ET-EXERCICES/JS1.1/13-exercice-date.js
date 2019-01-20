'use strict';   // Mode strict du JavaScript

// Déclaration de trois variables.
var lesJours;
var lesMois;
var maDate;


// Affectation de deux tableaux vides à deux variables.
lesJours = new Array();
lesMois  = new Array();

// Affectation de valeurs aux deux tableaux.
lesJours[0] = 'Dimanche';
lesJours[1] = 'Lundi';
lesJours[2] = 'Mardi';
lesJours[3] = 'Mercredi';
lesJours[4] = 'Jeudi';
lesJours[5] = 'Vendredi';
lesJours[6] = 'Samedi';

lesMois[0]  = 'Janvier';
lesMois[1]  = 'Février';
lesMois[2]  = 'Mars';
lesMois[3]  = 'Avril';
lesMois[4]  = 'Mai';
lesMois[5]  = 'Juin';
lesMois[6]  = 'Juillet';
lesMois[7]  = 'Août';
lesMois[8]  = 'Septembre';
lesMois[9]  = 'Octobre';
lesMois[10] = 'Novembre';
lesMois[11] = 'Décembre';

// Création de la date.
maDate = new Date();

// On peut aussi donner en argument à la méthode de création une chaîne de caractères :
// maDate = new Date('2013-12-24');

/*
 * Affichage du contenu d'une partie du tableau directement dans la page HTML.
 *
 * La méthode getDay() renvoie un nombre servant d'indice dans le tableau lesJours.
 * La méthode getMonth() renvoie un nombre servant d'indice dans le tableau lesMois.
 */
document.write('Nous sommes le ' + lesJours[maDate.getDay()] + ' ');
document.write(maDate.getDate() + ' ');
document.write(lesMois[maDate.getMonth()] + ' ');
document.write(maDate.getFullYear() + '<br>');

document.write(maDate.getHours() + 'h' + maDate.getMinutes() + ':' + maDate.getSeconds() )

/*
 * Un code complexe se lit toujours de l'intérieur vers l'extérieur, exemple :
 *
 * A. Que vaut maDate.getDay() ?
 * B. Qu'y a t'il dans le tableau lesJours à la case égale à ce que vaut maDate.getDay() ?
 */

//
// Bonus : afficher également l'heure au format "Il est 11h30 et 18 secondes"
//