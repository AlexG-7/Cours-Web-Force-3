// jQuery

// *construire un menu dropDown

// #indications
//  > Utiliser la sélection et l'écouteur d'Evt jQuery
//  > Utiliser les méthodes d'apparition et de disparition appropriée ( elt.hide() et elt.show() )
//  > Utiliser l'objet event et sa propriété target si besoin
//  > pour tester si un élément est masqué ou non:
//    -> Utiliser la méthode elt.is() de jQuery avec les pseudo-class CSS :visible et :hidden
//   (voir : http://api.jquery.com/is/)

//  Différence entre :
//  $(this)
//  e.target
//  e.currentTarget

// # Enoncé
// Réaliser un menu dropDown

// #Indications
// HTML
// Créer un titre H1 "Réalisation d'un menu dropDown simple en jQuery"
// Créer un bouton avec
//  -> l'id dropdown-btn
//  -> l'intitulé cliquez ici!

// Créer une liste ul avec
//  -> l'id dropdown-list
//  -> 3 li	<li>item1</li>
//  			<li>item2</li>
//         	<li>item3</li>
// #CSS
// Au chargement de la page, la liste ul est masquée

// #Interactions
//  -> au clic sur le bouton la liste apparaît, et disparaît au 2nd clic
//  -> au clic en dehors du bouton, la liste disparâit SI elle est visible

function showOrHideList() {
  if ($("#dropdown-list").is(":hidden")) {
    // $("#dropdown-list").show();
    $("#dropdown-list").fadeIn();
  } else {
    // $("#dropdown-list").hide();
    $("#dropdown-list").fadeOut();
  }
}

function hideDropDown(event) {
  console.log(event.target);
  if ($(event.target).attr("id") != "dropdown-btn" ) {
    $("#dropdown-list").hide();
  }

  // 2eme façon de le faire
        
//   if(! $(event.target).is("#dropdow-btn") )

}

$("#dropdown-btn").on("click", showOrHideList);
$(document).on("click", hideDropDown);
