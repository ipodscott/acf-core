<?php
/**
 * Block Name: Starter Content Block
 *
 * This is the template for a Starter Content Block
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
	} '';
	
	$video_type = get_field( 'video_type' );
	$video_url = get_field('video_url', $post_id);
	
?>

<?php if ( $video_type == 'internal_video_link' ): include('inc/internal_video_link.php'); ?><?php endif; ?>
<?php if ( $video_type == 'movie_info' ): include('inc/movie_info.php'); ?><?php endif; ?>	
<?php if ( $video_type == 'movie_picker' ): include('inc/movie_picker.php'); ?> <?php endif; ?>
<?php if ( $video_type == 'video_repeater' ): include('inc/video_repeater.php'); ?><?php endif; ?>