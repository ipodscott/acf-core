<?php
/**
 * Modal Audo Block
 *
 * This is the template for a modal audio button.
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
?>	
	
	<?php 
		$left_link = get_field('left_link');
		if( $left_link ): 
		    $left_link_url = $left_link['url'];
		    $left_link_title = $left_link['title'];
		    $left_link_target = $left_link['target'] ? $left_link['target'] : '_self';
		    endif; ?>
    
    <?php 
	    $right_link = get_field('right_link');
		if( $right_link ): 
		    $right_link_url = $right_link['url'];
		    $right_link_title = $right_link['title'];
		    $right_link_target = $right_link['target'] ? $right_link['target'] : '_self';
	       endif; ?>
     

	
<div class="dual-link-button <?php echo esc_attr( $className ); ?>" id="<?php echo esc_attr( $id ); ?>">
	<a href="<?php echo esc_url( $left_link_url ); ?>" target="<?php echo esc_attr( $left_link_target ); ?>"> <svg viewBox="0 0 24 24"> <path d="M4,6H2v14c0,1.1,0.9,2,2,2h14v-2H4V6z M20,2H8C6.9,2,6,2.9,6,4v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2V4C22,2.9,21.1,2,20,2 z M12,14.5v-9l6,4.5L12,14.5z"/></svg>
 <?php echo esc_html( $left_link_title ); ?></a>
	<a href="<?php echo esc_url( $right_link_url ); ?>" target="<?php echo esc_attr( $right_link_target ); ?>"><svg viewBox="0 0 24 24"> <path d="M19,1l-5,5v11l5-4.5V1z M1,6v14.6c0,0.2,0.2,0.5,0.5,0.5c0.1,0,0.1,0,0.2,0C3.1,20.5,5.1,20,6.5,20c1.9,0,4.1,0.4,5.5,1.5V6 c-1.4-1.1-3.6-1.5-5.5-1.5S2.5,4.9,1,6z M23,19.5V6c-0.6-0.4-1.2-0.8-2-1v13.5c-1.1-0.4-2.3-0.5-3.5-0.5c-1.7,0-4.1,0.6-5.5,1.5v2 c1.4-0.9,3.8-1.5,5.5-1.5c1.6,0,3.4,0.3,4.8,1c0.1,0,0.1,0,0.2,0c0.2,0,0.5-0.2,0.5-0.5C23,20.6,23,19.5,23,19.5z"/> </svg> <?php echo esc_html( $right_link_title ); ?></a>
</div>	