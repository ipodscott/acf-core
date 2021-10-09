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
	$thumb = get_field ('thumb');
	$button_type = get_field ( 'button_type' );
	
	if( $audio_source == 'upload' ) : 
		$audio = $upload;
	 elseif( $audio_source == 'remote' ): 
	 	$audio = $remote;
	 ?>

<?php endif ?>
	
<?php if ( $button_type == 'text' ): ?>
    <span id="<?php echo esc_attr($id); ?>" class="play_audio <?php echo esc_attr($className); ?>" audiourl="<?php echo $audio; ?>">
	<svg viewBox="0 0 24 24"><path d="M9,11V5c0-1.7,1.3-3,3-3s3,1.3,3,3v6c0,1.7-1.3,3-3,3S9,12.7,9,11z M17,11c0,2.8-2.2,5-5,5s-5-2.2-5-5H5 c0,3.5,2.6,6.4,6,6.9V21h2v-3.1c3.4-0.5,6-3.4,6-6.9H17z"/></svg><?php echo $title; ?>

<?php else: ?>

<div class="image-audio-btn play_audio" audiourl="<?php echo $audio; ?>">
	    <div class="image-audio-link">
        <img class="audio-btn-img" style="background-image: url('<?php echo esc_url($thumb); ?>')"  src="<?php echo plugin_dir_url( __FILE__ ); ?>images/audio_thumb.gif"/>
        <div class="audio-title"><svg class="audio-play-btn" viewBox="0 0 24 24"> <path d="M12,2C6.5,2,2,6.5,2,12s4.5,10,10,10s10-4.5,10-10S17.5,2,12,2z M9.8,7.7c0-1.2,1-2.2,2.2-2.2 c1.2,0,2.2,1,2.2,2.2V12c0,1.2-1,2.2-2.2,2.2c-1.2,0-2.2-1-2.2-2.2V7.7z M12.7,17v2.2h-1.4V17c-2.5-0.4-4.3-2.5-4.3-5h1.4 c0,2,1.6,3.6,3.6,3.6c2,0,3.6-1.6,3.6-3.6h1.4C17.1,14.6,15.2,16.7,12.7,17z"/> </svg>
</div>
		</div>
		<div class="video-btn-img-title"><?php echo $title; ?></div>
    </div>

<?php endif; ?>
	
</span>	