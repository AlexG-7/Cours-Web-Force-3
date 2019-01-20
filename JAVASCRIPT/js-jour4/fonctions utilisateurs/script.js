// 1 Déclarer une fonction utilisateur
function sayHello() {
  // code à executer
  document.write("bonjour");
}

// 2 Je peux l'executer
sayHello();

// 1 Déclarer une fonction utilisateur
function sayHello(firstname) {
  // code à executer
  document.write("bonjour " + firstname);
}

// 2 Je peux l'executer

sayHello("Lionel");

// Déclaration d'une fonction (On crée une fonction)
function direBonjour() {
  document.write("<p>Salut!</p>");
}

function sayHello(firstname, lastname) {
  document.write("<p>bonjour " + firstname + " " + lastname + "</p>");
}

// On execute la fonction direBonjour
direBonjour(); // Affiche Salut!

// on execute la fonction sayHello
sayHello("Karim", "Lo"); // Affiche Bonjour Karim Lo

// EXERCICE
// Créer une fonction additionner qui prend en paramètre 2 nombres
// et qui affiche le résultat dans une balise paragraphe

function additionner(nombre1, nombre2) {
  var resultat = nombre1 + nombre2;
  document.write("<p>Le résultat de l'addition est de " + resultat + "</p>");
}

// exécution
additionner(25, 203);

// fonctions liées aux arrays

// .pop()---> permet de supprimer le dernier élément d'un tableau
// .shift() ---> permet de retirer le premier élément d'un tableau
// .push() ---> permet d'ajouter un ou plusieurs éléments à la fin d'un tableau et
//              retourne la nouvelle taille du tableau
// .unshift() --->
// .sort() ---> permet de trier par ordre alpha
// .indexOf(element) ---> retourne l'index d'un élément du tableau
// .splice(index, 1) ---> Supprime des éléments dans un tableau
//                        param1 index qu'on veut supprimer
//                        param2 combien d'entrée(s) on veut supprimer