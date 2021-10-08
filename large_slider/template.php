<?php
/**
 * Block Name: Swiper Box
 *
 * This is the template that displays a swiper.
 */
// create id attribute for specific styling
$id = $block['id'];
?>

	<div class="big-slider featured-swiper-container">
	    <div class="swiper-wrapper">
		    
		    
		    
<?php while(has_sub_field("slide_selector")): ?>
	<?php if(get_row_layout() == "library_slide"):?>
	
	
				<?php 
				    $posts = get_sub_field('video_slide');
					if( $posts ): ?>
					
					<?php foreach( $posts as $p ): // variable must NOT be called $post (IMPORTANT) ?>
					    <div class="swiper-slide">
							<div class="slide-inside bg-1" style="background-image: url(<?php the_field('slider_image', $p->ID);?>);">
								<div class="slide-overlay">
									<a class="slide-details fadey-fast move-down" href="<?php the_permalink($p->ID);?>">
										<div class="slide-title"><div class="left-title"></div><div class="borders"><?php the_field('slide_title', $p->ID);?></div><div class="right-title"></div></div>
										<div class="slide-copy"><?php the_field('display_copy', $p->ID);?></div>
										<div class="slide-button">= <?php the_field('button_title', $p->ID);?> =</div>
									</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
												
				<?php endif; ?>
	 		 
			<?php elseif(get_row_layout() == "custom_slide"):?>
	 			
	 				<div class="swiper-slide">
						<div class="slide-inside bg-1" style="background-image: url(<?php the_sub_field('image');?>);">
							<div class="slide-overlay">
								<a <?php if( get_sub_field('open_in_new_tab') ): ?> target="_blank" <?php endif; ?> class="slide-details fadey-fast move-down" href="<?php the_sub_field('link_url');?>">
									<div class="slide-title"><div class="left-title"></div><div class="borders"><?php the_sub_field('title');?></div><div class="right-title"></div></div>
									<div class="slide-copy"><?php the_sub_field('copy');?></div>
									<div class="slide-button">= <?php the_sub_field('link_title');?> =</div>
								</a>
							</div>
						</div>
					</div>
			 
				
	<?php endif; ?>
<?php endwhile; ?>
			
    </div>
    
	<div class="next-slide"><div class="swiper-button-next"></div></div>
    <div class="prev-slide"><div class="swiper-button-prev"></div></div>
  </div>
  