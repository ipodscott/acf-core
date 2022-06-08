<?php
	// Created Block Attributes
	acf_register_block(array(
	'name'				=> 'audio_button',
	'title'				=> __('Audio Button'),
	'description'		=> __('Block for audio button'),
	'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
	'category'			=> 'acf-core-blocks',
	'mode'			    => 'preview',
	'icon'				=> 'controls-volumeon',
	'keywords'			=> array( 'columns' ),
	'supports'		=> [
		'align'			=> false,
		'anchor'		=> true,
		'customClassName'	=> true,
		'mode'          => true,
		]
));

 if( ! function_exists('add_audio_layer') && ! function_exists('audio_btn_preview')) {

	
	add_action('wp_footer', 'add_audio_layer');
	function add_audio_layer(){
		wp_enqueue_style( 'play_css', plugin_dir_url( __FILE__ ). 'css/plyr.css',true,'1.1','all');
		wp_enqueue_style( 'plyr_mods_css', plugin_dir_url( __FILE__ ). 'css/plyr_mods.css',true,'1.1','all');
		wp_enqueue_script( 'audio_scripts', plugin_dir_url( __FILE__ ). 'js/scripts.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'plyr_js', plugin_dir_url( __FILE__ ). 'js/plyr.js', array('jquery'), '1.0', true );
		require_once( plugin_dir_path( __FILE__ ) . 'audio_layer.php');
	};
	
	
	function audio_btn_preview() 
	{ // Adds video styles to preview content in the backend.
		wp_enqueue_style( 'audio_btn_preview_style', plugin_dir_url( __FILE__ ) . 'css/audio-btn.css',true,'1.1','all' );
		wp_enqueue_style( 'plyr_mods_css', plugin_dir_url( __FILE__ ). 'css/plyr_mods.css',true,'1.1','all');
		wp_enqueue_style( 'play_css', plugin_dir_url( __FILE__ ). 'css/plyr.css',true,'1.1','all');
	}
	add_action('admin_footer', 'audio_btn_preview');		
}


// Read local acf.json
$acf_json_data = ( plugin_dir_path( __FILE__ ) . 'acf.json' );
$custom_fields = $acf_json_data ? json_decode( file_get_contents( $acf_json_data ), true ) : array();
foreach ( $custom_fields as $custom_field ) {
   acf_add_local_field_group( $custom_field );
}