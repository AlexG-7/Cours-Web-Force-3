// Déclaration d'une variable.
var prenom;


/*
 * Demande à l'utilisateur de saisir quelque chose dans une popup,
 * lorsque la popup se referme le résultat sera affecté à la variable.
 */
prenom = window.prompt('Comment vous appelez-vous ?');

// Affichage du contenu de la variable dans un paragraphe HTML.
document.write('<p>Je m\'appelle');
document.write(prenom);
document.write('</p>');