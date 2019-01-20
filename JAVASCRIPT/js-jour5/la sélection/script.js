// JE SELECTIONNE UN ELEMENT (une balise) dans la page par son id
var paragraph = document.getElementById("content");

console.log(paragraph);

// JE MODIFIE LE DOM
paragraph.textContent = "Je viens de te remplacer ton texte !";

// Selection
//        		- getElementById() prend en parametre un id à sélectionner et retourne le 1er Elt trouvé
//             - getElementsByClassName() prend en paramètre la class CSS et retourne un tableau d'Elt
//             - getElementsByTagName() prend en paramètre un nom de balise et retourne un tableau d'Elt

//             - querySelector() prend en paramètre une selection CSS et retourne le 1er Elt trouvé
//             - querySelectorAll() prend en paramètre une selection CSS et retourne un tableau d'Elt
//        */

//        /*
//        		les Modifications du DOM courantes(Document Object Model)
//             - Elt.textContent="le texte change"; modifie du texte à l'intérieur d'un Elt HTML sélectionné
//             - Elt.innerHTML="le html change" modifie du HTML à l'intérieur d'un Elt HTML sélectionné
//             - Elt.classList.add()
//             			   .remove()
//                            .toggle()
//                            .contains()

// SELECTIONNER LA BALISE H1
// REMPLACER SON CONTENU PAR LE TEXTE "la selection - la modification du DOM

var headerOne = document.querySelector("h1");
headerOne.textContent = "la selection - la modification du DOM";
headerOne.innerHTML = "<span>la selection - la modification du DOM</span>";

// SELECTIONNER LA BALISE BLOCKQUOTE
// AJOUTER sur la balsie blockquote, LA CLASS red
var blockQuote = document.querySelector("blockquote");
blockQuote.classList.add("red");

var liste = document.querySelectorAll("li");
for (var index = 0; index < liste.length; index++) {
  liste[index].classList.add("red");
}

// ON POSE UN ECOUTEUR D'EVENEMENT
var bouton = document.querySelector("button");

function ajouterCouleur() {
  blockQuote.classList.add("red");
}

bouton.addEventListener("click", ajouterCouleur);
