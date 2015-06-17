$(function() {
	$('#refresh_gallery').click(function() {
		$.ajax({
			method: "GET",
			url: "/twitto.php?c=refresh",
			success: function(response) {
				console.log(response);
				$('#gallery').append(response);
				// FIXME re-bind sortable?
			}
		})
	})
})