$(function () { // DOM ready
    $('#book').submit(function(event){
        event.preventDefault();
        $.post(
            'insert.php',
            $(this).serialize(),
            function (response) {
                $('#check').html(response.message);
                if (response.statut == 'ok') {
                    $('#check').removeClass('red').addClass('green');
                } else {
                    $('#check').removeClass('green').addClass('red');
                }
            },
            'json'
        );
    });
});
