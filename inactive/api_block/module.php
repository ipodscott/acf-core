<?php
	// API Block Modules
	acf_register_block(array(
	'name'				=> 'api_block_module',
	'title'				=> __('API Block Module'),
	'description'		=> __('API Block Module Description'),
	'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
	'category'			=> 'acf-core-blocks',
	'mode'			    => 'preview',
	'icon'				=> 'admin-site-alt3',
	'keywords'			=> array( 'starter' ),
	'enqueue_style'     =>  plugin_dir_url( __FILE__ ). 'css/api_block.css',
	'enqueue_script'    =>  plugin_dir_url( __FILE__ ). 'js/api_block.js', array('jquery'), '1.0', true,
	'supports'		=> [
		'align'			=> true,
		'anchor'		=> true,
		'customClassName'	=> true,
		'jsx' 			=> true,
	]
));

if( ! function_exists('enqueue_jquery') ) {
	function enqueue_jquery() {
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js', array(), null, false);
	}
	add_action('wp_enqueue_scripts', 'enqueue_jquery');
}

// Read local acf.json
$acf_json_data = ( plugin_dir_path( __FILE__ ) . 'acf.json' );
$custom_fields = $acf_json_data ? json_decode( file_get_contents( $acf_json_data ), true ) : array();
foreach ( $custom_fields as $custom_field ) {
   acf_add_local_field_group( $custom_field );
}