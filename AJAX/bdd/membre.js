/*
Quand on selectionne un membre dans la liste déroulante
on fait un appel ajax vers membre.php en lui passant l'id du membre en GET.
membre.php retourne les informations détaillées du membre en HTML.
Afficher le détail dans la div#detail
*/
$(function(){
	$('#membre').change(function () {
		// la value de l'option selectionnée
		var id = $(this).val();

		// si on n'est pas sur la 1ère option (choisissez...)
		if (id != '') {
			// appel ajax en GET vers membre.php
			// en lui passant l'id venant du select
			$.get(
				'membre.php',
				'id=' + id,
				function (response) {
					// on remplit la div#detail avec le retour de membre.php
					$('#detail').html(response);
				}
			);
		} else {
			$('#detail').html('');
		}
	});
});