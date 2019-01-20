// ## Enoncé

// L'utilisateur choisit dans un prompt du navigateur pierre, feuille ou ciseau, l'ordinateur choisit aléatoirement l'une des trois possibilités, et la partie commence !

// ## Remarques

// * On doit pouvoir indifféremment saisir le mot en minuscules comme en majuscules.
// * Le ciseau est écrasé par la pierre.
// * La feuille est découpée par le ciseau.
// * La pierre est enveloppée par la feuille.
// * Si le joueur et l'ordinateur font le même choix on obtient une égalité.

var choixJoueur;
var choixOrdi;
var random = Math.random();

choixJoueur = window.prompt("Choisissez : pierre, feuille, ciseaux");

switch (choixJoueur) {
  case "pierre":
    document.write("<p>Vous avez choisi " + choixJoueur + " !</p>");
    break;
  case "feuille":
    document.write("<p>Vous avez choisi " + choixJoueur + " !</p>");
    break;
  case "ciseaux":
    document.write("<p>Vous avez choisi " + choixJoueur + " !</p>");
    break;

  default:
    document.write("<p>Choisissez Pierre, Feuille, Ciseaux SVP</p>");
    break;
}

if (random < 0.33) {
  choixOrdi = document.write("<p>L'ordinateur a choisi pierre !</p>");
  choixOrdi = "pierre";
} else if (random < 0.66) {
  choixOrdi = document.write("<p>L'ordinateur a choisi feuille !</p>");
  choixOrdi = "feuille";
} else {
  choixOrdi = document.write("<p>L'ordinateur a choisi ciseaux !</p>");
  choixOrdi = "ciseaux";
}

if (choixOrdi == "pierre" && choixJoueur == "feuille") {
  document.write("<p>Vous avez gagné ! </p>");
  document.write(
    '<iframe src="https://giphy.com/embed/xUOwGnQcMLWs3dwCB2" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/nrkp3-nrk-p3-xUOwGnQcMLWs3dwCB2"></a></p>'
  );
} else if (choixOrdi == "pierre" && choixJoueur == "ciseaux") {
  document.write("<p>Vous avez perdu ! </p>");
  document.write(
    '<iframe src="https://giphy.com/embed/xThta88dkKpA034bhC" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/nrkp3-nrk-p3-xThta88dkKpA034bhC"></a></p>'
  );
} else if (choixOrdi == "feuille" && choixJoueur == "pierre") {
  document.write("<p>Vous avez perdu ! </p>");
  document.write(
    '<iframe src="https://giphy.com/embed/xThta88dkKpA034bhC" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/nrkp3-nrk-p3-xThta88dkKpA034bhC"></a></p>'
  );
} else if (choixOrdi == "feuille" && choixJoueur == "ciseaux") {
  document.write("<p>Vous avez gagné ! </p>");
  document.write(
    '<iframe src="https://giphy.com/embed/xUOwGnQcMLWs3dwCB2" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/nrkp3-nrk-p3-xUOwGnQcMLWs3dwCB2"></a></p>'
  );
} else if (choixOrdi == "ciseaux" && choixJoueur == "pierre") {
  document.write("<p>Vous avez gagné ! </p>");
  document.write(
    '<iframe src="https://giphy.com/embed/xUOwGnQcMLWs3dwCB2" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/nrkp3-nrk-p3-xUOwGnQcMLWs3dwCB2"></a></p>'
  );
} else if (choixOrdi == "ciseaux" && choixJoueur == "feuille") {
  document.write("<p>Vous avez perdu ! </p>");
  document.write(
    '<iframe src="https://giphy.com/embed/xThta88dkKpA034bhC" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/nrkp3-nrk-p3-xThta88dkKpA034bhC"></a></p>'
  );
} else if (choixOrdi == choixJoueur) {
  document.write("<p>DRAW ! </p>");
  document.write(
    '<iframe src="https://giphy.com/embed/l4pSZqr1hPoQx2tva" width="480" height="360" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/nrkp3-nrk-p3-l4pSZqr1hPoQx2tva"></a></p>'
  );
} else {
}
