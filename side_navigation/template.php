<?php
/**
 * Block Name: Starter Content Block
 *
 * This is the template for a Starter Content Block
 */


// create id attribute for specific styling
$id = $block['id'];
$classes = [''];
	
	if( !empty( $block['className'] ) )
	    $classes = array_merge( $classes, explode( ' ', $block['className'] ) );
		$anchor = '';
	if( !empty( $block['anchor'] ) )
		$anchor = '' . sanitize_title( $block['anchor'] ) . '';

?>

 <div class="menu-layer"></div>

 <svg class="menu-btn"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
        
 <div class="menu shadow">
 	<div class="menu-title">Main Menu</div>
 	
 	<div class="main-menu">
	 	<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
	</div>
            
    <i class="material-icons close-menu">close</i></div>
            
        
</div>