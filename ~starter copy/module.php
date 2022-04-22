<?php
	// Create Block Attributes
	acf_register_block(array(
	'name'				=> 'image_zoom_block',
	'title'				=> __('Image Zoom Block'),
	'description'		=> __('Image Zoom Block'),
	'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
	'category'			=> 'acf-core-blocks',
	'mode'			    => 'edit',
	'icon'				=> 'admin-site-alt3',
	'keywords'			=> array( 'starter' ),
	'supports'		=> [
		'align'			=> true,
		'anchor'		=> true,
		'customClassName'	=> true,
	]
));

// Read local acf.json
$acf_json_data = ( plugin_dir_path( __FILE__ ) . 'acf.json' );
$custom_fields = $acf_json_data ? json_decode( file_get_contents( $acf_json_data ), true ) : array();
foreach ( $custom_fields as $custom_field ) {
   acf_add_local_field_group( $custom_field );
}