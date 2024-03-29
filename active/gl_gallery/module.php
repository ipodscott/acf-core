<?php

	// Create Block Attributes
	acf_register_block(array(
	'name'				=> 'gl_gallery_block',
	'title'				=> __('GL Gallery Block'),
	'description'		=> __('Block for GL Gallery slideshow'),
	'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
	'category'			=> 'acf-core-blocks',
	'icon'				=> 'format-gallery',
	'mode'				=> 'auto',
	'keywords'			=> array( 'columns' ),
	'enqueue_style'     =>  plugin_dir_url( __FILE__ ). 'css/glightbox.css',
	'enqueue_script'    =>  plugin_dir_url( __FILE__ ). 'js/glightbox.js', array(), '1.0', true,
	'supports'		=> [
		'align'			=> true,
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
