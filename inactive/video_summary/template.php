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
	$video_copy = get_field( 'video_copy' );
	?>
<div class="<?php echo $className; ?>" id="<?php echo $id; ?>">
	<?php echo $video_copy ;?>
</div>