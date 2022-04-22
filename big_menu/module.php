<?php
	// Create Block Attributes
	acf_register_block(array(
	'name'				=> 'Big Menu',
	'title'				=> __('Big Menu'),
	'description'		=> __('Fullpage Menu'),
	'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
	'category'			=> 'acf-core-blocks',
	'mode'			    => 'edit',
	'icon'				=> 'menu',
	'keywords'			=> array( 'menu' ),
	'supports'		=> [
		'mode'			=> true,
		'align'			=> false,
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

