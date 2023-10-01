jQuery(".menu-btn").click(function() {
        jQuery(".menu").addClass('show-menu');
        jQuery(".menu-layer").fadeIn(500);
        jQuery(".all, body").addClass('stop-scroll');
        });

jQuery(".menu ul li, .menu ul li a, .close-menu, .menu-layer").click(function() {
        jQuery(".menu").removeClass('show-menu');
        jQuery(".menu-layer").delay(250).fadeOut(500);
        jQuery(".all, body").removeClass('stop-scroll');
		});