jQuery( document ).ready(function() {
	var $container = jQuery('.acc-body'), $acc_head = jQuery('.acc-head');
		
				$acc_head.last().addClass('last');
				
				$acc_head.on('click', function(e) {
					if( jQuery(this).next().is(':hidden') ) {
					    //Comment or uncomment the line below to control other open accordions when acc-head is clicked.
						$acc_head.removeClass('active').next().slideUp(750);
						jQuery(this).toggleClass('active').next().slideDown(750);
						
					}
		          else{
		              //Comment or Uncomment out the line below to add or remove the toggle function from acc-head
		            jQuery(this).toggleClass('active').next().slideToggle(750);
		          }
					e.preventDefault();
	});
});