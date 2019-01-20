'use strict';   // Mode strict du JavaScript

// Déclaration d'une constante.
const TAUX_DE_TVA = 20.0;

// Déclaration de trois variables.
var monMontantHT;
var monMontantTTC;
var monMontantTVA;


// Demande le montant HT à l'utilisateur.
monMontantHT = window.prompt('Quel est le montant HT ?');
monMontantHT = parseFloat(monMontantHT);

/*
 * Les deux lignes du dessus peuvent être réduites également en une seule :
 * monMontantHT = parseFloat(window.prompt('Quel est le montant HT ?'));
 *
 * Le code se lit et s'exécute de l'intérieur des parenthèses vers l'extérieur.
 */


// Calcul du montant de TVA et du montant TTC final.
monMontantTVA = monMontantHT * TAUX_DE_TVA / 100;
monMontantTTC = monMontantHT + monMontantTVA;
monMontantTVA = monMontantTVA.toFixed(2);
monMontantTTC = monMontantTTC.toFixed(2);

// Affichage du résultat directement dans la page HTML.
document.write('<p>Pour un montant HT de ' + monMontantHT + ' € il y a ' + monMontantTVA + ' € de TVA.</p>');
document.write('<p>Le montant TTC est donc de ' + monMontantTTC + ' €.</p>');



//
// Bonus : demander également le taux de TVA à l'utilisateur.
//