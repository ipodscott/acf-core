<?php
	// Create Block Attributes
	acf_register_block(array(
	'name'				=> 'video_button',
	'title'				=> __('Modal Video Button'),
	'description'		=> __('Block for modal video button'),
	'render_template'   => plugin_dir_path( __FILE__ ) . 'template.php',
	'mode'				=> 'preview',
	'category'			=> 'custom-blocks',
	'multiple'          => true,
	'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"/></svg>',
	'keywords'			=> array( 'slide' ),	
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