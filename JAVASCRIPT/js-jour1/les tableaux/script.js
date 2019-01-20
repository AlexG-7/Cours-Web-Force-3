var jours = [
  "Lundi",
  "Mardi",
  "Mercredi",
  "Jeudi",
  "Vendredi",
  "Samedi",
  "Dimanche"
];

//Afficher la phrase:
//Le premier jour de la semaine est le Lundi
//Le dernier jour de la semaine est Dimanche

document.write("<p>Le premier jour de la semaine est le " + jours[0] + ".</p>");
document.write("<p>Le dernier jour de la semaine est le " + jours[6] + ".</p>");

// ## Enoncé

// Afficher dynamiquement la date d'aujourd'hui en HTML sous la forme
// Nous sommes le Mardi 20 Novembre 2018.

// ## Ressources

// * [Classe Date dans DevDocs.io](http://devdocs.io/javascript/global_objects/date)
// * https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Date

// ## Remarques

// * Il va falloir se servir de tableaux pour afficher les noms des jours de la semaine et des mois...
// * Bien lire la documentation sur les différentes méthodes et en particulier les valeurs renvoyées

// * Pour utiliser les méthodes d'un objet de type "Date", il faut créer l'objet
// new Date()

// * Utiliser les méthodes
// .getDate() 	// retourne numéro du jour (20)
// .getDay() 	// retourne un index du jour de 0 à 6
// .getMonth() // retourne un index du mois de 0 à 11
// .getFullYear() // retourne l'année (2018)

var mois = [
  "Janvier",
  "Février",
  "Mars",
  "Avril",
  "Mai",
  "Juin",
  "Juillet",
  "Août",
  "Septembre",
  "Octobre",
  "Novembre",
  "Décembre"
];

var date = new Date();

//Nous sommes le Mardi 20 Novembre 2018
document.write(
  "<p>Nous sommes le " +
  jours[date.getDay() - 1] +
  " " +
  date.getDate() +
  " " +
  mois[date.getMonth()] +
  " " +
  date.getFullYear() +
  ".</p>"
);
document.write(
  "<p>Il est exactement " +
  date.getHours() +
  " h " +
  date.getMinutes() +
  " min " +
  date.getSeconds() +
  " sec " +
  date.getMilliseconds() +
  " msec.</p>"
);
