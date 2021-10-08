<?php
	// Create Block Attributes
	acf_register_block(array(
	'name'				=> 'featured_swiper_block',
	'title'				=> __('Featured Swiper Block'),
	'description'		=> __('Featured Swiper Block'),
	'mode'		        => 'preview',
	'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
	'category'			=> 'custom-blocks',
	'enqueue_style'     =>  plugin_dir_url( __FILE__ ). 'css/swiper.css',
	'enqueue_script'    =>  plugin_dir_url( __FILE__ ). 'js/swiper-bundle.min.js', array('jquery'), '1.0', true,
	'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 6h16v2H4zm2-4h12v2H6zm14 8H4c-1.1 0-2 .9-2 2v8c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-8c0-1.1-.9-2-2-2zm0 10H4v-8h16v8zm-10-7.27v6.53L16 16z"/></svg>',
	'keywords'			=> array( 'slider' ),
));


add_action('wp_footer', 'add_large_slider_layer');
function add_large_slider_layer(){
	wp_enqueue_script( 'lg_slider_js', plugin_dir_url( __FILE__ ). 'js/lg_slider.js', array('jquery'), '1.0', true );
	wp_enqueue_style( 'slider_mods_styles', plugin_dir_url( __FILE__ ). 'css/swiper_mods.css', true );
};


// Read local acf.json
$acf_json_data = ( plugin_dir_path( __FILE__ ) . 'acf.json' );
$custom_fields = $acf_json_data ? json_decode( file_get_contents( $acf_json_data ), true ) : array();
foreach ( $custom_fields as $custom_field ) {
   acf_add_local_field_group( $custom_field );
}