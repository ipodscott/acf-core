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
	
	$slide_name = get_field( 'slide_name' );
	$slide_slug = '' . sanitize_title( $slide_name ) . '';
	$background_image = get_field('background_image');
	$slide_opacity = get_field('slide_opacity');
	$slide_effect = get_field('slide_effect');
	$background_type = get_field('background_type');
	$background_video = get_field('background_video');
	$bg_video_upload = get_field('bg_video_upload');
	$bg_video_url = get_field( 'bg_video_url' );
	$poster = get_field( 'poster' );
	
	if( $background_video == 'upload' ) : 
		$vid_bg = $bg_video_upload;
	 
	 elseif( $background_video == 'remote' ): 
	 	$vid_bg = $bg_video_url;
	 	
	 endif 
	
	?>


	<section class="slide <?php echo $slide_opacity; ?> <?php echo $slide_effect; ?> <?php if($background_type == 'video') : ?> video <?php endif ?>" data-name="<?php echo $slide_slug; ?>">
	  <div class="content">
	    <div class="container">
	      <div class="wrap">
	        
	        <div class="fix-12-12">
		        <div class="container-wrap">
					<?php echo '<InnerBlocks />';?>
		        </div>
	        </div>
	          
	      </div>
	    </div>
	  </div>
	  
	  <?php if($background_type == 'video') : ?>
		  <div class="background">
		  	<video poster="<?php echo $poster; ?>" autoplay="" loop="" muted="">
		      <source src="<?php echo $vid_bg; ?>" type="video/mp4">
		    </video>
		  </div>
	  <?php  else: ?>
	  
	  	<div class="background" style="background-image:url(<?php echo($background_image);?>)"></div>
	  
	   <?php endif ?>
	  
	</section>