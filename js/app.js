/*
 * EDITABLE
 * 
 * Allow user to edit "Portfolio Title" and "Description" inline.
 * Toggle the editable state by clicking the "Edit" button.
 * 
 * @requires x-editable
 */
$(function() {
	console.log(php.portfolio_token);
	$('.editable').editable({
		url: '/twitto.php?c=portfolio',
		mode: 'inline',
		pk: php.portfolio_token
	});

	// enable/disable
	$('#enable').click(function() {
	    $('.editable').editable('toggleDisabled');
	});
});


/*
 * SORTABLE
 * 
 * Allow user to sort "Gallery" images by dragging and dropping
 * 
 * @requires jquery-ui
 */
$(function() {

	// prevent default image drag
	$(".sortable").disableSelection();

	// make ul sortable
	$('.sortable').sortable({

		// when something changes
		update: function(event, ui) {

			// send new order to controller
			$.ajax({
				url: '/twitto.php?c=reorder',
				type: 'POST',
				data: {
					order: $(this).sortable('toArray'),
					portfolio_token: php.portfolio_token
				},
				success: function(response) {
					console.log(response);
				}
			})
		}
	});

});

/**
 * REFRESH
 * 
 * Allow user to refresh the gallery by clicking the "Refresh" button
 * Show uploaded photos and remove deleted ones.
 * Sort order should be consistent
 *
 * @requires jquery
 */
$(function() {
	$('#refresh_gallery').click(function() {
		$.ajax({
			method: "GET",
			url: "/twitto.php?c=refresh&portfolio_token=" + php.portfolio_token,
			success: function(response) {
				
				// FIXME use .replace() instead?
				$('#gallery').append(response);
			}
		})
	})
})