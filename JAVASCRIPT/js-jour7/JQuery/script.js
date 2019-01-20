// en JavaScript

// document.querySelector("h1").textContent="Ce texte vient d'être remplacé";

// function sayHello() {
//   alert("salut");
// }

// document.querySelector("button").addEventListener("click", sayHello);

// var items = document.querySelector("li");

// for (var index = 0; index < items.length; index++) {
//   items[i].addEventListener("click", function() {
//     alert(this.textContent);
//   });
// }
//
//
//
//
//
//
//
//
//
//

// en JQuery

function getText() {
  alert($(this).text());
}

$("h1").text("Ce texte vient d'être remplacé");

$("button").on("click", function() {
  alert("Salut");
});

$("li").on("click", function() {
  alert($(this).text());
});

$(document).on("click", function(event) {
  console.log(event.target);
  console.log(event.currentTarget);
});

// event.target : renvoie l'elt CIBLE exact
// event.currentTarget : renvoie l'elt sur lequel on a posé l'écouteur
// $(this) : il renvoie l'elt qui a déclenché l'event