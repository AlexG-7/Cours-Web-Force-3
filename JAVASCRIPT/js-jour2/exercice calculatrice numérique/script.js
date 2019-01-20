// dossier exercice-calculatrice-numerique
// 	 > index.html
//      > script.js

// ## Enoncé

// L'utilisateur saisit un nombre puis un autre ainsi que l'opération mathématique souhaitée, le résultat s'affiche en HTML.

// ## Remarques

// * Les nombres saisis peuvent être à virgule.
// * La calculatrice doit accepter les quatres opérations mathématiques de base et rejeter toutes les autres.
// * L'utilisateur doit pouvoir autant saisir le nom de l'opération  :
//   + - * / addition soustraction division multiplication

// * La division par zéro n'existe pas, il va falloir gérer ce cas
// * Il faut répéter le moins de code possible, notamment le code d'affichage du résultat

// Phrase à afficher: Le résultat de l'opération est 25.

var nombre1;
var nombre2;
var operation;
var resultat;

nombre1 = window.prompt("Saisissez votre premier chiffre :");
nombre1 = parseFloat(nombre1);

nombre2 = window.prompt("Saisissez votre second chiffre :");
nombre2 = parseFloat(nombre2);

operation = window.prompt("Saisissez votre opération: + , - , * , / :");

switch (operation) {
  case "+":
    resultat = nombre1 + nombre2;
    break;
  case "-":
    resultat = nombre1 - nombre2;
    break;
  case "*":
    resultat = nombre1 * nombre2;
    break;
  case "/":
    if (nombre2 == 0) {
      document.write("<p>Le résultat de l'opération est impossible.</p>");
    } else {
      resultat = nombre1 / nombre2;
    }
    break;
  default:
    document.write("<p>Vous n'avez pas saisi la bonne opération.</p>");
    break;
}

if (isNaN(resultat)) {
  document.write("<p>Veuillez ressaisir des chiffres SVP</p>");
} else {
  document.write("<p>Le résultat de l'opération est " + resultat + ".</p>");
}
