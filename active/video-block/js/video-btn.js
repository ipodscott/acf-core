function videoChange() {
	var defaultVideoCover = document.querySelector('.default-video-cover');
	var vidBox = document.querySelectorAll('.vid-box');
	var mainMenu = document.querySelector('.main-menu');
	var menuOverlay = document.querySelector('.menu-overlay');
  
	fadeOut(defaultVideoCover, 500);
  
	Array.from(vidBox).forEach(function(box) {
	  fadeOut(box, 500, function() {
		setTimeout(function() {
		  fadeIn(box, 500);
		}, 500);
	  });
	});
  
	setTimeout(function() {
	  fadeOut(mainMenu, 500, function() {
		fadeOut(menuOverlay, 500);
	  });
	}, 500);
  }
  
  function fadeOut(element, duration, callback) {
	var opacity = 1;
	var interval = 50;
	var delta = interval / duration;
  
	var fadeOutInterval = setInterval(function() {
	  opacity -= delta;
  
	  if (opacity <= 0) {
		opacity = 0;
		clearInterval(fadeOutInterval);
  
		if (typeof callback === 'function') {
		  callback();
		}
	  }
  
	  element.style.opacity = opacity;
	}, interval);
  }
  
  function fadeIn(element, duration, callback) {
	var opacity = 0;
	var interval = 50;
	var delta = interval / duration;
  
	var fadeInInterval = setInterval(function() {
	  opacity += delta;
  
	  if (opacity >= 1) {
		opacity = 1;
		clearInterval(fadeInInterval);
  
		if (typeof callback === 'function') {
		  callback();
		}
	  }
  
	  element.style.opacity = opacity;
	}, interval);
  }
  

// Hide Audio if playing and visible
function hideAudio() {
    var audioBtnElements = document.querySelectorAll('.audio-btn');
    audioBtnElements.forEach(function(audioBtn) {
        audioBtn.classList.remove('active');
    });

    var showElements = document.querySelectorAll('.audio_footer.show, .mini-audio-btn.show');
    showElements.forEach(function(showElem) {
        showElem.classList.remove('show');
    });

    var audio = document.getElementById('audio');
    if (audio) {
        audio.pause();
    }
}

// Video Menu
var videoMenuItems = document.querySelectorAll(".video-menu li");

videoMenuItems.forEach(function(item) {
  item.addEventListener("click", function() {
    videoMenuItems.forEach(function(item) {
      item.classList.remove("show");
    });
    this.classList.add("show");
  });
});



// Select the image-vid-btn element and attach a click event listener
var imageVidBtn = document.querySelector(".image-vid-btn");
if (imageVidBtn) {
  imageVidBtn.addEventListener("click", function() {
    var playAudioActiveElements = document.querySelectorAll(".play_audio.active, .list-group-item.active");
    playAudioActiveElements.forEach(function(element) {
      element.classList.remove("active");
    });
    var audioElement = document.querySelector("#audio");
    audioElement.pause();
    var audioFooter = document.querySelector(".audio_footer");
    audioFooter.classList.remove("show");
  });
}

// Select all tube-link elements and attach click event listeners
var tubeLinks = document.querySelectorAll(".tube-link");
tubeLinks.forEach(function(link) {
  link.addEventListener("click", function() {
    document.body.classList.add("stop-scroll");
    var vidFrame = document.querySelector(".vidFrame");
    vidFrame.setAttribute("src", this.getAttribute("vidUrl"));
    var myVideo = document.querySelector(".myVideo");
    myVideo.setAttribute("src", "empty");
    myVideo.style.display = "none";
    vidFrame.style.display = "block";

    var playAudioActiveElements = document.querySelectorAll(".play_audio.active, .list-group-item.active, .image-audio-btn.active");
    playAudioActiveElements.forEach(function(element) {
      element.classList.remove("active");
    });
    var audioElement = document.querySelector("#audio");
    audioElement.pause();
    var audioFooter = document.querySelector(".audio_footer");
    audioFooter.classList.remove("show");
  });
});

// Select all mp4-link elements and attach click event listeners
var mp4Links = document.querySelectorAll(".mp4-link");
mp4Links.forEach(function(link) {
  link.addEventListener("click", function() {
    document.body.classList.add("stop-scroll");
    var vidFrames = document.querySelectorAll(".vidFrame");
    vidFrames.forEach(function(frame) {
      frame.style.display = "none";
    });
    var videos = document.querySelectorAll("video");
    videos.forEach(function(video) {
      video.classList.remove("hide");
    });
    vidFrames.forEach(function(frame) {
      frame.setAttribute("src", "empty");
    });
    var myVideo = document.querySelector(".myVideo");
    myVideo.setAttribute("src", this.getAttribute("vidURL"));
    myVideo.style.display = "block";
    myVideo.addEventListener("loadeddata", function() {
      this.play();
    });

    var playAudioActiveElements = document.querySelectorAll(".play_audio.active, .list-group-item.active, .image-audio-btn.active");
    playAudioActiveElements.forEach(function(element) {
      element.classList.remove("active");
    });
    var audioElement = document.querySelector("#audio");
    audioElement.pause();
    var audioFooter = document.querySelector(".audio_footer");
    audioFooter.classList.remove("show");
  });
});


