<?php
/**
 * Block Name: Starter Content Block
 *
 * This is the template for a Starter Content Block
 */


// create id attribute for specific styling
$id = $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'main-parallax-box';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
	
 
?>


 <div style="height: <?php the_field( 'vertical_height' ); ?>" class=" <?php echo esc_attr($className); ?>">
	 
	<?php if(get_field('layered_parallax_images')): ?>
	<?php 
		while(has_sub_field('layered_parallax_images')): 
		$overlay_opacity = get_sub_field('overlay_opacity');
	?>
	
	
	
	<div class="parallax-box">
				
		<div class="parallax-image <?php the_sub_field( 'parallax_speed' ); ?>" style="background-image:url(<?php the_sub_field( 'background_image' ); ?>);">
			<?php if( get_sub_field('include_overlay') ): ?>
	
				<div class="header-img-overlay" style="background-color: rgba(0, 0, 0, <?php echo $overlay_opacity; ?>"></div>
			
			<?php endif; ?>
		</div>
		
			
	</div>
	<?php endwhile; ?>
	<?php endif; ?>
	 
	 <div class="top-parallax-overlay" style="background-color: rgba(0, 0, 0, 0.<?php the_field( 'overlay_opacity' );?>);">
		 <div class="container parallax-overlay-content"><?php echo '<InnerBlocks />';?></div>
	 </div>

   	 
 </div>