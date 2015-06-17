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