//16x9 Button

document.querySelectorAll('.sixteen-nine-btn').forEach(function(element) {
	element.addEventListener('click', function() {
		var modalVid = document.querySelector('.modal-vid');
		modalVid.style.display = 'block';
		setTimeout(function() {
			modalVid.style.opacity = '1';
		}, 1); // 1 millisecond after we make it block display, we start fading in

		var imgElements = document.querySelectorAll('.vid-holder img');
		imgElements.forEach(function(imgElem) {
			imgElem.classList.remove('show');
		});

		var sixteenNine = document.querySelector('.sixteen-nine');
		sixteenNine.classList.add('show');
	});
});

//Dimension Buttons
var btnsToImgClassMapping = {
    'widescreen-btn': 'widescreen-img',
    'standard-btn': 'standard-img',
    'pal-btn': 'pal-img',
    'na-btn': 'nat-arch',
    'vintage-wide-btn': 'vintage-wide',
    'pano-btn': 'panovision'
};

Object.keys(btnsToImgClassMapping).forEach(function(btnClass) {
    var imgClass = btnsToImgClassMapping[btnClass];
    document.querySelectorAll('.' + btnClass).forEach(function(btn) {
        btn.addEventListener('click', function() {
            var modalVid = document.querySelector('.modal-vid');
            modalVid.style.display = 'block';
            setTimeout(function() {
                modalVid.style.opacity = '1';
            }, 1);

            document.querySelectorAll('.vid-holder img').forEach(function(img) {
                img.classList.remove('show');
            });

            var image = document.querySelector('.' + imgClass);
            image.classList.add('show');
        });
    });
});

document.querySelectorAll('.close').forEach(function(closeBtn) {
    closeBtn.addEventListener('click', function() {
        var modalVid = document.querySelector('.modal-vid');
        modalVid.style.opacity = '0';
        setTimeout(function() {
            modalVid.style.display = 'none';
        }, 500);

        document.querySelectorAll('.youTube, .myVideo').forEach(function(video) {
            video.src = '';
        });

        document.body.classList.remove('stop-scroll');
    });
});

document.querySelectorAll('.video-link').forEach(function(videoLink) {
    videoLink.addEventListener('click', function() {
        document.querySelectorAll('.audio-btn.active').forEach(function(btn) {
            btn.classList.remove('active');
        });

        var audio = document.getElementById('audio');
        if (audio) {
            audio.pause();
        }

        document.querySelectorAll('.audio_footer, .mini-audio-btn').forEach(function(elem) {
            elem.classList.remove('show');
        });

        document.body.classList.add('stop-scroll');
    });
});


window.document.onkeydown = function (e) {
    e = e || window.event;
    if (e.keyCode === 27) {
        // Hide ".modal-vid"
        var modalVidElements = document.querySelectorAll('.modal-vid');
        for (var i = 0; i < modalVidElements.length; i++) {
            modalVidElements[i].style.display = 'none';
            // You can add a fade-out transition with CSS if needed
        }

        // Clear 'src' attribute for '.youTube, .myVideo'
        var videoElements = document.querySelectorAll('.youTube, .myVideo');
        for (var j = 0; j < videoElements.length; j++) {
            videoElements[j].setAttribute('src', '');
        }

        // Remove 'stop-scroll' class from body
        document.body.classList.remove('stop-scroll');
    }
};

// vid_jukebox Code

var jukebox = document.querySelector(".vid-jukebox");
var mp4LinksInJukebox = jukebox ? jukebox.querySelectorAll(".mp4-link") : [];

mp4LinksInJukebox.forEach(function(link, index) {
  link.addEventListener("click", function() {
    document.body.classList.add("stop-scroll");

    var vidFrames = document.querySelectorAll(".vidFrame");
    vidFrames.forEach(function(frame) {
      frame.style.display = "none";
    });

    var videos = document.querySelectorAll("video");
    videos.forEach(function(video) {
      video.classList.remove("hide");
    });

    vidFrames.forEach(function(frame) {
      frame.setAttribute("src", "empty");
    });

    var myVideo = document.querySelector(".myVideo");
    myVideo.setAttribute("src", this.getAttribute("vidURL"));
    myVideo.style.display = "block";

    myVideo.addEventListener("loadeddata", function() {
      this.play();
    });

    myVideo.addEventListener("ended", function() {
      // Check for a next video link specifically inside the jukebox
      var nextLink = mp4LinksInJukebox[index + 1];
      
      if (nextLink) {
        nextLink.click(); // Play the next video
      }

      // Swap the 'active' class
      link.classList.remove("active");
      if (nextLink) {
        nextLink.classList.add("active");
      }
    });

    var playAudioActiveElements = document.querySelectorAll(".play_audio.active, .list-group-item.active, .image-audio-btn.active");
    playAudioActiveElements.forEach(function(element) {
      element.classList.remove("active");
    });

    var audioElement = document.querySelector("#audio");
    audioElement.pause();

    var audioFooter = document.querySelector(".audio_footer");
    audioFooter.classList.remove("show");
  });
});