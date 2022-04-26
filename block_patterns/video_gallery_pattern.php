<?php 
	function register_block_pattern_gallery() {

	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

                $content = '<!-- wp:group -->
<div class="wp-block-group"><!-- wp:columns {"className":"main-container"} -->
<div class="wp-block-columns main-container"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_62631f828214a","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"youtube","_select_video_source":"field_606606753de5f","resolution":"sixteen-nine-btn","_resolution":"field_606606753de9b","use_custom_thumbnail":"0","_use_custom_thumbnail":"field_622eb1baad7c9","youtube_id":"GKXS_YA9s7E","_youtube_id":"field_606606753ded6"},"align":"","mode":"auto"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0px","top":"0px","right":"0px","left":"0px"}},"typography":{"textTransform":"capitalize"}}} -->
<h2 style="text-transform:capitalize;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">Heading</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>When I was first asked to make a film about my nephew, Hubert Farnsworth, I thought "Why should I?" Then later, Leela made the film. But if I did make it, you can bet there would have been more topless women on motorcycles. Roll film!</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"reverse-columns main-container"} -->
<div class="wp-block-columns reverse-columns main-container"><!-- wp:column {"className":"reverse-columns"} -->
<div class="wp-block-column reverse-columns"><!-- wp:acf/video-button {"id":"block_626315804199d","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"youtube","_select_video_source":"field_606606753de5f","resolution":"sixteen-nine-btn","_resolution":"field_606606753de9b","use_custom_thumbnail":"0","_use_custom_thumbnail":"field_622eb1baad7c9","youtube_id":"8bpZg8V3Onk","_youtube_id":"field_606606753ded6"},"align":"","mode":"auto"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
<p>When I was first asked to make a film about my nephew, Hubert Farnsworth, I thought "Why should I?" Then later, Leela made the film. But if I did make it, you can bet there would have been more topless women on motorcycles. Roll film!</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"className":"main-container"} -->
<div class="wp-block-columns main-container"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_6263224e58deb","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"youtube","_select_video_source":"field_606606753de5f","resolution":"sixteen-nine-btn","_resolution":"field_606606753de9b","use_custom_thumbnail":"0","_use_custom_thumbnail":"field_622eb1baad7c9","youtube_id":"GKXS_YA9s7E","_youtube_id":"field_606606753ded6"},"align":"","mode":"auto"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
<p>When I was first asked to make a film about my nephew, Hubert Farnsworth, I thought "Why should I?" Then later, Leela made the film. But if I did make it, you can bet there would have been more topless women on motorcycles. Roll film!</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->';

		register_block_pattern(
			'gallery_block_pattern',
			array(
				'title'         => __( 'Video Block Pattern', 'textdomain' ),
				'description'   => __( 'with a video gallery', 'Block pattern description', 'textdomain' ),
				'content'       => trim($content),
				'categories'    => array( 'acfcore' ),
				'keywords'      => array( 'cta, ACFCore' ),
                                'viewportWidth' => 1400
			)
		);

	}

}
add_action( 'init', 'register_block_pattern_gallery' );
