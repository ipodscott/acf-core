<?php
	// Created Block Attributes
	acf_register_block(array(
	'name'				=> 'link_button',
	'title'				=> __('Link Button'),
	'description'		=> __('Block for link button'),
	'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
	'category'			=> 'acf-core-blocks',
	'mode'			    => 'preview',
	'icon'				=> 'admin-links',
	'keywords'			=> array( 'columns' ),
	'enqueue_style'     =>  plugin_dir_url( __FILE__ ). 'css/styles.css',
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