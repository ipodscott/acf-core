<?php
	// Create Block Attributes
	acf_register_block(array(
	'name'				=> 'media_details',
	'title'				=> __('Media Details'),
	'description'		=> __('Media Details'),
	'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
	'category'			=> 'acf-core-blocks',
	'mode'			    => 'edit',
	'icon'				=> 'admin-site-alt3',
	'keywords'			=> array( 'starter' ),
	'enqueue_style'     =>  plugin_dir_url( __FILE__ ). 'style.css',
	//'enqueue_script'    =>  plugin_dir_url( __FILE__ ). 'script.js', array(), '1.0', true,
	'supports'		=> [
		'align'			=> false,
		'anchor'		=> true,
		'customClassName'	=> true,
		'mode'          => true,
	]
));

// Read local acf.json
$acf_json_data = ( plugin_dir_path( __FILE__ ) . 'acf.json' );
$custom_fields = $acf_json_data ? json_decode( file_get_contents( $acf_json_data ), true ) : array();
foreach ( $custom_fields as $custom_field ) {
   acf_add_local_field_group( $custom_field );
}