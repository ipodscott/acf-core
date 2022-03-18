<?php
/**
 * Big Book Content
 *
 * This is the template for a Big Book.
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
	
	$block_id = get_field( 'block_id' );
	$block_slug = '' . sanitize_title( $block_id ) . '';
	$main_image = get_field( 'main_image' );
	$title = get_field( 'title' );	
	$sub_title = get_field( 'sub_title' );
	$show_hide_titles = get_field ( 'show_hide_titles' );		
	?>
	
	
	

	
	<div class="content big-book-slide" data-content="<?php echo $block_slug; ?>">
		
		<div class="main-copy">
			<?php if( $show_hide_titles ): ?> <h2 class="default-header"><?php echo $title; ?><span><?php echo $sub_title; ?></span></h2><?php endif; ?>
			<?php echo '<InnerBlocks />';?>
		</div>
	
	</div>