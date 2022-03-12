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
	<span class="material-icons">volume_up</span><?php echo $title; ?>
</span>	