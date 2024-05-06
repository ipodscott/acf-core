<?php
$movie_picker = get_field('movie_picker');
if( $movie_picker ): ?>
	
	<?php foreach( $movie_picker as $featured_post ): 
		$permalink = get_permalink( $featured_post->ID );
		$title = get_the_title( $featured_post->ID );
		$video_url = get_field( 'video_url', $featured_post->ID );
		$feat_image = wp_get_attachment_url( get_post_thumbnail_id( $featured_post->ID ) );
		?>
		
		<div id="block_98ff0ba0b6e15cdf478dca4776a6813e" class="image-vid-btn fade-in-element visible">
				<div class="image-vid-link mp4-link standard-btn" vidurl="<?php echo $video_url; ?>">
				<img decoding="async" loading="lazy" class="vid-btn-img" style="background-image: url('<?php echo $feat_image;?>')" src="<?php echo plugin_dir_url( __FILE__ ); ?>../images/video_thumb.webp">
				<div class="vid-title">
		<svg class="vid-btn-icon" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 48 48">
		<path d="M45.9,14.6c-1.2-2.9-3-5.4-5.1-7.7c-2.1-2.2-4.7-3.8-7.6-5.1S27.2,0,23.9,0c-3.2,0-6.3,0.6-9.3,1.9S9.2,4.8,7,6.9
			s-3.8,4.7-5.1,7.7S0,20.6,0,23.9c0,3.2,0.6,6.3,1.9,9.3c1.3,3,3,5.5,5.1,7.7c2.1,2.2,4.7,3.8,7.6,5.1s6,1.9,9.3,1.9s6.4-0.6,9.3-1.9
			s5.4-3,7.6-5.1c2.1-2.2,3.8-4.7,5.1-7.7s1.9-6,1.9-9.3C47.8,20.6,47.2,17.5,45.9,14.6z M38.2,38.3c-3.9,4-8.7,6-14.3,6
			s-10.4-2-14.3-6s-6-8.7-6-14.4s2-10.5,6-14.4c3.9-4,8.7-6,14.3-6s10.5,2,14.3,6s6,8.7,6,14.4S42.1,34.4,38.2,38.3z M18.1,13.8
			L34,23.9L18.1,34.1V13.8z"></path>
		</svg>
		</div>
				</div>
				
					</div>
		
	<?php endforeach; ?>
<?php endif; ?>	
