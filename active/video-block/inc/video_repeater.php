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