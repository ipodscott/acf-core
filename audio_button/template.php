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
	$className = 'audio-btn';
	if( !empty($block['className']) ) {
	    $className .= ' ' . $block['className'];
	}
	if( !empty($block['align']) ) {
	    $className .= ' align' . $block['align'];
	}
	
	
	$title = get_field('title');
	$audio_source = get_field ('audio_source');
	$upload = get_field ('upload');
	$remote = get_field ('file_url');
	
	if( $audio_source == 'upload' ) : 
		$audio = $upload;
	 elseif( $audio_source == 'remote' ): 
	 	$audio = $remote;
	 ?>

<?php endif ?>
	
<span id="<?php echo esc_attr($id); ?>" class="play_audio <?php echo esc_attr($className); ?>" audiourl="<?php echo $audio; ?>">
	<svg><path d="M7,9l5-5v16l-5-5H3V9H7z M16.5,12c0-1.8-1-3.3-2.5-4V16C15.5,15.3,16.5,13.8,16.5,12z M14,3.2v2.1c2.9,0.9,5,3.5,5,6.7
	s-2.1,5.8-5,6.7v2.1c4-0.9,7-4.5,7-8.8C21,7.7,18,4.1,14,3.2z"/></svg><?php echo $title; ?>
</span>	