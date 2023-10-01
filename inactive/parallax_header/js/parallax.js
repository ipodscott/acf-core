jQuery( document ).ready(function() {

(function(jQuery) {
	 jQuery.fn.parallax = function(options) {
 
        var windowHeight = jQuery(window).height();
 
        // Establish default settings
        var settings = jQuery.extend({
            speed        : 0.15
        }, options);
 
        // Iterate over each object in collection
        return this.each( function() {
 
        	// Save a reference to the element
        	var jQuerythis = jQuery(this);
 
        	// Set up Scroll Handler
        	jQuery(document).scroll(function(){
 
    		        var scrollTop = jQuery(window).scrollTop();
            	        var offset = jQuerythis.offset().top;
            	        var height = jQuerythis.outerHeight();
 
    		// Check if above or below viewport
			if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
				return;
			}
 
			var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
 
                 // Apply the Y Background Position to Set the Parallax Effect
    			jQuerythis.css('background-position', 'center ' + yBgPosition + 'px');
                
        	});
        });
    };
  
  
  jQuery(window).scroll(function(){
    jQuery(".top").css("opacity", 1 - jQuery(window).scrollTop() / 750);
    jQuery(".fadey").css("opacity", 1 - jQuery(window).scrollTop() / 1500);
    jQuery(".move-down").css("margin-top", 0 + jQuery(window).scrollTop() * 1 + 'px');
  });
  
}(jQuery));


jQuery('.bg-up-1').parallax({
	speed :	0.1
});

jQuery('.bg-up-2').parallax({
	speed :	0.2
});

jQuery('.bg-up-3').parallax({
	speed :	0.3
});

jQuery('.bg-up-4').parallax({
	speed :	0.4
});

jQuery('.bg-up-5').parallax({
	speed :	0.5
});

jQuery('.bg-down-1').parallax({
	speed :	-0.1
});

jQuery('.bg-down-2').parallax({
	speed :	-0.2
});

jQuery('.bg-down-3').parallax({
	speed :	-0.3
});

jQuery('.bg-down-4').parallax({
	speed :	-0.4
});

jQuery('.bg-down-5').parallax({
	speed :	-0.5
}); 
	 
	 });