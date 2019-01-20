'use strict';   // Mode strict du JavaScript

// Déclaration de quatre variables.
var nombre1;
var nombre2;
var operation;
var resultat;


// Récupération des deux nombres et de l'opération mathématique à effectuer.
nombre1   = parseFloat(window.prompt('Saisissez un premier nombre :'));
nombre2   = parseFloat(window.prompt('Saisissez un deuxième nombre :'));
operation = window.prompt('Quelle opération mathématique souhaitez-vous effectuer ?');


// Exécution de la calculatrice.
switch(operation)
{
    case '+':
    case 'addition':
    resultat = nombre1 + nombre2;
    break;

    case '-':
    case 'soustraction':
    resultat = nombre1 - nombre2;
    break;

    case '*':
    case 'multiplication':
    resultat = nombre1 * nombre2;
    break;

    case '/':
    case 'division':
    { // On peut utiliser des accolades pour écrire le code d'un case d'un switch.

        if(nombre2 == 0)
        {
            document.write('<p>Erreur : vous ne pouvez pas diviser un nombre par 0 !</p>');

            // Le fait de placer un break ici permet de sortir IMMEDIATEMENT du switch.
            break;
        }

        resultat = nombre1 / nombre2;
    }
    break;

    default:
    document.write("<p>Erreur : vous avez indiqué une opération inconnue !</p>");
    break;
}


/*
 * Si l'utilisateur a saisi autre chose qu'un nombre dans les variables nombre1 ou nombre2
 * alors les fonctions parseFloat() renvoient la valeur spéciale NaN.
 *
 * Du coup la variable resultat vaudra forcément NaN également !
 */
if(isNaN(resultat) == true)
{
    document.write("<p>Vous n'avez pas saisi deux nombres !</p>");

    // La variable resultat est maintenant indéfinie.
    resultat = undefined;
}


/*
 * Il faut afficher le résultat de l'opération uniquement s'il n'y a PAS eu d'erreur !
 *
 * Les erreurs possibles sont :
 * 1. L'utilisateur a voulu effectuer une division par zéro (ligne 38).
 * 2. L'opération demandée est inconnue (ligne 49).
 * 3. L'un des deux nombres saisis n'est pas réellement un nombre (ligne 62)
 *
 * Lorsqu'une erreur se produit la variable resultat vaut undefined, il faut donc tester
 * cette valeur pour détecter qu'une erreur s'est produite.
 */
if(resultat != undefined)
{
    document.write("<p>Le résultat de l'opération est <strong>" + resultat + '</strong>.</p>');
}