<?php
/**
 * Modal Video Block
 *
 * This is the template for a modal video button.
 */

	// Create id attribute allowing for custom "anchor" value.
	$id = $block['id'];
	if( !empty($block['anchor']) ) {
	    $id = $block['anchor'];
	}
	
	// Create class attribute allowing for custom "className" and "align" values.
	$className = '';
	if( !empty($block['className']) ) {
	    $className .= ' ' . $block['className'];
	}
	if( !empty($block['align']) ) {
		$className .= ' align' . $block['align'];
	}
	

	$button_type = get_field('button_type');
	$button_title =  get_field('button_title');
	$resolution =  get_field('resolution');
	$source = get_field('select_video_source');
	$mp4_remote = get_field('remote_mp4');
	$mp4_upload = get_field('mp4_upload');
	$video_id = get_field('id');
	$youtube_id = get_field('youtube_id');
	$vimeo_id = get_field('vimeo_id');
	$wistia_id = get_field('wistia_id');
	$pbs_player_url = get_field('pbs_player_url');
	$pbs_player_url = get_field('pbs_player_url');
	$image = get_field('thumb');
	$use_custom_thumbnail = get_field( 'use_custom_thumbnail' );
	$custom_thumbnail = get_field( 'custom_thumbnail' );
	
   	if( $image ):
   	// Image variables.
	    $img_url = $image['url'];
	    // Thumbnail size attributes.
	    $size = 'large';
	    $width = $image['sizes'][ $size . '-width' ];
	    $height = $image['sizes'][ $size . '-height' ];
	elseif(!$image):
		$img_url = plugin_dir_url( __FILE__ ) . '/images/monuntains.webp';
    endif; 
		
	if( $source == 'mp4_upload' ) : 
		$vid_source = 'mp4-link';
		$vid_origin = $mp4_upload;
		$poster = $img_url;
	 
	 elseif( $source == 'remote_mp4' ): 
	 	$vid_source = 'mp4-link';
	 	$vid_origin = $mp4_remote;
	 	$poster = $img_url;
	 
	 elseif( $source == 'wistia' ): 
	 	$vid_source = 'tube-link';
	 	$vid_origin = 'https://fast.wistia.net/embed/iframe/'.$wistia_id.'?videoFoam=true&autoplay=true';
		$poster = $img_url;
	 
	 elseif( $source == 'youtube' ): 
	 	$vid_source = 'tube-link';
	 	$vid_origin = 'https://www.youtube.com/embed/'.$youtube_id.'?autoplay=1';
	 	
	 	if( $use_custom_thumbnail ):
	 		$poster = $custom_thumbnail;
	 	elseif( !$use_custom_thumbnail ):
	 		$poster = 'https://img.youtube.com/vi/'.$youtube_id.'/maxresdefault.jpg';
	 	endif; 
	 	
	  elseif( $source == 'vimeo' ): 
	 	$vid_source = 'tube-link';
	 	$vid_origin = 'https://player.vimeo.com/video/'.$vimeo_id.'?autoplay=1';
		
		if( $use_custom_thumbnail ):
			$poster = $custom_thumbnail;
		elseif( !$use_custom_thumbnail ):
			$poster = 'https://vumbnail.com/'.$vimeo_id.'.jpg';
		endif; 
		 
	  elseif( $source == 'pbs_player' ): 
	 	$vid_source = 'tube-link';
	 	$vid_origin = 'https://player.pbs.org/widget/partnerplayer/'.$pbs_player_url.'/?chapterbar=false&endscreen=true';
	 	$poster = $img_url;	
	 endif 	 
?>
	


<?php if($button_type == 'image') : ?>

<div class="image-vid-btn alignfull <?php echo esc_attr($className); ?>">
	    <div class="image-vid-link <?php echo $vid_source; ?> <?php echo $resolution; ?>" vidurl="<?php echo $vid_origin; ?>" >
        <img decoding="async" loading="lazy" class="vid-btn-img" style="background-image: url('<?php echo $poster; ?>')"  src="<?php echo plugin_dir_url( __FILE__ ); ?>images/video_thumb.webp"/>
        <div class="vid-title">
<svg class="vid-btn-icon" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 48 48">
<path d="M45.9,14.6c-1.2-2.9-3-5.4-5.1-7.7c-2.1-2.2-4.7-3.8-7.6-5.1S27.2,0,23.9,0c-3.2,0-6.3,0.6-9.3,1.9S9.2,4.8,7,6.9
	s-3.8,4.7-5.1,7.7S0,20.6,0,23.9c0,3.2,0.6,6.3,1.9,9.3c1.3,3,3,5.5,5.1,7.7c2.1,2.2,4.7,3.8,7.6,5.1s6,1.9,9.3,1.9s6.4-0.6,9.3-1.9
	s5.4-3,7.6-5.1c2.1-2.2,3.8-4.7,5.1-7.7s1.9-6,1.9-9.3C47.8,20.6,47.2,17.5,45.9,14.6z M38.2,38.3c-3.9,4-8.7,6-14.3,6
	s-10.4-2-14.3-6s-6-8.7-6-14.4s2-10.5,6-14.4c3.9-4,8.7-6,14.3-6s10.5,2,14.3,6s6,8.7,6,14.4S42.1,34.4,38.2,38.3z M18.1,13.8
	L34,23.9L18.1,34.1V13.8z"/>
</svg>
</div>
		</div>
		
		<?php if($button_title) : ?>
			<div class="video-btn-img-title"><?php echo $button_title; ?></div>
		<?php endif; ?>
    </div>

	
<?php  elseif( $button_type == 'text' ): ?>
	
	<div class="video-btn <?php echo esc_attr($className); ?> <?php echo $vid_source; ?> <?php echo $resolution; ?>" vidURL="<?php echo $vid_origin; ?>">
		<span><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" ><path d="M0 0h24v24H0V0z" fill="none"/><path style="fill:#efefef;" d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"/></svg>  <?php echo $button_title; ?></span>
	</div>
	
	
	<?php  else: ?>
	Incase I want to add something later.
<?php endif; ?>