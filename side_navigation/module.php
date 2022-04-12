<?php
	// Create Block Attributes
	acf_register_block(array(
	'name'				=> 'Side Navigation',
	'title'				=> __('Side Navigation Block'),
	'description'		=> __('Side Navigation'),
	'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
	'category'			=> 'acf-core-blocks',
	'mode'			    => 'edit',
	'icon'				=> 'admin-site-alt3',
	'keywords'			=> array( 'starter' ),
	'supports'		=> [
		'mode'			=> false,
		'align'			=> false,
		'anchor'		=> true,
		'customClassName'	=> true
	]
));

// Read local acf.json
$acf_json_data = ( plugin_dir_path( __FILE__ ) . 'acf.json' );
$custom_fields = $acf_json_data ? json_decode( file_get_contents( $acf_json_data ), true ) : array();
foreach ( $custom_fields as $custom_field ) {
   acf_add_local_field_group( $custom_field );
}

if( ! function_exists( 'register_my_menu' ) ) {
	function register_my_menu() {
		register_nav_menu('main_menu',__( 'Main Menu' ));
	}
	add_action( 'init', 'register_my_menu' );
	
	wp_enqueue_style( 'side_navigation', plugin_dir_url( __FILE__ ) . 'css/style.css',true,'1.1','all' );
}