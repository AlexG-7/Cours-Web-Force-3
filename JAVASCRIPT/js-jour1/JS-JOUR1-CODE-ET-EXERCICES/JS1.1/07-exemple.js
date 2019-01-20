// Déclaration d'une constante.
const monTauxDeTVA = 20.0;

// Déclaration de trois variables.
var monMontantHT;
var monMontantTTC;
var monMontantTVA;


// Affectation d'une valeur à une variable.
monMontantHT = 100;
console.log(monMontantHT);


// Incrémentation d'une variable.
monMontantHT++; 
console.log(monMontantHT);// Identique à monMontantHT = monMontantHT + 1;

/* A partir de cette ligne monMontantHT vaut 101. */


// Décrémentation d'une variable.
monMontantHT--;// Identique à monMontantHT = monMontantHT - 1;

/* A partir de cette ligne monMontantHT vaut 100 de nouveau. */


// Opérations arithmétiques sur des variables et constantes.
monMontantTVA = monMontantHT * monTauxDeTVA / 100;
monMontantTTC = monMontantHT + monMontantTVA;

// Affichage du résultat directement dans la page HTML.
document.write(monMontantTTC);