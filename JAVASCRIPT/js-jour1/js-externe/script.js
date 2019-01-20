//LES VARIABLES

//1 je déclare une variable
var prenom;

//2 on assigne une valeur à la variable
prenom = "Lionel";

//On vérifie que la variable s'affiche bien dans la console
console.log(prenom);

prenom = "Mich Mich";
//On affiche la valeur de la variable prénom
document.write(prenom);

// LES CONSTANTES

const UNE_CONSTANTE = "Ceci est une constante";

//EXERCICE MONTANT HT/TTC
var montantHT = 100;
const TAUX_TVA = 20;

//1 Calculer le montant de la TVA
var montantTVA;
var montantTTC;

montantTVA = montantHT * (TAUX_TVA / 100);
montantTTC = montantTVA + montantHT;

//Tests sur la console
console.log(montantTVA);
console.log(montantTTC);

//2 Afficher dans la page une phrase sous la forme
// Le montant de la TVA : 20 €
// Le montant TTC : 120 €
document.write("Le montant de la TVA est de " + montantTVA + "€");
document.write("Le montant TTC est de " + montantTTC + "€");
//On utilise le signe + pour concaténer plusieurs chaînes de caractères
//La concaténation sert à assembler deux chaînes de caractères