$(function(){
	$('#livre').submit(function(event) {
		event.preventDefault();

		$.post(
			'livre.php',
			$(this).serialize(),
			function (response) {
				var color = (response.statut == 'ok')
					? 'green'
					: 'red'
				;

				$('#message').html(
					'<span style="color:' + color + '">' 
					+ response.message 
					+ '</span>'
				);
			},
			'json'
		);
	});
});