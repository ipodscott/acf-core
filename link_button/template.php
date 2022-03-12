<?php
/**
 * Modal Audo Block
 *
 * This is the template for a modal audio button.
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
	}
	
	
	$link_button = get_field('link_button');
	if( $link_button ): 
	    $link_url = $link_button['url'];
	    $link_title = $link_button['title'];
	    $link_target = $link_button['target'] ? $link_button['target'] : '_self';
     ?>
<?php endif; ?>
	
<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" id="<?php echo esc_attr($id); ?>" class="link-button <?php echo esc_attr($className); ?>">
	<svg viewBox="0 0 24 24"><path d="M6.2,20.2L8,22l10-10L8,2L6.2,3.8l8.2,8.2L6.2,20.2z"/></svg> <?php echo esc_html( $link_title ); ?>
</a>	