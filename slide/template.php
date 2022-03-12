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
	
	$active_state = get_field('active');
	$background_image = get_field('background_image');
	?>


	<section class="slide fade-6 kenBurns">
	  <div class="content">
	    <div class="container">
	      <div class="wrap">
	        
	        <div class="fix-12-12">
	          <?php echo '<InnerBlocks />';?>
	        </div>
	          
	      </div>
	    </div>
	  </div>
	  <div class="background" style="background-image:url(<?php echo($background_image);?>)"></div>
	</section>