$( document ).ready(function() {

const player = new Plyr('#audio');
		
		function showaudio() {     
	    $('.audio_footer').addClass('show');
	 }
	 
	 
	 
		function hidemini() {     
	    $('.mini-audio-btn').removeClass('show');
	 }
	 
	 
	  $( ".play_audio" ).click(function() {
		  $('.play_audio.active, .list-group-item.active').removeClass('active');
		  $(this).addClass('active');
		showaudio();
		hidemini();
        	$('#audio').attr("src", $(this).attr("audioUrl"));
			document.getElementById('audio').play();
         });
	
	
	$( ".mini-audio-btn" ).click(function() {
	  $('.audio_footer').addClass('show');
	  $(this).removeClass('show');
	});
	
	
	$( ".hide-player" ).click(function() {
	  $('.audio_footer').removeClass('show');
	  $('.mini-audio-btn').addClass('show');
	});
	
	
	$( ".close-player" ).click(function() {
		$('.play_audio.active, .list-group-item.active').removeClass('active');
	$("#audio")[0].pause();
	  $('.audio_footer').removeClass('show');
	});
	
});