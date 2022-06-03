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
		$img_url = plugin_dir_url( __FILE__ ) . '/images/monuntains.avif';
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
	 	$vid_origin = 'https://fast.wistia.net/embed/iframe/'.$wistia_id.'?videoFoam=true';
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

<div class="image-vid-btn <?php echo esc_attr($className); ?>">
	    <div class="image-vid-link <?php echo $vid_source; ?> <?php echo $resolution; ?>" vidurl="<?php echo $vid_origin; ?>" >
        <img class="vid-btn-img" style="background-image: url('<?php echo $poster; ?>')"  src="<?php echo plugin_dir_url( __FILE__ ); ?>images/video_thumb.gif"/>
        <div class="vid-title"><svg class="vid-play-btn" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><g><rect fill="none" height="24" width="24"/></g><g><path d="M12,2C6.48,2,2,6.48,2,12s4.48,10,10,10s10-4.48,10-10S17.52,2,12,2z M9.5,16.5v-9l7,4.5L9.5,16.5z"/></g></svg></div>
		</div>
		
		<?php if($button_title) : ?>
			<div class="video-btn-img-title"><?php echo $button_title; ?></div>
		<?php endif; ?>
    </div>

	
<?php  elseif( $button_type == 'text' ): ?>
	
	<span class="video-btn <?php echo esc_attr($className); ?> <?php echo $vid_source; ?> <?php echo $resolution; ?>" vidURL="<?php echo $vid_origin; ?>">
		<span><i class="material-icons">video_label</i>  <?php echo $button_title; ?></span>
	</span>
	
	
	<?php  else: ?>
	Incase I want to add something later.
<?php endif; ?>