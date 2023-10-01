<?php
	// Create Block Attributes
	acf_register_block(array(
	'name'				=> 'parallax_header_block',
	'title'				=> __('Parallax Header Block'),
	'description'		=> __('Parallax Header Block'),
	'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
	'category'			=> 'acf-core-blocks',
	'mode'			    => 'preview',
	'icon'				=> 'superhero',
	'keywords'			=> array( 'header' ),
	'enqueue_style'     =>  plugin_dir_url( __FILE__ ). 'css/parallax.css',
	'enqueue_script'    =>  plugin_dir_url( __FILE__ ). 'js/parallax.js', array('jquery'), '1.0', true,
	'supports'		=> [
		'mode' => 'auto',
		'align' => array( 'full' ),
		'anchor'		=> true,
		'customClassName'	=> true,
		'jsx' 			=> true,
	]
));

// Read local acf.json
$acf_json_data = ( plugin_dir_path( __FILE__ ) . 'acf.json' );
$custom_fields = $acf_json_data ? json_decode( file_get_contents( $acf_json_data ), true ) : array();
foreach ( $custom_fields as $custom_field ) {
   acf_add_local_field_group( $custom_field );
}