<?php
/**
 * Block Name: Starter Content Block
 *
 * This is the template for a Starter Content Block
 */


// create id attribute for specific styling
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
	
	$media_details = get_field( 'media_details' );
	$hero_copy = get_field('hero_copy', $post_id);
	$date_of_birth = get_field('date_of_birth', $post_id);
	$date_of_death = get_field('date_of_death', $post_id);
	$air_date = get_field('air_date', $post_id);
	$release_date = get_field('release_date', $post_id);
	$excerpt = get_the_excerpt( $featured_post->ID );
	
?>

<?php if ( $media_details == 'hero_copy' ): ?>
	<div class="hero-copy"><?php echo $hero_copy; ?></div>
<?php endif; ?>

<?php if ( $media_details == 'excerpt' ): ?>
	<div class="hero-copy"><?php echo $excerpt; ?></div>
<?php endif; ?>

<?php if ( $media_details == 'date_of_birth' ): ?>
	<span class="bio-date"><?php echo $date_of_birth; ?> -&nbsp;</span>
<?php endif; ?>

<?php if ( $media_details == 'date_of_death' ): ?>
	<span class="bio-date"><?php echo $date_of_death; ?></span>
<?php endif; ?>

<?php if ( $media_details == 'release_date' ): ?>
	<span class="air-date">Release Date: <?php echo $release_date; ?></span>
<?php endif; ?>

<?php if ( $media_details == 'air_date' ): ?>
	<span class="air-date">Air Date: <?php echo $air_date; ?></span>
<?php endif; ?>



<?php if ( $media_details == 'cast_and_crew' ): ?>
	<div>Cast and Crew:</div>
	<div class="cast-and-crew-links">
	<?php
	$cast_details = get_field('cast_and_crew');
	if( $cast_details ): ?>
		
		<?php foreach( $cast_details as $featured_post ): 
			$permalink = get_permalink( $featured_post->ID );
			$title = get_the_title( $featured_post->ID );
			?>
			<a class="cast-link" href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
		<?php endforeach; ?>
	<?php endif; ?>
	</div>
<?php endif; ?>


<?php if ( $media_details == 'related_tv' ): ?>
	<div>Related:</div>
	<div class="cast-and-crew-links">
	<?php
	$tv_details = get_field('related_tv_shows');
	if( $tv_details ): ?>
		
		<?php foreach( $tv_details as $featured_post ): 
			$permalink = get_permalink( $featured_post->ID );
			$title = get_the_title( $featured_post->ID );
			?>
			<a class="cast-link" href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
		<?php endforeach; ?>
	<?php endif; ?>
	</div>
<?php endif; ?>