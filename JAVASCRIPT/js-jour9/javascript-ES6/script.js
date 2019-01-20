/*
 ** let / var
 **
 ** + var a une portée globale ou de fonction
 ** + alors que let a une portée de bloc
 **	 -> un bloc parent n'a pas accès aux variables d'un bloc enfant
 **	 -> un bloc enfant accès aux variables d'un bloc parent
 */

/*
	**********************************************************
	EXEMPLE1:  AVEC VAR : PORTEE GLOBALE ET PORTEE DE FONCTION
	**********************************************************
*/

var a = 10;

function test() {
  if (true) {
    var a = 9;
  }
  console.log(a);
}

test();
console.log(a);

/*
	***********************************
	EXEMPLE2: AVEC LET : PORTEE DE BLOC
	Avec let, on ne peut pas accéder à une variable déclarée dans le bloc enfant depuis 	le bloc parent
	***********************************
*/

function test2() {
  if (true) {
    let b = 9;
  }
  console.log(b);
}
test2();

// affiche reference Error: b is undefined
// Pourquoi ?
// Parce que la règle avec let: un bloc parent n'a pas accès aux variables déclarées dans un bloc enfant

/*
	**********************
	TESTONS DONC L'INVERSE
	EXEMPLE3: Avec let, on peut accéder à une variable du bloc parent depuis un bloc enfant
	**********************
*/
function test3() {
  let c = 10;
  if (true) {
    console.log(c);
  }
}
test3();
// Affiche 9
//Pourquoi ?
// Parce que la règle avec let: un bloc enfant a accès aux variables du bloc parent

/*
	****************************************
	EXEMPLE4: var et let dans une boucle for
	Rappel:
	- var a une portée globale
	- let a bien une portée de bloc
	****************************************
*/
var i = 42;
for (var i = 0; i < 10; i++) {
  console.log(i);
}
console.log(i);
// Affiche 0,1,2,3,4,5,6,7,8,9,10

let i = 42;
for (let i = 0; i < 10; i++) {
  console.log(i);
}
console.log(i);
// Affiche 0,1,2,3,4,5,6,7,8,9,42
// Pourquoi ?
// i à l'extérieur de la boulce for, et i dans la boucle, sont 2 variables distinctes
// grâce au principe de portée de bloc
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 ** Les fonctions fleches ou arrow functions
 ** sont un sucre syntaxique pour déclarer des fonctions  de manière plus concise
 ** A noter: On utilise plutôt les fonctions flechées quand on écrit des fonctions anonymes, des callbacks par exemple
 */

/***********************
 ** LA SYNTAXE PRINCIPALE
 ************************/

// En lieu et place de la syntaxe classique:

// function (arg) {
// 	return something;
// }

/*
 **On écrit la même chose avec les fonctions fléchées*/

arg => something;
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// EXEMPLE simple avec la fonction map()
// La méthode map() crée un nouveau tableau composé des éléments du tableau courant, modifiés par une fonction donnée en argument.

let array = [1, 2, 9, 16];

let array2 = array.map(function(num) {
  return num * 2;
});

// ET en ES6
let array2 = array.map(num => num * 2);
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
** 	EXEMPLE AVEC LA METHODE FILTER
**	https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/filter
**	Rappel : la méthode filter filtrer les donnée d'un array et retourne un nouvel array

**	fonctionnement: la méthode filter passe en revue chaque valeur de l'array original et vérifie ce que renvoie la fonction de rappel de notre méthode filter() :
**	-> Si la fonction de rappel renvoi TRUE, alors la valeur est conservée
**	-> Si la fonction de rappel renvoie FALSE, alors la valeur est sortie

** 	Exercice : utiliser la méthode filter() sur un tableau de fruits,
**	pour renvoyer un array qui des fruits contenant la chaîne de caractère "fr"
**	Vous pouvez utilisez les méthodes : Array.filter, String.inclues(), String.ToLowerCase()
*/

let fruits = ["Orange", "Fraise", "Pomme", "Framboise", "Banane"];
result = fruits.filter(fruit => fruit.toLowerCase().includes("fr"));
console.log(result); // Affiche 'Fraise', 'Framboise'

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
 ** 2 On l'a vu une fonction fléchée s'utilise plutôt comme fonction anonyme, mais...
 ** Si on a besoin de donner un nom à une fonction flechée, c'est possible :
 **   - on déclare un nom de variable dont la valeur sera notre fonction
 **   - on utilise des parenthèses vides si notre fonction ne prend pas de paramètre
 **   - on peut aussi passer un ou plusieurs paramètres dans les parenthèses
 */

function helloTo(firstname) {
  console.log("Salut " + firstname);
}

let hello = () => "hello";
let helloTo = name => "hello" + name;
// ES6

/*
		** En ES6, on peut maintenant assigner des valeurs par défaut
		** aux paramètres des fonctions quand on les déclare

		** Ceci permet d'être moins rigide,
		** en n'imposant pas le même nombre de paramètres lors de l'exécution que le nombre
		** de paramètres déclarés.

		**Exemple :
		*/
function direBonjourA(firstname, lastname = "") {
  console.log("Salut " + firstname + " " + lastname);
}

helloTo("Fred");
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

/*
 ** AVANT EN ES5, on devait absolument spécifier les paramètre lors de la déclaration de la fonction
 */
function additionner(nb1, nb2) {
  return nb1 + nb2;
}
console.log(additionner(1, 3)); // Retourne 4 dans la console

/*
		** En ES6, on peut maintenant passer des valeurs libres dans les paramètres
		** d'une fonction qu'on exécute

		** En passant des paramètres rest lors de la déclaration avec la syntaxe ...nomDeMaVariable
		** Notre fonction récupère ces valeurs libres dans un Array
		*/
function faireLaSomme(...nombres) {
  console.log(nombres); // Ici nombres est un array
  let somme = 0;
  for (let nombre of nombres) {
    console.log(nombre);
    somme += nombre;
  }
  return somme;
}
faireLaSomme(1, 5, 97, 42);


//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////


let products = ['XBOX 360', 'XBOX ONE', 'PLAYSTATION4', 'NINTENDO SWITCH'];

for (var i = 0; i < products.length; i++) {
  console.log(products[i])
}


for (let product of products) {
  console.log(product);
}

for (let eleve of eleves) {
  console.log(eleve);
}