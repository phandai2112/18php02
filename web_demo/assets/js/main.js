$(document).ready(function() {
	$('#main-menu ul li').click(function(event) {
		$('#main-menu ul li').removeClass('active');
		$(this).addClass('active');
	});
	// scroll main-menu
	// $(window).scroll(function(event) {
	// 	var x = $(this).scrollTop();
	// 	if (x >= 145) {
	// 	$('#main-bar').addClass('fix-menu');	
	// } else {
	// 	$('#main-bar').removeClass('fix-menu');
	// }
	// });
	/// Tabs list-menu
	// $('#list-menu li').click(function(event) {
	// 	var x = $(this).index();
	// 	$('#list-menu li').removeClass('show-tabs');
	// 	$(this).addClass('show-tabs');
	// 	var x = x + 1;
	// 	$('#item-menu li.item').removeClass('show-item');
	// 	$('#item-menu li:nth-child('+x+')').addClass('show-item');
	// });
	// show mega-menu
	$('li#mega-menu').click(function(event) {
		$('#sub-menu').toggleClass('mega-show');

	});
	
});