<?php
/**
 * Modal Video Block
 *
 * This is the template for a modal video button.
 */
 
 	if( ! function_exists('presentation_preview') ) {
	
		// Add Video CSS and JS 
		wp_enqueue_style( 'presentation_slide_style', plugin_dir_url( __FILE__ ) . 'css/style.css',true,'1.1','all' );
		
		function presentation_preview() 
		{ // Adds video styles to preview content in the backend.
		    wp_enqueue_style( 'presentation_slide_preview', plugin_dir_url( __FILE__ ) . 'css/style.css',true,'1.1','all' );
		}
		add_action('admin_footer', 'presentation_preview');	
	}
	

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
	$background_type = get_field( 'background_type' );
	
	$background_image = get_field( 'bg_image' );
	$use_sub_slides = get_field( 'use_sub_slides' );
	$make_sub_slide = get_field( 'make_sub_slide' );
	$background_type = get_field( 'background_type' );
	$bg_color = get_field( 'bg_color' );
	
	?>
	<?php if( !$make_sub_slide ) : ?>
	  
			<?php if( !$use_sub_slides ) : ?>
				
				<?php if( is_admin() ):?>
					<div class="slide-handle">
						<span>Slide | <?php echo $slide_name; ?></span> 
						<?php if( $background_type == 'color' ) : ?>
							<span>Background Color: <span class="bgcolor-sample" style="background-color:<?php echo $bg_color; ?>"></span></span>
							<?php  else: ?> 
							<span>Background Image</span>
						<?php endif ?>
						
					</div>
				<?php endif ?>
				
				<li class="preso-slide" id="<?php echo $slide_slug; ?>">
					<div class="cd-slider-content">
						<div class="content-wrapper" <?php if( !is_admin() ):?>style="background-color:<?php echo $bg_color; ?>; background-image: url(<?php echo $background_image;?>);"<?php endif;?>>
							<?php if( !is_admin() ):?><?php if( $background_type == 'image' ) : ?><div class="bg-image-overlay"></div><?php endif;?><?php endif;?>
							<div class="preso-content"><?php echo '<InnerBlocks />';?></div>
						</div>
					</div>
				</li>
		
				  
			<?php  else: ?> 
				
				<?php if( is_admin() ):?>
					
					<div class="slide-handle sub-slide-container-handle">
						<span>Sub Slide Container | <?php echo $slide_name; ?></span>
					</div>
					
				<?php endif ?>
				<li id="<?php echo $slide_slug; ?>" class="preso-slide sub-slide-container">
				
					<ol class="sub-slides">
						<?php echo '<InnerBlocks />';?>
					</ol>
				</li>
			  
			<?php endif ?>
		
		<?php  else: ?> 
				<?php if( is_admin() ):?>
					<div class="slide-handle sub-slide-handle">
						<span>Sub Slide |  <?php echo $slide_name; ?></span> 
						<?php if( $background_type == 'color' ) : ?>
							<span>Background Color: <span class="bgcolor-sample" style="background-color:<?php echo $bg_color; ?>"></span></span>
							<?php  else: ?> 
								<span>Background Image</span>
							<?php endif ?>	
					</div>
				<?php endif ?>	
				
				<li class="preso-slide">
					<div class="cd-slider-content">
						<div class="content-wrapper" <?php if( !is_admin() ):?>style="background-color:<?php echo $bg_color; ?>; background-image: url(<?php echo $background_image;?>);"<?php endif;?>>
							<?php if( !is_admin() ):?><?php if( $background_type == 'image' ) : ?><div class="bg-image-overlay"></div><?php endif;?><?php endif;?>
							<div class="preso-content"><?php echo '<InnerBlocks />';?></div>		
						</div>
					</div>
				</li>
		
	<?php endif ?>
	  