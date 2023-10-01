<?php
	// Created Block Attributes
	acf_register_block(array(
	'name'				=> 'dual_link_button',
	'title'				=> __('Dual Link Button'),
	'description'		=> __('Block for a dual link button'),
	'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
	'category'			=> 'acf-core-blocks',
	'mode'			    => 'preview',
	'icon'				=> '<svg viewBox="0 0 24 24"> <path d="M22,12c0,1.1-0.3,2.1-0.9,2.9c-0.1-1-0.4-1.8-1-2.5c0-0.1,0-0.2,0-0.4c0-1.7-1.4-3.1-3.1-3.1h-4V7h4C19.8,7,22,9.2,22,12z M3.9,12c0-1.7,1.4-3.1,3.1-3.1h4V7H7c-2.8,0-5,2.2-5,5s2.2,5,5,5h4v-1.9H7C5.3,15.1,3.9,13.7,3.9,12z M15.2,11H8v2h4.7
	C13.3,12.1,14.1,11.4,15.2,11z M20.1,15.2c0,1.9-1.5,3.4-3.4,3.4s-3.4-1.5-3.4-3.4s1.5-3.4,3.4-3.4S20.1,13.3,20.1,15.2z M17.9,16.5 h-1.3v0l0.3-0.3c0.5-0.5,1-1.2,1-2c0-0.6-0.3-1.3-1.4-1.3c-0.4,0-0.8,0.1-1.1,0.3l0.2,0.8c0.2-0.1,0.4-0.2,0.7-0.2
	c0.4,0,0.6,0.2,0.6,0.5c0,0.6-0.4,1.1-1,1.8l-0.5,0.6v0.7h2.6V16.5z"/>
</svg>',
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
