var swiper = new Swiper('.featured-swiper-container', {
	  autoplay: {
	  	delay: 5000,
		},
  	  slidesPerView: 1,
      spaceBetween: 0,
      direction: 'horizontal',
      loop: true,
      speed: 1500,
      effect: 'slide',
      pagination: {
	     type: 'progressbar',
        el: '.progress-swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
    });
