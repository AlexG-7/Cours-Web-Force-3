// ## Enoncé

// Construire une table des multiplications à afficher en HTML dans une balise <table>

// ## Remarques

// * Pour rappel, une boucle permet d'itérer du code (afficher un template html)
// * On peut utiliser une boucle dans une boucle

// * Au moment de l'affichage HTML, lorsque le nombre est multiplié par lui-même (1x1, 2x2, 3x3, etc.) la cellule du tableau doit s'afficher d'une autre couleur que les autres cellules; **la solution doit être en CSS**.

var tailleTableMultiplication;
tailleTableMultiplication = parseInt(
  window.prompt("Saisissez la taille de la Table de multiplication svp :")
);

document.write("<table><tbody>");

for (var i = 1; i <= tailleTableMultiplication; i++) {
  document.write("<tr>");

  for (var j = 1; j <= tailleTableMultiplication; j++) {
    var multiplication = i * j;

    if (i == j) {
      document.write("<td class=memeCase>" + multiplication + "</td>");
    } else {
      document.write("<td>" + multiplication + "</td>");
    }
  }

  document.write("</tr>");
}

document.write("</tbody></table>");
