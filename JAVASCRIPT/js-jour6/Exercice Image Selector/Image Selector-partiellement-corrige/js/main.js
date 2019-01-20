'use strict';   // Mode strict du JavaScript

/***********************************************************************************/
/* *********************************** DONNEES *************************************/
/***********************************************************************************/

var index;
var photos;
var total;



/***********************************************************************************/
/* ********************************** FONCTIONS ************************************/
/***********************************************************************************/

function onClickListItem()
{
	console.log(this.classList);
    var selectedPhotos;

    /*
     * Dans un gestionnaire d'évènements (et uniquement dans ce cas-là) la variable
     * this représente l'objet DOM qui a déclenché l'évènement.
     *
     * Il s'agit donc de la balise <li> sur laquelle on a cliqué.
     *
     *
     * On active ou on désactive la classe selected du <li> sur lequel on a cliqué.
     */
    console.log(this);
    this.classList.toggle('selected');

}




/************************************************************************************/
/* ******************************** CODE PRINCIPAL **********************************/
/************************************************************************************/

/*
 * Recherche de toutes les balises <li> (les photos)
 * et de la balise <em> (nombre total).
 */
photos = document.querySelectorAll('#photo-list li');
total  = document.querySelector('#total em');


// Installation d'un gestionnaire d'évènement clic sur toutes les balises <li>.
for(index = 0; index < photos.length; index++)
{
    photos[index].addEventListener('click', onClickListItem);
}