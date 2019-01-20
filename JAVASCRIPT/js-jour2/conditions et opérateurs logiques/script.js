//CONDITIONS

var age = 30;
var prenom = "Lionel";

age = window.prompt("Quel âge avez-vous ?");
prenom = window.prompt("Saisissez votre prénom :");

if (age >= 18) {
  //Structure conditionnelle simple (if)
  document.write("<p>Vous êtes majeur !.</p>");
}

if (age < 20) {
  //Structure conditionnelle if else
  document.write("<p>Vous avez moins de 20 ans.</p>");
} else {
  document.write("<p>Vous avez 20 ans ou plus.</p>");
}

if (prenom == "Jérôme") {
  //Structure conditionnelle if else if else
  document.write("<p>Bonjour Jérôme !. (cas if else if else)</p>");
} else if (prenom == "Kelwin") {
  document.write("<p>Bonjour Kelwin !. (cas if else if else)</p>");
} else if (prenom == "Lionel") {
  document.write("<p>Bonjour Lionel !. (cas if else if else)</p>");
} else {
  document.write("<p>Je ne connais pas votre prénom ! (cas if else if else)</p>");
}

//OPERATEURS LOGIQUES "ET" et "OU"

//Par exemple si on veut tester que la personne a entre 20 ans et 30 ans
//On peut ultiliser la table de vérité
// https://fr.wikipedia.org/wiki/Table_de_v%C3%A9rit%C3%A9

if (age >= 20 && age <= 30) {
  //Opérateur logique "ET"
  document.write("<p>Vous avez entre 20 et 30 ans !.</p>");
}

if (prenom == "Lionel" || prenom == "Jérôme" || prenom == "Kelwin") {
  //opérateur logique "OU"
  document.write("<p>Vous êtes invité.</p>");
} else {
  document.write("<p>Vous n'êtes pas invité !.</p>");
}

//EXEMPLE DE DEUX CODES QUI FONT LA MEME CHOSE
//On peut tester que le prénom est Lionel ET que l'âge est différent de 40 ans

// Première version
if (prenom == "Lionel") {
  if (age != 40) {
    document.write(
      "<p>Vous vous appelez Lionel et vous n'avez pas 40 ans.</p>"
    );
  }
}

// Seconde version
if (prenom == "Lionel" && age != 40) {
  document.write(
    "<p>Vous vous appelez Lionel et vous n'avez pas 40 ans.(seconde version).</p>"
  );
}

//SYNTAXE SWITCH
//On l'utilise à la place d'une structure if else if else

switch (prenom) {
  case "Jérôme":
    document.write("<p>Bonjour Jérôme !. (cas switch)</p>");
    break;
  case "Kelwin":
    document.write("<p>Bonjour Kelwin !. (cas switch)</p>");
    break;
  case "Lionel":
    document.write("<p>Bonjour Lionel !. (cas switch)</p>");
    break;

  default:
    document.write("<p>Je ne connais pas votre prénom ! (cas switch)</p>");
    break;
}
