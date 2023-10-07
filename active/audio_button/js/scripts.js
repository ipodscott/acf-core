
//Single Play
document.addEventListener('DOMContentLoaded', function() {
	const player = new Plyr('#audio');
	
	function showaudio() {
		document.querySelector('.audio_footer').classList.add('show');
	}

	function hidemini() {
		document.querySelector('.mini-audio-btn').classList.remove('show');
	}

	document.querySelectorAll('.play_audio').forEach(function(elem) {
		elem.addEventListener('click', function() {
			document.querySelectorAll('.play_audio.active, .list-group-item.active').forEach(function(activeElem) {
				activeElem.classList.remove('active');
			});
			document.querySelectorAll('.image-audio-btn.active').forEach(function(activeElem) {
				activeElem.classList.remove('active');
			});
			this.classList.add('active');
			showaudio();
			hidemini();
			document.querySelector('#audio').src = this.getAttribute('audioUrl');
			document.getElementById('audio').play();
		});
	});

	document.querySelectorAll('.mini-audio-btn').forEach(function(elem) {
		elem.addEventListener('click', function() {
			document.querySelector('.audio_footer').classList.add('show');
			this.classList.remove('show');
		});
	});

	document.querySelectorAll('.hide-player').forEach(function(elem) {
		elem.addEventListener('click', function() {
			document.querySelector('.audio_footer').classList.remove('show');
			document.querySelector('.mini-audio-btn').classList.add('show');
		});
	});

	document.querySelectorAll('.close-player').forEach(function(elem) {
		elem.addEventListener('click', function() {
			document.querySelectorAll('.play_audio.active, .list-group-item.active').forEach(function(activeElem) {
				activeElem.classList.remove('active');
			});
			document.querySelectorAll('.image-audio-btn.active').forEach(function(activeElem) {
				activeElem.classList.remove('active');
			});
			document.getElementById('audio').pause();
			document.querySelector('.audio_footer').classList.remove('show');
		});
	});

	document.querySelectorAll('.image-audio-btn').forEach(function(elem) {
		elem.addEventListener('click', function() {
			document.querySelectorAll('.image-audio-btn.active').forEach(function(activeElem) {
				activeElem.classList.remove('active');
			});
			this.classList.add('active');
		});
	});

});

//Continuous Play
document.addEventListener('DOMContentLoaded', function() {
	const player = new Plyr('#audio');
	let audios = document.querySelectorAll('.jukebox .play_audio');

	function showaudio() {
		document.querySelector('.audio_footer').classList.add('show');
	}

	function hidemini() {
		document.querySelector('.mini-audio-btn').classList.remove('show');
	}

	function playNextAudio(currentAudio) {
		let nextAudio = currentAudio.nextElementSibling;

		// Reset active class for all audios and set it to the currently playing one.
		audios.forEach(audio => audio.classList.remove('active'));
		
		if (nextAudio) {
			nextAudio.classList.add('active');
			document.querySelector('#audio').src = nextAudio.getAttribute('audioUrl');
			document.getElementById('audio').play();
		}
	}

	audios.forEach(function(elem, index) {
		elem.addEventListener('click', function() {
			audios.forEach(audio => audio.classList.remove('active'));
			this.classList.add('active');
			showaudio();
			hidemini();
			document.querySelector('#audio').src = this.getAttribute('audioUrl');
			document.getElementById('audio').play();
		});
	});

	// Event listener to detect when the audio has ended
	document.getElementById('audio').addEventListener('ended', function() {
		let currentAudio = [...audios].find(audio => audio.classList.contains('active'));

		if (currentAudio) {
			playNextAudio(currentAudio);
		}
	});

	// Rest of your code remains unchanged ...
});

