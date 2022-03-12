$( document ).ready(function() {
	
	function videoChange(){
		$('.default-video-cover').fadeOut(500);
		
		$('.vid-box').fadeOut(500, function(){
			$('.vid-box').delay(500).fadeIn(500);
		});
	
		$('.main-menu').delay(500).fadeOut(500, function(){
			$('.menu-overlay').fadeOut(500);
		});
	}
	
	
	 $(".video-menu li").click(function() {
        $(".video-menu li").removeClass("show");
        $(this).addClass("show")
    });	
    
    $(".image-vid-btn").click(function() {
       $('.play_audio.active, .list-group-item.active').removeClass('active');
	   $("#audio")[0].pause();
	   $('.audio_footer').removeClass('show'); 
    });	
	

	$( ".tube-link" ).click(function() {
		$('body').addClass('stop-scroll');
		$('.vidFrame').attr("src", $(this).attr("vidUrl"));
		$('.myVideo').attr("src", "empty");
		$('.myVideo').hide();
		$('.vidFrame').show();
	});
	
	
	$( ".mp4-link" ).click(function() {
		$('body').addClass('stop-scroll');
		$('.vidFrame, .vimFrame').hide();
		$('.vidFrame, .vimFrame').attr("src", "empty");
		$('.myVideo').attr("src", $(this).attr("vidURL"));
		$('.myVideo').show(function(){
			 document.getElementById('myVideo').play();
		});	
	});
	
	
	function videoChange(){
		$('.default-video-cover').fadeOut(500);
		
		$('.vid-box').fadeOut(500, function(){
			$('.vid-box').delay(500).fadeIn(500);
		});
	
		$('.main-menu').delay(500).fadeOut(500, function(){
			$('.menu-overlay').fadeOut(500);
		});
	}
	
	
	function hideAudio(){
		$('.audio-btn').removeClass("active");
        $('.audio_footer.show, .mini-audio-btn.show').removeClass("show");
        document.getElementById('audio').pause();
	}

    
	$(".sixteen-nine-btn").click(function() {
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".sixteen-nine").addClass("show"); 
    });
    
    $(".widescreen-btn").click(function() {
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".widescreen-img").addClass("show"); 
    });
    
    $(".standard-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".standard-img").addClass("show");
    });
    
    $(".pal-btn").click(function() { 
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".pal-img").addClass("show");
    });
    
    $(".na-btn").click(function() {
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".nat-arch").addClass("show");
    });
    
    $(".vintage-wide-btn").click(function() {
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".vintage-wide").addClass("show");
    });
	
	$(".pano-btn").click(function() {
        $(".modal-vid").fadeIn(500);
        $(".vid-holder img").removeClass("show");
        $(".panovision").addClass("show");
    });

    
    $(".close").click(function() { 
        $(".modal-vid").fadeOut(500);
        /*document.getElementById('myVideo').pause();*/
        $('.youTube, .myVideo').attr('src', '');
        $('body').removeClass('stop-scroll');
    });
    
    $( ".video-link" ).click(function() {
		$(".audio-btn.active").removeClass("active");
		$("#audio")[0].pause();
		$('.audio_footer, .mini-audio-btn').removeClass('show');
		$('body').addClass('stop-scroll');
	});		
    
});


 window.document.onkeydown = function (e)
 	{
	 	if (!e) e = event;
	 	if (e.keyCode == 27)
	 	{
	 		$(".modal-vid").fadeOut(500, function(){});
	 		$('.youTube, .myVideo').attr('src', '');
	 		$('body').removeClass('stop-scroll');
	 	}
 	};