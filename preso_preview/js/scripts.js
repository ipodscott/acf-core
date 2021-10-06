$( document ).ready(function() {
	$( ".preso-link" ).click(function() {
		$('body').addClass('stop-scroll');
		$('.presoFrame').attr("src", $(this).attr("presoUrl"));
		$('.preso-loader').fadeIn(500);
	});
	
	$( ".close-preso" ).click(function() {
		$('body').removeClass('stop-scroll');
		$('.preso-loader').fadeOut(500);
	});
});

 window.document.onkeydown = function (e)
 	{
	 	if (!e) e = event;
	 	if (e.keyCode == 27)
	 	{
	 		$('body').removeClass('stop-scroll');
	 		$('.preso-loader').fadeOut(500);
	 	}
 	};