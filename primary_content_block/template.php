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

?>


<div data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="true" class="<?php echo '' . join( ' ', $classes ) . ''; ?>" name="<?php echo $anchor; ?>">
    <div class="main-container">
	    <div class="row">
        	<?php echo '<InnerBlocks />';?>
	    </div>
	</div>
</div>