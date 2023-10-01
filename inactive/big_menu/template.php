<?php
/**
 * Block Name: Starter Content Block
 *
 * This is the template for a Starter Content Block
 */


if( ! function_exists('big_menu_scripts_styles')) {
	
		// Add Video CSS and JS 
		wp_enqueue_style( 'big_menu_style', plugin_dir_url( __FILE__ ) . 'css/style.css',true,'1.1','all' );
		wp_enqueue_script( 'big_menu.js', plugin_dir_url( __FILE__ ) .  'js/script.js', array('jquery'), '1.0', true );
		
		function big_menu_preview() 
		{ // Adds video styles to preview content in the backend.
		    wp_enqueue_style( 'big_menu_preview', plugin_dir_url( __FILE__ ) . 'css/preview.css',true,'1.1','all' );
		}
		add_action('admin_footer', 'big_menu_preview');	
	}

// create id attribute for specific styling
$id = $block['id'];
$classes = [''];
	
	if( !empty( $block['className'] ) )
	    $classes = array_merge( $classes, explode( ' ', $block['className'] ) );
		$anchor = '';
	if( !empty( $block['anchor'] ) )
		$anchor = '' . sanitize_title( $block['anchor'] ) . '';

?>



       
   <div class="big-menu-overlay">
	   <div class="big-menu-box">
	   	<?php echo '<InnerBlocks />';?>
	   </div>
	   
	     <svg class="close-big-menu" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" >
		<path style="fill:#fff;" d="M19,6.4L17.6,5L12,10.6L6.4,5L5,6.4l5.6,5.6L5,17.6L6.4,19l5.6-5.6l5.6,5.6l1.4-1.4L13.4,12L19,6.4z"/>
	</svg>

   </div>
   <div class="big-menu-btn">
		<div>
		   <span></span>
		   <span></span>
		   <span></span>
		</div>
   </div>   	
  <!--Open Big menu--> 

         
   
  


