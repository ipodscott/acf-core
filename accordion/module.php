<?php
// Create Block Attributes
acf_register_block( array(
   'name'            => 'accordion',
   'title'           => __( 'Accordion' ),
   'description'     => __( 'Accordion description' ),
   'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
   'mode'            => 'preview',
   'category'        => 'custom-blocks',
   'multiple'        => true,
   'icon'            => 'align-pull-left',
   'keywords'        => array( 'accordion' ),
   array( 'jquery' ),
   '1.0',
   true,
   'supports'        => [
      'align'           => false,
      'anchor'          => true,
      'customClassName' => true,
      'jsx'             => true,
   ]
) );


if( ! function_exists('accordion_preview')) {
	 	
		// Add Accordion CSS and JS 
		wp_enqueue_style( 'accordion_style', plugin_dir_url( __FILE__ ) . 'css/style.css',true,'1.1','all' );
		wp_enqueue_script( 'accordion_js', plugin_dir_url( __FILE__ ) .  'js/script.js', array('jquery'), '1.0', true );
		
		function accordion_preview() 
		{ // Add accordion preview content in the backend.
		    wp_enqueue_style( 'accordion_preview_style', plugin_dir_url( __FILE__ ) . 'css/style.css',true,'1.1','all' );
		}
		add_action('admin_footer', 'accordion_preview');	
	}

// Read local acf.json
$acf_json_data = ( plugin_dir_path( __FILE__ ) . 'acf.json' );
$custom_fields = $acf_json_data ? json_decode( file_get_contents( $acf_json_data ), true ) : array();
foreach ( $custom_fields as $custom_field ) {
   acf_add_local_field_group( $custom_field );
}