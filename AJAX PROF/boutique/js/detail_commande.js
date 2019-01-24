/*
- ajouter un bouton 'voir détail' dans le tableau des commandes
- au clic, faire un appel ajax vers une page qui renvoi
  le détail de la commande sous forme de tableau HTML
  et le faire apparaître sous le tableau des commandes
*/
$(function () {
	$('.btn-detail').click(function () {
		$.get(
			'../ajax/detail_commande.php',
			'id=' + $(this).data('id'),
			function (response) {
				$('#detail').html(response);
			}
		);
	});

	$('#detail').on('click', '.btn-produit', function(){
		$.get(
			'../ajax/detail_produit.php',
			'id=' + $(this).data('id'),
			function (response) {
				var $modal = $('#modal-produit');
				// l'élément qui a la classe modal-body
				// à l'intérieur de la modale
				$('.modal-body', $modal).html(response);
				$modal.modal('show');
			}
		);
	});

	$('.btn-etat').click(function () {

		var $this = $(this);
		$.post(
			'../ajax/maj_etat.php',
			'id=' + $(this).data('id'),
			function (response) {
				// maj de l'état dans le tableau HTML
				$this.closest('tr').find('.td-etat').html(response);

				// suppression du bouton MAJ si l est livré
				if (response == 'Livré') {
					$this.remove();
				}
			}
		);
	});
});