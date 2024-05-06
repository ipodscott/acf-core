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
	
	$video_type = get_field( 'video_type' );
	$video_url = get_field('video_url', $post_id);
	
?>

<?php if ( $video_type == 'internal_video_link' ): ?>
	<div class="video-btn  mp4-link standard-btn short-btn" vidurl="<?php echo $video_url; ?>">
		<span> Click To Play</span>
	</div>	
<?php endif; ?>

<?php if ( $video_type == 'movie_info' ): ?>
	<?php
	$movie_info = get_field('movie_info');
	if( $movie_info ): ?>
		
		<?php foreach( $movie_info as $featured_post ): 
			$permalink = get_permalink( $featured_post->ID );
			$title = get_the_title( $featured_post->ID );
			$excerpt = get_the_excerpt( $featured_post->ID );
			$release_date = get_field( 'release_date', $featured_post->ID );
			?>
			
			<div class="wp-block-group is-layout-flow wp-container-core-group-is-layout-14 wp-block-group-is-layout-flow" style="padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px">
			<div class="wp-block-group is-layout-constrained wp-container-core-group-is-layout-13 wp-block-group-is-layout-constrained">
			<a class="title_link" href="<?php echo $permalink; ?>"><h2 class="wp-block-heading fade-in-element visible" style="line-height:0.5"><?php echo $title; ?></h2></a>
			
			
			<p class="fade-in-element visible"><?php echo $release_date; ?></p>
			
			<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide fade-in-element visible" style="margin-top:5px;margin-bottom:5px;background-color:#666666;color:#666666">
			</div>
			
			<p class="fade-in-element"><?php echo $excerpt; ?></p>
			</div>
			
		<?php endforeach; ?>
	<?php endif; ?>	

<?php endif; ?>	

<?php if ( $video_type == 'movie_picker' ): ?>
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
				<img decoding="async" loading="lazy" class="vid-btn-img" style="background-image: url('<?php echo $feat_image;?>')" src="<?php echo plugin_dir_url( __FILE__ ); ?>images/video_thumb.webp">
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

<?php endif; ?>


<?php if ( $video_type == 'video_repeater' ): ?>
<div class="<?php $className;?> alignfull video-box fade-in-element" name="<?php echo $id; ?>">
	
	<?php if( have_rows('video_repeater') ): ?>
		
		<?php while( have_rows('video_repeater') ): the_row(); 
			$video_url = get_sub_field('video_url');
			$video_title = get_sub_field('title');
			?>
		
				<div class="video-btn  mp4-link standard-btn" vidurl="<?php echo $video_url; ?>">
					<span><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"><path d="M0 0h24v24H0V0z" fill="none"></path><path style="fill:#efefef;" d="M21 3H3c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.1-.9-2-2-2zm0 14H3V5h18v12z"></path></svg> <?php echo $video_title; ?></span>
				</div>
			
		<?php endwhile; ?>
		
	<?php endif; ?>
</div>
<?php endif; ?>