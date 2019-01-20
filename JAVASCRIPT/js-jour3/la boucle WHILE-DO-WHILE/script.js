// La boucle for permet d'itérer du code (répéter du code) un nombre de fois déterminé.

// La boucle while permet d'itérer du code TANT QUE une condition vaut TRUE

// WHILE
// PERMET DE REPETER DU CODE QUAND UNE EXPRESSION VAUT TRUE
var compteur = 0;

while (compteur <= 10) {
  document.write("<p>Le compteur vaut " + compteur + ".</p>");
  compteur = compteur + 1;
}

// DO WHILE
// PERMET DE REPETER DU CODE QUAND UNE EXPRESSION VAUT TRUE
// ET IL EXECUTE AU MOINS UNE FOIS LE CODE ENTRE ACCOLADE
var compteur2 = 0;

do {
  document.write("<p>Le compteur vaut " + compteur2 + ".</p>");
  compteur2 = compteur2 + 1;
} while (compteur2 <= 10);
