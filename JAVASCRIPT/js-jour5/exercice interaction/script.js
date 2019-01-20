// Hello tt le monde. Coincé dans les bouchons. J arrive. Commencer par l 'exercice du matin avec ce que vous avez appris hier en fin de journée .

// Reprenez le code du panier qu'on a réalisé et challenge : AJOUTER la couche interaction :)

// 1 creer en html les boutons :
// - ajouter un produit
// - supprimer un produit
// - vider le panier

// 2 ajouter les interactions suivantes :
// - quand l utilisateur clique sur le bouton "ajouter produit" la fonction addProduct doit s executer
// - quand l utilisateur clique sur le bouton "supprimer produit", la fonction removeProduct doit s executer
// - quand l utilisateur clique sur le bouton "vider panier", la fonction clearList doit s executer.
// Indications :

// - Utiliser la selection pour selectionner vos 3 boutons

// - puis poser un ecouteur d evenement sur chacun de vos 3 boutons.

// Utiliser la methode avec la syntaxe suivante:
// El.addEventListener('EventName', fonctionAExecuter)

// Quand j arrive normalement vous avez terminé :)

var products = ["Playstation4", "XboxOne"];
var boutonAjouterProduit = document.getElementById("ajouterProduit");
var boutonSupprimerProduit = document.getElementById("supprimerProduit");
var boutonViderListe = document.getElementById("viderListe");

function afficherListe() {
  document.querySelector("ul").innerHTML = "";
  if (products.length == 0) {
    document.querySelector("ul").textContent = "Votre panier est vide !";
  }
  for (var index = 0; index < products.length; index++) {
    document.querySelector("ul").innerHTML +=
      "<li> <button>X</button> " + products[index] + "</li>";
  }
  var items = document.querySelectorAll("li button");
  for (var index = 0; index < items.length; index++) {
    items[index].addEventListener("click", supprimerProduit);
  }
}

function ajouterProduit() {
  nouveauProduit = window.prompt("Ajoutez un nouveau produit :");
  products.push(nouveauProduit);
  afficherListe();
}

function supprimerProduit() {
  // var produit = window.prompt("Veuillez supprimer un produit :");
  var produit = this.textContent;
  var indexASupprimer = products.indexOf(produit);
  products.splice(indexASupprimer, 1);
  afficherListe();
}

function viderListe() {
  products.length = 0;
  afficherListe();
}

afficherListe();

boutonAjouterProduit.addEventListener("click", ajouterProduit);
// boutonSupprimerProduit.addEventListener("click", supprimerProduit);
boutonViderListe.addEventListener("click", viderListe);
