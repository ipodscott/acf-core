<?php
	// Created Block Attributes
	acf_register_block(array(
	'name'				=> 'audio_button',
	'title'				=> __('Audio Button'),
	'description'		=> __('Block for audio button'),
	'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
	'category'			=> 'custom-blocks',
	'mode'			    => 'preview',
	'icon'				=> 'controls-volumeon',
	'keywords'			=> array( 'columns' ),
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