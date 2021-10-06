<?php
	// Create Block Attributes
	$block_folder = basename(dirname(__FILE__));
	$block_path =  '/acf-blocks/' . $block_folder;
	acf_register_block(array(
	'name'				=> 'gallery_block',
	'title'				=> __('Gallery Block'),
	'description'		=> __('Block for gallery slideshow'),
	'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
	'category'			=> 'custom-blocks',
	'icon'				=> 'format-gallery',
	'keywords'			=> array( 'columns' ),
	'enqueue_style'     =>  plugin_dir_url( __FILE__ ). 'css/jquery.fancybox.min.css',
	'enqueue_script'    =>  plugin_dir_url( __FILE__ ). '/js/jquery.fancybox.min.js', array('jquery'), '1.0', true,
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