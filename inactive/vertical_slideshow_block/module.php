<?php
// Create Block Attributes
	acf_register_block(array(
	'name'				=> 'vertical_slideshow',
	'title'				=> __('Vertical Slideshow'),
	'description'		=> __('Block for creating a vertical slideshow.'),
	'render_template'   => plugin_dir_path( __FILE__ ) . 'template.php',
	'post_types'        => array('presentation'),
	'mode'              => 'preview',
	'category'			=> 'acf-core-blocks',
	'multiple'          =>  false,
	'icon'				=> '<svg viewBox="0 0 24 24"><path d="M10,8v8l5-4L10,8z M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z "/></svg>',
	'keywords'			=> array( 'columns' ),
	//'enqueue_style'     =>  plugin_dir_url( __FILE__ ). 'css/styles.css',
    'enqueue_script'    =>  plugin_dir_url( __FILE__ ). 'js/scripts.js', array('jquery'), '1.0', true,
	
	'supports'		=> [
		'align'			=> false,
		'anchor'		=> true,
		'customClassName'	=> true,
		'customIdName'	=> true,
		'mode'          => true,
		'jsx' 			=> true,
	]
));

// Read local acf.json
$acf_json_data = ( plugin_dir_path( __FILE__ ) . 'acf.json' );
$custom_fields = $acf_json_data ? json_decode( file_get_contents( $acf_json_data ), true ) : array();
foreach ( $custom_fields as $custom_field ) {
   acf_add_local_field_group( $custom_field );
}