<?php
	// Created Block Attributes
	acf_register_block(array(
	'name'				=> 'audio_button',
	'title'				=> __('Audio Button'),
	'description'		=> __('Block for audio button'),
	'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
	'category'			=> 'custom-blocks',
	'mode'			    => 'auto',
	'icon'				=> 'controls-volumeon',
	'keywords'			=> array( 'columns' ),
	'enqueue_style'     =>  plugin_dir_url( __FILE__ ). 'css/styles.css',
	'enqueue_script'    =>  plugin_dir_url( __FILE__ ). 'js/scripts.js',
	'supports'		=> [
		'align'			=> false,
		'anchor'		=> true,
		'customClassName'	=> true,
		'mode'          => true,
		]
));

add_action('wp_footer', 'add_audio_layer');
function add_audio_layer(){
	wp_enqueue_style( 'audio_css', plugin_dir_url( __FILE__ ). 'css/plyr.css',true,'1.1','all');
	wp_enqueue_style( 'audio_mods_css', plugin_dir_url( __FILE__ ). 'css/plyr_mods.css',true,'1.1','all');
	wp_enqueue_script( 'plyr_js', plugin_dir_url( __FILE__ ). 'js/plyr.js', array('jquery'), '1.0', true );
	require_once( plugin_dir_path( __FILE__ ) . 'audio_layer.php');
};

// Read local acf.json
$acf_json_data = ( plugin_dir_path( __FILE__ ) . 'acf.json' );
$custom_fields = $acf_json_data ? json_decode( file_get_contents( $acf_json_data ), true ) : array();
foreach ( $custom_fields as $custom_field ) {
   acf_add_local_field_group( $custom_field );
}