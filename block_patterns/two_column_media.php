<?php function two_column_media_register_block_patterns() {

	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

                $content = '<!-- wp:columns {"className":"main-container","lock":{"move":false,"remove":false}} -->
<div class="wp-block-columns main-container"><!-- wp:column {"lock":{"move":true,"remove":false}} -->
<div class="wp-block-column"><!-- wp:acf/video-button {"id":"block_62631f828214a","name":"acf/video-button","data":{"button_type":"image","_button_type":"field_613b95fba846e","button_title":"","_button_title":"field_6066082aa79e4","select_video_source":"youtube","_select_video_source":"field_606606753de5f","resolution":"sixteen-nine-btn","_resolution":"field_606606753de9b","use_custom_thumbnail":"0","_use_custom_thumbnail":"field_622eb1baad7c9","youtube_id":"GKXS_YA9s7E","_youtube_id":"field_606606753ded6"},"align":"","mode":"auto","lock":{"move":false,"remove":false}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","lock":{"move":true,"remove":false}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"0px","top":"0px","right":"0px","left":"0px"}},"typography":{"textTransform":"capitalize"}}} -->
<h2 style="text-transform:capitalize;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:0px">Heading</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>When I was first asked to make a film about my nephew, Hubert Farnsworth, I thought "Why should I?" Then later, Leela made the film. But if I did make it, you can bet there would have been more topless women on motorcycles. Roll film!</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->';

		register_block_pattern(
			'two_column_media_block_pattern',
			array(
				'title'         => __( 'Two Column Media', 'textdomain' ),
				'description'   => __( 'A two column video layout.', 'Block pattern description', 'textdomain' ),
				'content'       => trim($content),
				'categories'    => array( 'acfcore' ),
				'keywords'      => array( 'cta, ACFCore' ),
                'viewportWidth' => 1400
			)
		);

	}

}
add_action( 'init', 'two_column_media_register_block_patterns' );
