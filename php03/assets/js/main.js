$(document).ready(function() {
	$('#register').click(function(event) {
		/* Act on the event */
		$('.box-register').addClass('active');
		$('.box-login').addClass('hide');
	});
	$('#login').click(function(event) {
		/* Act on the event */
		$('.box-register').removeClass('active');
		$('.box-login').removeClass('hide');
	});




});