var age;
var aTrenteAns;
var estMajeur;
var estPasCentenaire;

age = window.prompt("Quel âge avez-vous ?");

aTrenteAns = age == 30; //retourne TRUE ou FALSE
estMajeur = age >= 18; //retourne TRUE ou FALSE
estPasCentenaire = age < 100; //retourne TRUE ou FALSE

document.write("<p>Vous avez trente ans: " + aTrenteAns + ".</p>");
document.write("<p>Vous êtes majeur: " + estMajeur + ".</p>");
document.write("<p>Vous n'êtes pas centenaire: " + estPasCentenaire + ".</p>");
