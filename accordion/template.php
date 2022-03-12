<?php
/**
 * Modal Video Block
 *
 * This is the template for a modal video button.
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
	
	$active_state = get_field('active');
	?>
<div class="acc-head <?php echo $className; ?> <?php if( $active_state ): ?>active <?php endif; ?>" id="<?php echo $id; ?>">
	<?php the_field( 'accordion_header' );?>
	
	<svg class="toggle-off"><path class="st0" d="M9.4,6.3c0,1.7-1.3,3-3,3s-3-1.3-3-3s1.3-3,3-3S9.4,4.6,9.4,6.3z M22.4,6.3c0,3.3-2.7,6-6,6h-10 c-3.3,0-6-2.7-6-6s2.7-6,6-6h10C19.7,0.3,22.4,3,22.4,6.3z M20.4,6.3c0-2.2-1.8-4-4-4h-10c-2.2,0-4,1.8-4,4s1.8,4,4,4h10 C18.6,10.3,20.4,8.5,20.4,6.3z"/></svg>
	
	<svg class="toggle-on">
		<path d="M19.4,6.3c0,1.7-1.3,3-3,3s-3-1.3-3-3s1.3-3,3-3C18.1,3.3,19.4,4.6,19.4,6.3z M22.4,6.3c0,3.3-2.7,6-6,6h-10 c-3.3,0-6-2.7-6-6s2.7-6,6-6h10C19.7,0.3,22.4,3,22.4,6.3z M20.4,6.3c0-2.2-1.8-4-4-4h-10c-2.2,0-4,1.8-4,4s1.8,4,4,4h10 C18.6,10.3,20.4,8.5,20.4,6.3z"/>
	</svg>
</div>
<div class="acc-body <?php if( $active_state ): ?>active <?php endif; ?>"><?php echo '<InnerBlocks />';?></div>