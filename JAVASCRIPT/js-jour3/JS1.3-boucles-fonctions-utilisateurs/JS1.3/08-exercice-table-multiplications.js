'use strict';   // Mode strict du JavaScript

// Déclaration de quatre variables.
var colonne;
var ligne;
var taille;
var tableMultiplications;


// Demande la taille maximum de la table des multiplications.
taille = parseInt(window.prompt('Taille de la table de multiplications ?'));

// Initialisation de la table des multiplications.
tableMultiplications = [];


// Construction de la table des multiplications de 1 jusqu'à la variable taille.
for(ligne = 1; ligne <= taille; ligne++)
{
    // Pour chaque nouvelle ligne il faut créer un nouveau tableau.
    tableMultiplications[ligne] = [];

    for(colonne = 1; colonne <= taille; colonne++)
    {
        // Stockage du résultat du calcul dans la table des multiplications.
        tableMultiplications[ligne][colonne] = ligne * colonne;
    }
}
console.log(tableMultiplications);


// Construction en HTML de la table des multiplications.
document.write('<table>');

for(ligne = 1; ligne <= taille; ligne++)
{
    document.write('<tr>');

    for(colonne = 1; colonne <= taille; colonne++)
    {
        // Si les deux nombres multipliés sont les mêmes...
        if(ligne == colonne)
        {
            // ...Alors on applique une classe CSS à la cellule.
            document.write('<td class="same-number">');
        }
        else
        {
            document.write('<td>');
        }

        document.write(tableMultiplications[ligne][colonne]);

        document.write('</td>');
    }

    document.write('</tr>');
}

document.write('</table>');