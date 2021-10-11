<?php
	// Created Block Attributes
	acf_register_block(array(
	'name'				=> 'presentation_preview',
	'title'				=> __('Presentation Preview'),
	'description'		=> __('Block for previewing presentations. Requires slides based presentations directory.'),
	'render_template'   => plugin_dir_path( __FILE__ ) . 'template.php',
	'mode'              => 'auto',
	'category'			=> 'acf-core-blocks',
	'icon'				=> '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve"> 
	<path d="M21.4,1.6H2.6c-1.2,0-2.1,0.9-2.1,2.1v12.5c0,1.1,0.9,2.1,2.1,2.1h7.3v2.1H7.8v2.1h8.3v-2.1h-2v-2.1h1.8h5.5
		c1.2,0,2.1-0.9,2.1-2.1V3.7C23.5,2.5,22.6,1.6,21.4,1.6z M21.4,16.2h-5.2H2.6V3.7h18.8V16.2z"/>
	<polygon points="9.4,13.7 12,11.9 14.6,13.7 13.6,10.7 16.2,8.9 13,8.9 12,5.7 11,8.9 7.8,8.9 10.4,10.7 "/></svg> ',
	'keywords'			=> array( 'columns' ),
	'enqueue_style'     =>  plugin_dir_url( __FILE__ ). 'css/styles.css',
    'enqueue_script'    =>  plugin_dir_url( __FILE__ ). 'js/scripts.js', array('jquery'), '1.0', true,
	
	'supports'		=> [
		'align'			=> false,
		'anchor'		=> true,
		'customClassName'	=> true,
		'mode'          => true,
		]
));

add_action('wp_footer', 'add_preso_layer');
function add_preso_layer(){
	require_once( plugin_dir_path( __FILE__ ) . '/preso_loader.php');
};

// Read local acf.json
$acf_json_data = ( plugin_dir_path( __FILE__ ) . 'acf.json' );
$custom_fields = $acf_json_data ? json_decode( file_get_contents( $acf_json_data ), true ) : array();
foreach ( $custom_fields as $custom_field ) {
   acf_add_local_field_group( $custom_field );
}
