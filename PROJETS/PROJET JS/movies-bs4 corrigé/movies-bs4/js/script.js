/*
	* AU CHARGEMENT DE LA PAGE ON AFFICHE LA LISTE DES FILMS DEPUIS Le ARRAY movies (dans js/data.js)
*/
// Selection de la liste des films
var list = $('.list');

// On cache la div.details au chargement de la page
$('div.details').hide();
// On affiche le nombre de films
$('.supertitle span').text(movies.length)

// On génère les items des films dans la div.list
for(var i=0; i < movies.length; i++) {
	list.append(`
			<div data-index="${i}" class="col-12 col-md-4 mb-5 item text-center py-2 px-4">

				<div class="card">
			  		<img class="card-img-top" src="${movies[i].image}" alt="Card image cap">
					  <div class="card-body">
					    <h2 class="card-title">${movies[i].title}</h2>
					    <p class="card-text">${movies[i].director}</p>
					   
					  </div>
				</div>

			</div>
		`)
}





/*
	* fonction showDetails
	* role : afficher le detail d'un film
*/
function showDetails() {

	// console.log( $(this).data('index') );

	// On récupère l'index du film qui a été cliqué
	var index = $(this).data('index'); 

	// On vide la balise p.actors
	$('p.actors').empty();
	$('p.error').empty();
	$('.video').empty();

	// On remplace affiche les données du film qui a été cliqué
	$('img.img-detail').attr('src', movies[index].image);
 	$('h1.title').text(movies[index].title);
	$('p.resume').text(movies[index].resume);
	$('p.genre').text(movies[index].genre);

	// On affiche également la liste des acteurs (movies[i].actors est un array)
	for(var i=0; i<movies[index].actors.length; i++) {
		$('p.actors').append("<span>"+movies[index].actors[i]+"</span>")
	}
	// on ajoute des class bootstrap4 pour afficher correctement la liste des acteurs
	var firstActorSpan = $('p.actors span').first();
	firstActorSpan.addClass('pr-2');
	$('p.actors span').not(firstActorSpan).addClass('px-2');


	/*
	 * Objectif : afficher la date au format JJ/MM/YYYY
	*/
	var date = new Date(movies[index].date);
	var jourSortie = date.getDate()<10?"0"+date.getDate():date.getDate();
	var moisSortie = date.getMonth()<10?"0"+date.getMonth():moisSortie;
	var anneeSortie = date.getFullYear();
	$('p.date').text("Le " + jourSortie + "/" + moisSortie + "/" + date.getFullYear());


	/*
	 * Objectif : afficher la durée sous le format chaîne de caractère "2h09mn"
	 * On s'est créé une fonction utilitaire dans utilities.js 
	 * getDurationInHoursMinutes() prend en param. un nombre de minutes et renvoie une string sous la forme "2h09mn"
	*/
	$('p.duration').text( getDurationInHoursMinutes(movies[index].duration) );
	


	/*
	 * Objectif : On créé l'élément iframe de la video Youtube avec createElement
	 * On modifie l'atttibut src pour lui donner comme valeur l'url de la video youtube
	 * On injecte l'élément créé dans la div.video de notre template HTML (grâce à .appenChild())
	*/
	var video = document.createElement('iframe');
	video.setAttribute('position', 'relative');
	video.setAttribute('width', '97%');
	video.setAttribute('height', '450');
	video.setAttribute('frameborder', '0');
	video.setAttribute('allowfullscreen', 'true');
	video.setAttribute('src', movies[index].traileryt + '?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1');
	document.querySelector('.video').appendChild(video);

	$('.supertitle').hide();
	$('div.details').slideDown();
	$('div.list').slideUp();
	 $("html, body").animate({ scrollTop: 0 }, "slow");

} // FIN function showDetails





/*
	* fonction hideDetails
	* role : afficher la liste des films et cacher le détail
*/
function hideDetails() {
	$('.supertitle').show();
	$('div.details').slideUp();
	$('div.list').fadeIn();
	$("html, body").animate({ scrollTop: 0 }, "slow");
}















// Les écouteurs d'evenement
$('.item').on('click', showDetails);
$('.back').on('click', hideDetails);




/* ********************  Gestion du formulaire ************ */

/*
 * Objectif: gérér la soumission ET les erreurs du formulaire
 * Comment: - Au clic de l'utilisateur sur le bouton submit, nous récupérons les valeurs des champs input et textarea grâce à .val() (en jQuery)
 * 			- Puis on fait les vérifications avec des conditions
 *			- Si l'utilisateur a rentré un prénom avec au moins 2 caractères ET si son commentaire fait maximum 100 caractères,
 			  alors on affiche un message de succès :"Votre commentaire a bien été envoyé"
 			- Sinon on affiche les erreurs sous chacun des champs	
*/

// On détecte l'évènement de soumission du formulaire
$('form').on('submit', function(event) {

	// 1 IMPORTANT : on coupe le comportement par défaut avec e.preventDefault()
	event.preventDefault();

	// 2 On efface tout de suite les paragraphe qui affiche les erreurs
	$('p.error').empty();

	// 3 On définit les variables des champs ET un objet errors (au début il est vide)
	// On chargera les propriétés firstname et comment SI des erreurs surviennent
	var inputElt = $('input[name="firstname"]');
	var textareaElt = $('textarea[name="comment"]');
	var errors = {};

    // 4 On récupère les valeurs de chaque entrée du formulaire avec .val()
    var firstname = inputElt.val();
    var comment = 	textareaElt.val();
    console.log(firstname, comment);

    /*
     * 5 ON VERIFIE LES ERREURS
    */

    // 5.1 On teste le champ prénom fait moins de 2 caractères :
    // - Si oui, on charge la propriété firstname dans l'objet errors
    // - Sinon, on détruit la propriété firstname de l'objet errors
    if(firstname.length<2) {
    	errors.firstname = "Le prénom doit faire au moins 2 caractères";
    }
    else {
    	delete errors.firstname;
    }
    // 5.2 On teste si le champ comment fait moins de 10 car. ou plus de 100 car.
    // - Si oui, on charge la propriété comment dans l'objet errors
    // - Sinon, on détruit la propriété comment dans l'objet errors
    if(comment.length<10 || comment.length>100) {
    	errors.comment = "Votre commentaire doit être compris entre 10 et 100 caractères";
    }
    else {
    	delete errors.comment;
    }
    console.log(errors);


    // 6 Pour finir, si l'objet n'a pas les propriétés firstname ou comment, c'est qu'il n'y a pas d'erreur
    if(errors.hasOwnProperty('firstname') == false && errors.hasOwnProperty('comment') == false){

    	$('h3.message').text('Votre commentaire a bien été envoyé. Cool!');
    	$('h3.message').addClass('success').removeClass('error');
    	window.setTimeout(function() {
    		$('h3.message').fadeOut()
    	}, 2000);
    	// On vide les champs du formulaire avec .reset()
    	document.querySelector('form').reset();
    }
    else {
    	// On affiche un message général "Merci de corriger vos erreur" au dessus du formulaire
    	$('h3.message').text('Merci de corriger vos erreurs');
    	$('h3.message').addClass('error').removeClass('success');

    	if(errors.hasOwnProperty('firstname') == true) {
    		inputElt.next().text(errors.firstname);
    	}

    	if(errors.hasOwnProperty('comment') == true) {
    		textareaElt.next().text(errors.comment);
    	}
    		
    }

}); // FIN FONCTION ON SUBMIT EVENT