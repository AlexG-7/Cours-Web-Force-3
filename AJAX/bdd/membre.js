/*
 *
 * quand on sélectionne un membre dans la liste déroulante
 *  - on fait un appel ajax vers membre.php en lui passant l'id_membre en GET
 *  - membre.php retourne les informations détaillées du membre en HTML
 *  - afficher le détail dans la div#detail
 * 
 */

// JS Vanilla [broken because modif dans index.php et membre.php]
// document.getElementById('membre').
//     addEventListener('change', function(event) {

//         // instanciation de l'objet
//         var xhttp = new XMLHttpRequest();

//         var id_membre = document.getElementById('membre').value;

//         // on définit ce qui va être fait après l'appel ajax
//         xhttp.onreadystatechange = function () {
//             if (xhttp.readyState === 4 && xhttp.status === 200) {
//                 document.getElementById('detail').innerHTML = xhttp.responseText;
//             }
//         };

//         // appel en HTTP POST du fichier membre.php
//         xhttp.open('GET', 'membre.php?id=' + id_membre);


//         // on passe la query string au moment de l'envoi
//         xhttp.send();
    
// });

// jQuery
$(function(){
    $('#membre').change(function(){
        // value de l'option sélectionnée
        var id_membre = $(this).val();

        // appel ajax seulement si value n'est pas vide
        if (id_membre != '') {
            $.get(
                'membre.php',
                'id=' + id_membre,
                function (response) {
                    $('#detail').html(response);
                }
            );
        } else {
            $('#detail').html('');
        }
    });
});