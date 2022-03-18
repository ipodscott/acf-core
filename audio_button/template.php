<?php
/**
 * Modal Audo Block
 *
 * This is the template for a modal audio button.
 */
 
 	if( ! function_exists('add_audio_layer') && ! function_exists('audio_btn_preview')) {
	
		
		add_action('wp_footer', 'add_audio_layer');
		function add_audio_layer(){
			wp_enqueue_style( 'play_css', plugin_dir_url( __FILE__ ). 'css/plyr.css',true,'1.1','all');
			wp_enqueue_style( 'plyr_mods_css', plugin_dir_url( __FILE__ ). 'css/plyr_mods.css',true,'1.1','all');
			wp_enqueue_style( 'audio_css', plugin_dir_url( __FILE__ ). 'css/styles.css',true,'1.1','all');
			wp_enqueue_script( 'audio_scripts', plugin_dir_url( __FILE__ ). 'js/scripts.js', array('jquery'), '1.0', true );
			wp_enqueue_script( 'plyr_js', plugin_dir_url( __FILE__ ). 'js/plyr.js', array('jquery'), '1.0', true );
			require_once( plugin_dir_path( __FILE__ ) . 'audio_layer.php');
		};
		
		
		function audio_btn_preview() 
		{ // Adds video styles to preview content in the backend.
		    wp_enqueue_style( 'audio_btn_preview_style', plugin_dir_url( __FILE__ ) . 'css/audio-btn.css',true,'1.1','all' );
		    wp_enqueue_style( 'audio_css', plugin_dir_url( __FILE__ ). 'css/styles.css',true,'1.1','all');
		}
		add_action('admin_footer', 'audio_btn_preview');		
	}
 

	
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