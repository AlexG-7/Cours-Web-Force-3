//1 On demande un premier nombre à l'utilisateur
//2 On demande un deuxième nombre à l'utilisateur
//3 On lui affiche la phrase sous la forme suivante
//Le résultat de l'addition est 212

var nombre1;
var nombre2;
var resultat;

nombre1 = window.prompt("Saisissez un premier nombre");
nombre2 = window.prompt("Saisissez un second nombre");
console.log(nombre1);

//Je transforme la valeur du nombre1 et nombre2 en valeurs de type Integer(nombre entier)
nombre1 = parseInt(nombre1);
nombre2 = parseInt(nombre2);
console.log(nombre1);

//On calcule
resultat = nombre1 + nombre2;
//On a un problème car on a une concaténation de nombre1 er nombre2 si on ne met pas la fonction parseInt

//Afficher une phrase dans la page
document.write("Le résultat de l'addition est : " + resultat);

//Afficher une phrase au format
window.alert("Le résultat de l'addition est : " + resultat);