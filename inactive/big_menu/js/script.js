jQuery(".big-menu-btn").click(function() {
        jQuery(".close-big-menu, .big-menu-box, .big-menu-overlay").fadeIn(500);
        jQuery(".big-menu-btn").fadeOut(500);
        jQuery('body').addClass('stop-scroll');
        });

jQuery(".close-big-menu").click(function() {
        jQuery(".big-menu-btn .big-menu-box, .big-menu-overlay").fadeOut(500);
        jQuery(".big-menu-btn").fadeIn(500);
        jQuery('body').removeClass('stop-scroll');
		});