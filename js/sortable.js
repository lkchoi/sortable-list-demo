$(function() {

	// prevent default image drag
	$(".sortable").disableSelection(); // deprecated in jquery-1.9

	// make ul sortable
	$('.sortable').sortable({

		// when something changes
		update: function(event, ui) {

			// send new order to controller
			$.ajax({
				url: '/twitto.php?c=reorder',
				type: 'POST',
				data: {
					order: $(this).sortable('toArray')
				},
				success: function(response) {
					console.log(response);
				}
			})
		}
	});

});
