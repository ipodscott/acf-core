<?php
/**
 * Vertical Slideshow Block
 *
 * This is the template for a creating vertical slideshow.
 */
	
	// Create id attribute allowing for custom "anchor" value.
	$id =  $block['id'];
	if( !empty($block['anchor']) ) {
	    $id = $block['anchor'];
	}
	
	// Create class attribute allowing for custom "className" and "align" values.
	$className;
	if( !empty($block['className']) ) {
	    $className .= ' ' . $block['className'];
	}
	if( !empty($block['align']) ) {
	    $className .= ' align' . $block['align'];
	}
	
	$slide_name = get_field( 'slide_name' );
	$slide_id = get_field( 'slide_id' );
	$active_state = get_field ( 'active' );
?>
	
<li class="<?php if( $active_state ): ?> visible <?php endif; ?> " id="<?php echo $slide_id; ?>">
	<div class="cd-slider-content">
		<div class="content-wrapper">
			<div class="slide-content"><?php echo '<InnerBlocks />'; ?></div>
		</div>
	</div>
</li>




			
	
	