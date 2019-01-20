// ## Enoncé

// L'utilisateur saisit un montant HT et peut saisir s'il le souhaite une remise, le résultat TTC s'affiche en HTML.

// ## Remarques

// * L'utilisateur doit pouvoir répondre oui ou yes à la demande de remise.

// * La saisie de la remise se fait en pourcentage, et elle s'applique sur le montant HT autrement il y a fraude à la TVA

// * Au moment de l'affichage on doit connaître le pourcentage de remise, s'il y en a eu une, ou bien savoir le fait qu'aucune remise n'a été appliquée.

// * Quand votre code est fonctionnel, FACTORISEZ-LE :
// Factoriser du code consiste à éviter de répéter les mêmes istructions.
// Ici, il ne faut pas répéter le calcul du montant TTC final.

// Texte à afficher si remise :

// Pour un montant HT de 100 € il y a 20 € de TVA.
// Le montant TTC est donc de 120 €.
// Une remise de 30% a été appliquée sur le montant HT.

// Texte à afficher si pas de remise
// Pour un montant HT de 100 € il y a 20 € de TVA.
// Le montant TTC est donc de 120 €.
//Aucune remise n'a été appliquée.

const TAUX_TVA = 20;
var montantHT;
var montantTVA;
var MontantTTC;
var remise;
var remisePourcentage;

montantHT = window.prompt("Saisir un montant Hors-Taxe:");
montantHT = parseFloat(montantHT);

remise = window.prompt("Voulez -vous saisir une remise ?");

if (remise == "oui" || remise == "yes") {
  remisePourcentage = window.prompt("Saisir votre remise en pourcentage:");
  remisePourcentage = parseFloat(remisePourcentage);

  montantHT = montantHT - montantHT * (remisePourcentage / 100);

  document.write(
    "<p>Une remise de " +
      remisePourcentage.toFixed(2) +
      "% a été appliquée sur le montant HT.</p>"
  );
} else {
  document.write("<p>Aucune remise n'a été appliquée.</p>");
}

montantTVA = montantHT * (TAUX_TVA / 100);
MontantTTC = montantTVA + montantHT;

document.write(
  "<p>Pour un montant HT de " +
    montantHT.toFixed(2) +
    "€, " +
    "il y a " +
    montantTVA.toFixed(2) +
    "€ " +
    "de TVA.</p>"
);
document.write(
  "<p>Le montant TTC est donc de " + MontantTTC.toFixed(2) + "€.</p>"
);
