<?php
/**
 * Gallery Block
 *
 * This is the template for a Gallery Block.
 */

	
	
// Create id attribute allowing for custom "anchor" value.
$id = $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'gallery';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$gallery_name = get_field('gallery_name');

$gallery_name = preg_replace('/\s*/', '', $gallery_name);
// convert the string to all lowercase
$gallery_name = strtolower($gallery_name);

	?>

<div class="<?php echo esc_attr($className); ?>" name="">
	<div class="gallery-title"><?php the_field('gallery_name');?></div>
	<?php 
$images = get_field('gallery');
if( $images ): ?>
   <div  id="<?php echo esc_attr($id); ?>" class="gl-gallery <?php echo esc_attr($className); ?>">
        <?php foreach( $images as $image ): ?>
        
                    <a href="<?php echo esc_url($image['url']); ?>" class="glightbox">
                        <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </a>
             
        <?php endforeach; ?>
    </div

<?php endif; ?>
</div>