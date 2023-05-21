document.addEventListener('DOMContentLoaded', (event) => {

	function videoChange(){
		document.querySelector('.default-video-cover').style.display = 'none';
		document.querySelector('.vid-box').style.display = 'none';

		setTimeout(function(){
			document.querySelector('.vid-box').style.display = 'block';
		}, 500);

		setTimeout(function(){
			document.querySelector('.main-menu').style.display = 'none';
			document.querySelector('.menu-overlay').style.display = 'none';
		}, 500);
	}

	let videoMenuItems = document.querySelectorAll(".video-menu li");
	videoMenuItems.forEach(function (item) {
		item.addEventListener('click', function () {
			videoMenuItems.forEach(function (i) {
				i.classList.remove("show");
			});
			this.classList.add("show");
		});
	});

	document.querySelector(".image-vid-btn").addEventListener('click', function() {
		document.querySelector('.play_audio.active').classList.remove('active');
		document.querySelector('.list-group-item.active').classList.remove('active');
		document.querySelector("#audio").pause();
		document.querySelector('.audio_footer').classList.remove('show');
	});
		
	document.querySelector(".tube-link").addEventListener('click', function() {
		document.body.classList.add('stop-scroll');
		document.querySelector('.vidFrame').src = this.getAttribute("vidUrl");
		document.querySelector('.myVideo').src = "empty";
		document.querySelector('.myVideo').style.display = 'none';
		document.querySelector('.vidFrame').style.display = 'block';
		document.querySelector('.play_audio.active').classList.remove('active');
		document.querySelector('.image-audio-btn.active').classList.remove('active');
		document.querySelector("#audio").pause();
		document.querySelector('.audio_footer').classList.remove('show');
	});
		
	document.querySelector(".mp4-link").addEventListener('click', function() {
		document.body.classList.add('stop-scroll');
		document.querySelector('.vidFrame').style.display = 'none';
		document.querySelector('video').classList.remove('hide');
		document.querySelector('.vidFrame').src = "empty";
		document.querySelector('.myVideo').src = this.getAttribute("vidURL");
		document.querySelector('.myVideo').style.display = 'block';
		document.querySelector('#myVideo').play();
		document.querySelector('.play_audio.active').classList.remove('active');
		document.querySelector('.image-audio-btn.active').classList.remove('active');
		document.querySelector("#audio").pause();
		document.querySelector('.audio_footer').classList.remove('show');
	});
		
	function videoChange(){
		document.querySelector('.default-video-cover').style.display = 'none';
		document.querySelector('.vid-box').style.display = 'none';

		setTimeout(function(){
			document.querySelector('.vid-box').style.display = 'block';
		}, 500);

		setTimeout(function(){
			document.querySelector('.main-menu').style.display = 'none';
			document.querySelector('.menu-overlay').style.display = 'none';
		}, 500);
	}
		
	function hideAudio(){
		document.querySelector('.audio-btn').classList.remove("active");
		document.querySelector('.audio_footer.show').classList.remove("show");
		document.querySelector('.mini-audio-btn.show').classList.remove("show");
		document.querySelector('#audio').pause();
	}

	// More click handlers here...

});

document.addEventListener("keydown", function(event) {
	if (event.keyCode === 27) {
		document.querySelector(".modal-vid").style.display = 'none';
		document.querySelector('.youTube').src = '';
		document.querySelector('.myVideo').src = '';
		document.body.classList.remove('stop-scroll');
	}
});
