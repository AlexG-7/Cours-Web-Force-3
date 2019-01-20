
/* 
   EXERCICE 
   Créer un programme type panier E-commerce qui permet  :
     - AFFICHER une liste dans des <li> d'après le tableau products
     - AJOUTER  un élément dans un tableau
     - SUPPRIMER un élément du tableau

    INDICATIONS
      - Réfléchir à la construction du programme grâce aux fonctions
      - Quelles fonctions avez-vous besoin de créer ?
      - Créer de noms de fonctions logique et compréhensible    
*/

// quelques fonctions liées aux arrays
// https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array

// .pop() permet de retirer le dernier élement d'un tableau
// .shift() permet de retirer le premier élement d'un tableau
// .push() ajoute un ou plusieurs à la fin d'un tableau
// .sort() trier par ordre alphabétique
// .indexOf(element) retourne l'index d'un élement du tableau

// .splice(index, 1) Supprime des éléments dans un tableau
//                   param1 index qu'on veut supprimer
//                   param2 combien d'entrée(s) on veut supprimer



/*
*****************************************************
1 Données de départ : le contenu de notre liste panier
*****************************************************
*/
var products = ["Playstation4", "XboxOne", "Wii"];




/*
*****************************************************
 2 ON DECLARE LES 4 FONCTIONS DU PANIER
   - AFFICHER la liste : displayList()
   - AJOUTER un produit : addProduct()
   - SUPPRIMER un produit : removeProduct()
   - VIDER le panier : clearList()
 *****************************************************
*/


/* 
  * Fonction diplayList() 
  * rôle : afficher les produits de la liste
 */
function displayList() {
  // On efface tout le contenur du <ul> 
  document.querySelector('ul').innerHTML='';

  // Si le array products est vide on affiche la phrase "Votre panier est vide"
  if(products.length == 0) {
    document.querySelector("ul").textContent = "Votre panier est vide";
  }
  // Sinon on affiche la liste des products
  else {

    for(var i=0; i<products.length; i++) {
      document.querySelector("ul").innerHTML += "<li><button>Supprimer</button><span>" +products[i] + "</span></li>";
    }

    var items = document.querySelectorAll("li button"); // retourne un array de tous les <li>
    // on pose un écouteur d'évenement sur chacun des <li> en utilisant une boucle
    for(var i=0; i< items.length; i++) {
      items[i].addEventListener('click', removeProduct)
    }
  } 
  
}



/*
 * Fonction addProduct
 * rôle: ajouter un produit dans le array products, puis réafficher la liste
 * indications : utiliser la méthode push() pour ajouter une entrée dans un array
*/
function addProduct() {
  // Demander à l'utilisateur "Ajouter un produit"
  var newProduct = window.prompt("Ajouter un nouveau produit");

  // Ajouter un nouveau produit dans le tableau
  if(newProduct.trim() != '') {
    products.push(newProduct);
  }
  

  // Réafficher la liste
  displayList();
}



/* 
 * Fonction pour retirer un produit de la liste puis réafficher la liste
 * rôle: supprimer un produit dans le array products, puis réafficher la liste
 * indications : 
 *  - this est une variable spéciale. Dans une fonction appelée par un évènement, this représente l'élément HTML qui a déclenché l'évènement
 *  - utiliser indexOf() et splice() pour retirer un élément de la liste 
*/
function removeProduct() { 

  if( window.confirm("Voulez-vous vraiment supprimer ce produit ? ") ) {
    // 1 récupère l'élément <li>
    var liElt = this.parentNode.querySelector('span'); // Retourne le <li> (élément parent)
    var productToRemove = liElt.textContent; // la variable spéciale this représente l'élément <li> qui a été cliqué
    console.log(productToRemove);

    // Etape 2 : on récupérer l'index du product spécifié par l'utilisateur (indexOf)
    var indexProductToRemove = products.indexOf(productToRemove);

    // Etape 3 : on supprime le product du tableau (splice)
    /*
          * RAPPEL splice()
          * param1 : index à partir duquel on veut retirer un ou plusieurs éléments
          * param2 : nombre d'élements du tableau à retirer
        */
    products.splice(indexProductToRemove, 1);
    // Etape 4 : On réaffiche la liste
    displayList();
  }

}



/*
 * Fonction pour retirer tous les produits de la liste
 * rôle: vider tout le tableau products, et afficher un message "Le panier est vide"
*/
function clearList() {
  products.splice(0, products.length);
  console.log(products);
  // la fonction displayList() affiche le message 'Le panier est vide' SI products est un tableau vide
  displayList();

}





/*
*****************************************************
3 LA LOGIQUE DU CODE
*****************************************************
*/

// Au chargement de la page on exécute la fonction displayList
displayList();

//SELECTION DES BOUTONS
var addBtn = document.querySelector("#add"); // retourne l'élément HTML du bouton "ajouter produit"
var clearBtn = document.querySelector("#clear"); // retourne l'élément HTML du bouton "vider le panier"

// AJOUTER LES ECOUTEURS D'EVENEMENTS  
addBtn.addEventListener('click', addProduct);
clearBtn.addEventListener('click', clearList);


// END