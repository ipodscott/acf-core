<?php
/**
 * Presentation Block
 *
 * This is the template for a creating a presentation.
 */
	
	// Create id attribute allowing for custom "anchor" value.
	$id =  $block['id'];
	if( !empty($block['anchor']) ) {
	    $id = $block['anchor'];
	}
	
	// Create class attribute allowing for custom "className" and "align" values.
	$className;
	if( !empty($block['className']) ) {
	    $className .= ' ' . $block['className'];
	}
	if( !empty($block['align']) ) {
	    $className .= ' align' . $block['align'];
	}	
	
	?>
	
	<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
		
		<?php
			$images = get_field('presentation_gallery');
			if( $images ): ?>
            <?php foreach( $images as $image ): ?>
          
              
                    <img src="<?php echo $image['url']; ?>"/>
             
			<?php endforeach; ?>
		<?php endif; ?>
		
	</div>