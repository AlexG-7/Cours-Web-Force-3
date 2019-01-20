// Dossier exercice-calculatrice-

// ## Enoncé

// L'utilisateur saisit un montant HT, le résultat TTC s'affiche en HTML.
// balises <p>

// ## Détails

// * Le taux de TVA utilisé est le taux normal en vigueur en France (20)
// * Le taux de TVA n'est pas variable.
// * Il faut réafficher toutes les informations : le montant HT, le montant de TVA et le résultat TTC.
// * Attention au type de donnée renvoyé par window.prompt()…
// * Le montant HT peut être à virgule…

//BONUS: Afficher les montants formatés avec 2 chiffres après la virgule

//Déclarer les variables dont on a besoin
const TAUX_TVA = 20;
var montantHT;
var montantTVA;
var montantTTC;

//Demander le montant HT à l'utilisateur
montantHT = window.prompt("Saisissez votre montant Hors-Taxe");

montantHT = parseFloat(montantHT);

//Calculer le montant TVA et le montant TTC
montantTVA = montantHT * (TAUX_TVA / 100);
montantTTC = montantTVA + montantHT;

montantHT = montantHT.toFixed(2);
montantTVA = montantTVA.toFixed(2);
montantTTC = montantTTC.toFixed(2);

//Afficher les phrases dans des balises <p> sous la forme:
//Pour un montant HT de 145€ il y a 29.00€ de TVA
//Le montant TTC est donc de 174.00€

document.write(
  "<p>Pour un montant HT de " +
  montantHT +
  "€, il y a " +
  montantTVA +
  "€ de TVA.</p>" +
  "<p>Le montant TTC est de " +
  montantTTC +
  "€.</p>"
);
