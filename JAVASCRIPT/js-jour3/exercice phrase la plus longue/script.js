// /exercice-phrase-la-plus-longue
//                  > index.html

// ## Enoncé

// Rechercher et afficher en HTML la chaîne ayant le plus grand nombre de caractères dans le tableau de phrases.

// ## Remarques

// * Le programme doit etre dynamique : le tableau peut s'aggrandir ou diminuer sans qu'il y ait besoin de modifier le code.
// * Les tableaux comme les chaînes de caractères sont des objets et disposent chacun d'une propriété nécessaire pour le programme.
// * Construire par étapes le programme : faire une boucle pour l'algorithme qui doit retrouver l'index de la phrase la plus longue, puis une boucle qui affiche la longueur de chaque phrase, etc.
// * A la fin il faut afficher la phrase la plus longue elle-même ainsi que sa longueur.

// <script>

// var phrases =
// [
//     "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
//     "Aenean commodo ligula eget dolor. Aenean massa.",
//     "Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.",
//     "Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.",
//     "Nulla consequat massa quis enim.",
//     "Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.",
//     "In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.",
//     "Nullam dictum felis eu pede mollis pretium.",
//     "Integer tincidunt. Cras dapibus.",
//     "Vivamus elementum semper nisi.",
//     "Aenean vulputate eleifend tellus.",
//     "Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.",
//     "Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.",
//     "Phasellus viverra nulla ut metus varius laoreet.",
//     "Quisque rutrum. Aenean imperdiet.",
//     "Etiam ultricies nisi vel augue.",
//     "Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.",
//     "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
//     "Aenean commodo ligula eget dolor. Aenean massa.",
//     "Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.",
//     "Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.",
//     "Nulla consequat massa quis enim.",
//     "Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.",
//     "In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.",
//     "Nullam dictum felis eu pede mollis pretium.",
//     "Integer tincidunt. Cras dapibus.",
//     "Vivamus elementum semper nisi.",
//     "Aenean vulputate eleifend tellus.",
//     "Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.",
//     "Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.",
//     "Phasellus viverra nulla ut metus varius laoreet.",
//     "Quisque rutrum. Aenean imperdiet.",
//     "Etiam ultricies nisi vel augue.",
//     "Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.",
//     "Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit ipsuminus max.",
//     "Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.",
//     "Maecenas nec odio et ante tincidunt tempus.",
//     "Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.",
//     "Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.",
//     "Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.",
//     "Sed consequat, leo eget bibendum sodales, augue velit cursus nunc."
// ];
/////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////

var phrases = [
  "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
  "Aenean commodo ligula eget dolor. Aenean massa.",
  "Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.",
  "Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.",
  "Nulla consequat massa quis enim.",
  "Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.",
  "In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.",
  "Nullam dictum felis eu pede mollis pretium.",
  "Integer tincidunt. Cras dapibus.",
  "Vivamus elementum semper nisi.",
  "Aenean vulputate eleifend tellus.",
  "Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.",
  "Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.",
  "Phasellus viverra nulla ut metus varius laoreet.",
  "Quisque rutrum. Aenean imperdiet.",
  "Etiam ultricies nisi vel augue.",
  "Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.",
  "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.",
  "Aenean commodo ligula eget dolor. Aenean massa.",
  "Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.",
  "Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.",
  "Nulla consequat massa quis enim.",
  "Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.",
  "In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.",
  "Nullam dictum felis eu pede mollis pretium.",
  "Integer tincidunt. Cras dapibus.",
  "Vivamus elementum semper nisi.",
  "Aenean vulputate eleifend tellus.",
  "Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.",
  "Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.",
  "Phasellus viverra nulla ut metus varius laoreet.",
  "Quisque rutrum. Aenean imperdiet.",
  "Etiam ultricies nisi vel augue.",
  "Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus.",
  "Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit ipsuminus max.",
  "Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.",
  "Maecenas nec odio et ante tincidunt tempus.",
  "Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.",
  "Etiam sit amet orci eget eros faucibus tincidunt. Duis leo.",
  "Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.",
  "Sed consequat, leo eget bibendum sodales, augue velit cursus nunc."
];

var indexPhraseLaPlusLongue = 0;

for (var index = 0; index < phrases.length; index = index + 1) {
  if (phrases[index].length > phrases[indexPhraseLaPlusLongue].length) {
    indexPhraseLaPlusLongue = index;
  }
}

document.write("<p>La phrase la plus longue est: " + phrases[indexPhraseLaPlusLongue] + "</p>")
document.write("<p>Elle fait :" + phrases[indexPhraseLaPlusLongue].length + " caractères.</p>");