// Exercice Compteur Twitter en jQuery

// dossier exercice-compteur-twitter
// 		> index.html

// #HTML
// -> une balise h1 avec le titre Exercice Compteur Twitter en jQuery
// -> une balise textarea
// -> une balise paragraphe qui indique au démarrage "140"

// #CSS
// -> une class .important (couleur rouge)

// # Interaction
// -> Lorsqe l'utilisateur saisit du texte,
//    le nombre de caractères restants s'affiche

// -> Si le nombre de caractère est inférieur à 0,
//    le texte devient rouge

// # Indications
// -> Selection et écoute d'EVT en jQuery
// -> .val() // récupérer la valeur du champ d'un formulaire
// -> Compter le nombre de caractère du textarea

// -> .addClass()
// -> .removeclass()
// -> .toggleClass()

function Count() {
  var countLetter = 140 - $("#twitter").val().length;
  $("p").text(countLetter);

  if (countLetter < 0) {
    $("p").addClass("important");
  } else {
    if ($("p").hasClass("important")) {
      $("p").removeClass("important");
    } else {
    }
  }
}

$("#twitter").on("keyup", Count);
