/* 
	* Créer un programme type panier E-commerce qui permet  :
    	- AFFICHER une liste dans des balises <li> d'après le tableau products
 		- AJOUTER  un élément dans un tableau
        - SUPPRIMER un élément du tableau
*/

/*  INDICATIONS
	-> Réfléchir à la construction du programme grâce aux fonctions
    Quelles fonctions avez-vous besoin de créer ?

	-> Créer de noms de fonctions logique et compréhensible   
*/
// Données de départ
var products = ["Playstation4", "XboxOne"];

function afficherListe() {
  document.querySelector("body").innerHTML = "";
  if (products.length == 0) {
    document.write("Votre panier est vide !");
  }
  for (var index = 0; index < products.length; index++) {
    document.write("<li>" + products[index] + "</li>");
  }
}

function ajouterProduit() {
  nouveauProduit = window.prompt("Ajoutez un nouveau produit :");
  products.push(nouveauProduit);
  afficherListe();
}

function supprimerProduit() {
  var produit = window.prompt("Veuillez supprimer un produit :");
  var indexASupprimer = products.indexOf(produit);
  products.splice(indexASupprimer, 1);
  afficherListe();
}

function viderListe() {
  products.length = 0;
  afficherListe();
}

afficherListe();
