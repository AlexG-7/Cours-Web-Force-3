/*
 *
 * - Ajouter un bouton "voir détail" dans le tableau des commandes
 * - Au clic, faire un appel ajax vers une page qui renvoi le détail de la commande sous forme de tableau HTML
 * - Et le faire apparaître sous le tableau des commandes
 *      + afficher le nom du produit plutôt que l'ID
 * 
 */


$(function(){ // DOM ready (= la page a été chargée)
    $('.see').click(function(event) {
        
        var id = $(this).data('id');

        $.get(
            '../admin/detail_commande.php', // fichier appelé
            'id='+id, // données envoyées
            function(response) { // success
                $('#detail').html(response);
            }
        );
    });

    $('.maj').click(function(event) {
        
        var id = $(this).data('id');

        $.get(
            '../admin/maj.php', // fichier appelé
            'id='+id, // données envoyées
            function(response) { // success
                if (response.status == 'ok') {
                    alert(response.etat);
                    $('#etat-commande-'+id).html(response.etat);
                    if (response.etat == 'livré') {
                        $(".maj[data-id='"+id+"']").prop("disabled",true);
                    }
                }
            },
            'json'
        );
    });

    $('#detail').on('click', '.product', function(event){
        var id = $(this).data('id');
        $.get(
            '../admin/detail-produit.php', // fichier appelé
            'id='+id, // données envoyées
            function(response) { // success
                var $modal = $('#myModal');
                $('#desc-prod', $modal).html(response.desc_prod);
                $('#cat-prod', $modal).html(response.cat_prod);
                $('#col-prod', $modal).html(response.col_prod);
                $('#taille-prod', $modal).html(response.taille_prod);
                $('#nom-produit', $modal).html(response.nom_produit);
                $('#prix-prod', $modal).html(response.prix_prod);
                $('#img-prod', $modal).attr('src', response.photo);
            },
            'json'
        );

        $('#myModal').modal('show');
    });
});