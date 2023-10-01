<div class="modal-vid" style="display: none;">
    <div class="movie-box">
        <div class="wide-screen">
            <div class="vid-holder">
              
                <img decoding="async" loading="lazy" class="widescreen-img" src="<?php echo plugin_dir_url( __FILE__ ); ?>images/bg_widescreen.webp" alt=""/>
				<img decoding="async" loading="lazy" class="standard-img" src="<?php echo plugin_dir_url( __FILE__ ); ?>images/standard_bg.webp" alt=""/>
				<img decoding="async" loading="lazy" class="sixteen-nine" src="<?php echo plugin_dir_url( __FILE__ ); ?>images/16x9_bg.webp" alt=""/>
				<img decoding="async" loading="lazy" class="pal-img" src="<?php echo plugin_dir_url( __FILE__ ); ?>images/pal.webp" alt=""/>
				<img decoding="async" loading="lazy" class="nat-arch-img" src="<?php echo plugin_dir_url( __FILE__ ); ?>images/na.webp"  alt=""/>
				<img decoding="async" loading="lazy" class="vintage-wide" src="<?php echo plugin_dir_url( __FILE__ ); ?>images/pano.webp"  alt=""/>
				<img decoding="async" loading="lazy" class="panovision" src="<?php echo plugin_dir_url( __FILE__ ); ?>images/pano.webp"  alt=""/>
               
                <video id="myVideo" class="myVideo" src="" controls></video>
                <iframe class="youTube hide vidFrame" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                <div class="close small-close" vidUrl="#"><svg><path style="fill:#fff;" d="M12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10S17.5,2,12,2z M17,15.6L15.6,17L12,13.4L8.4,17L7,15.6
	l3.6-3.6L7,8.4L8.4,7l3.6,3.6L15.6,7L17,8.4L13.4,12L17,15.6z"></path></svg></div>
            </div>
        </div>
    </div>
</div>