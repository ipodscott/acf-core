<?php
// Slide Block
acf_register_block( array(
   'name'            => 'slide',
   'title'           => __( 'Slide' ),
   'description'     => __( 'Slide description' ),
   'render_template' => plugin_dir_path( __FILE__ ) . 'template.php',
   'mode'            => 'preview',
   'category'        => 'custom-blocks',
   'multiple'        => true,
   'icon'            => 'slides',
   'keywords'        => array( 'accordion' ),
   'enqueue_style'     =>  plugin_dir_url( __FILE__ ). 'css/style.css',
   'enqueue_script'    =>  plugin_dir_url( __FILE__ ). 'js/script.js', array('jquery'), '1.0', true,
   array( 'jquery' ),
   '1.0',
   true,
   'supports'        => [
	  'mode'           => false,
      'align'           => false,
      'anchor'          => true,
      'customClassName' => true,
      'jsx'             => true,
   ]
) );
// Read local acf.json
$acf_json_data = ( plugin_dir_path( __FILE__ ) . 'acf.json' );
$custom_fields = $acf_json_data ? json_decode( file_get_contents( $acf_json_data ), true ) : array();