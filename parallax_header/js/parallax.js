$( document ).ready(function() {

(function($) {
	 $.fn.parallax = function(options) {
 
        var windowHeight = $(window).height();
 
        // Establish default settings
        var settings = $.extend({
            speed        : 0.15
        }, options);
 
        // Iterate over each object in collection
        return this.each( function() {
 
        	// Save a reference to the element
        	var $this = $(this);
 
        	// Set up Scroll Handler
        	$(document).scroll(function(){
 
    		        var scrollTop = $(window).scrollTop();
            	        var offset = $this.offset().top;
            	        var height = $this.outerHeight();
 
    		// Check if above or below viewport
			if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
				return;
			}
 
			var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
 
                 // Apply the Y Background Position to Set the Parallax Effect
    			$this.css('background-position', 'center ' + yBgPosition + 'px');
                
        	});
        });
    };
  
  
  $(window).scroll(function(){
    $(".top").css("opacity", 1 - $(window).scrollTop() / 750);
    $(".fadey").css("opacity", 1 - $(window).scrollTop() / 1500);
    $(".move-down").css("margin-top", 0 + $(window).scrollTop() * 1 + 'px');
  });
  
}(jQuery));


$('.bg-up-1').parallax({
	speed :	0.1
});

$('.bg-up-2').parallax({
	speed :	0.2
});

$('.bg-up-3').parallax({
	speed :	0.3
});

$('.bg-up-4').parallax({
	speed :	0.4
});

$('.bg-up-5').parallax({
	speed :	0.5
});

$('.bg-down-1').parallax({
	speed :	-0.1
});

$('.bg-down-2').parallax({
	speed :	-0.2
});

$('.bg-down-3').parallax({
	speed :	-0.3
});

$('.bg-down-4').parallax({
	speed :	-0.4
});

$('.bg-down-5').parallax({
	speed :	-0.5
}); 
	 
	 });