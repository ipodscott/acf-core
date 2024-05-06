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