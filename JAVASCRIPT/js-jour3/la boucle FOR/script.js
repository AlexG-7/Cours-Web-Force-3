// Une boucle sert à répéter du code

// Fonctionnement

// LE BUT ici pour l'explication
// Répéter la phrase :
// Le compteur vaut 0
// Le compteur vaut 1
// Le compteur vaut 2
// etc....

for (var compteur = 0; compteur <= 10; compteur = compteur + 1) {
  document.write("<p>Le compteur vaut " + compteur + ".</p>");
}

for (var compteur = 10; compteur >= 0; compteur = compteur - 1) {
  document.write("<p>Le compteur vaut " + compteur + ".</p>");
}

//Autre exemple

var prenom = ["Pierre", "Paul", "Jacques", "Mahmoud", "Huang", "Jean michel"];

for (var index = 0; index < prenom.length; index = index + 1) {
  document.write("<li>" + prenom[index] + "</li>");
}
