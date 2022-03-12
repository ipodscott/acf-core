$( document ).ready(function() {
	$( ".preso-link" ).click(function() {
		$('body').addClass('stop-scroll');
		$('.vidFrame').attr("src", $(this).attr("presoUrl"));
		$('.myVideo').attr("src", "empty");
		$('.myVideo').hide();
		$('.vidFrame').show();
	});
	
	$( ".close" ).click(function() {
		$('body').removeClass('stop-scroll');
	});
});