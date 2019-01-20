// Déclaration d'une constante et affectation immédiate d'une valeur.
const UNE_CONSTANTE = 'Ceci est une constante !';

// La ligne de code ci-dessous est une erreur car on NE PEUT PAS modifier une constante.
// UNE_CONSTANTE = 'Modification de la constante';

// Affichage du contenu de la constante directement dans la page HTML.
document.write(UNE_CONSTANTE);

/*
 * En lisant le code d'un projet, le développeur peut se demander pourquoi telle ou telle
 * valeur obscure (un nombre à virgule compliqué par exemple) est utilisée.
 *
 * En remplaçant cette valeur par une constante avec un nom précis et clair on documente
 * simplement le code, au même titre que quand on nomme correctement une variable.
 *
 *
 * Règle d'or : on code pour des humains et pas pour des machines !
 */