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
	
	$image = get_field('image');
	$url = get_field ('url');
	$mobile_download_link = get_field ('mobile_download_link');
	 ?>

	


<?php 
	if( !empty( $mobile_download_link ) ): ?>
   
   <a class="mobile-preso" href="<?php echo $mobile_download_link; ?>"  target="_blank"><img class="book-image" src="<?php echo esc_url($image['url']); ?>"/></a>
   
   <?php 
	if( !empty( $image ) ): ?>
    <img data-aos="fade-in" data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" presoUrl="<?php echo $url; ?>" id="<?php echo esc_attr($id); ?>" class="desk-preso book-image preso-link<?php echo esc_attr($className); ?>" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
     <p class="mobile-preso-title"><a href="<?php echo $mobile_download_link; ?>" target="_blank">Download <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><g><rect fill="none" height="24" width="24"/></g><g><path d="M18,15v3H6v-3H4v3c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-3H18z M17,11l-1.41-1.41L13,12.17V4h-2v8.17L8.41,9.59L7,11l5,5 L17,11z"/></g></svg></a></p>
<?php endif; ?>

   
   <?php  else: ?>
   
   <?php 
	if( empty( $mobile_download_link ) ): ?>
    <img presoUrl="<?php echo $url; ?>" id="<?php echo esc_attr($id); ?>" class="book-image show-desk-preso preso-link<?php echo esc_attr($className); ?>" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a>
   
<?php endif; ?>
   
<?php endif; ?>


