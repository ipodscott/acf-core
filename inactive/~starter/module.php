<?php
	// Create Block Attributes
	acf_register_block(array(
	'name'				=> 'starter_content_block',
	'title'				=> __('Starter Content Block'),
	'description'		=> __('Starter Content Block'),
	'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
	'category'			=> 'acf-core-blocks',
	'mode'			    => 'preview',
	'icon'				=> 'admin-site-alt3',
	'keywords'			=> array( 'starter' ),
	'enqueue_style'     =>  plugin_dir_url( __FILE__ ). 'css/style.css',
	'enqueue_script'    =>  plugin_dir_url( __FILE__ ). 'js/script.js', array(), '1.0', true,
	'supports'		=> [
		'mode'			=> true,
		'align'			=> true,
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
