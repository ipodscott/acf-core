<?php
/**
 * Block Name: Primary Content Block
 *
 * This is the template for Primary Content
 */


// create id attribute for specific styling
$id = $block['id'];
$classes = [''];
	
	if( !empty( $block['className'] ) )
	    $classes = array_merge( $classes, explode( ' ', $block['className'] ) );
		$anchor = '';
	if( !empty( $block['anchor'] ) )
		$anchor = '' . sanitize_title( $block['anchor'] ) . '';
		$container_width = get_field( 'container_width' );
		$attributes = get_field( 'attributes' );
?>

<div <?php echo $attributes; ?> class="<?php echo $container_width; ?> <?php echo '' . join( ' ', $classes ) . ''; ?>" name="<?php echo $anchor; ?>">
	 
    <?php echo '<InnerBlocks />';?>
	    	
</div>