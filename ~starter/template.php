<?php
/**
 * Block Name: Starter Content Block
 *
 * This is the template for a Starter Content Block
 */

// Create id attribute allowing for custom "anchor" value.
	$id = $block['id'];
	if( !empty($block['anchor']) ) {
	    $id = $block['anchor'];
	}
	
	// Create class attribute allowing for custom "className" and "align" values.
	$className = '';
	if( !empty($block['className']) ) {
	    $className .= ' ' . $block['className'];
	}
	if( !empty($block['align']) ) {
		$className .= ' align' . $block['align'];
	} '';

?>

<div class="<?php $className;?> alignfull" name="<?php echo $id; ?>">
	<?php echo '<InnerBlocks />';?>
</div>