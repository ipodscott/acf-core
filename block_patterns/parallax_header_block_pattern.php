<?php function parallax_register_block_patterns() {

	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

                $content = '<!-- wp:acf/parallax-header-block {"id":"block_626702789a3c7","name":"acf/parallax-header-block","data":{"field_61905390c1268":{"row-0":{"field_619029b7ae65e":"139","field_61902ced52eca":"bg-down-2","field_61902e2352ecb":"1","field_61902c9c52ec9":"0.7"}},"field_61906c5fead48":"0","field_61906cd2ead4a":"vertical height","field_61906ea4ead4b":"100vh"},"align":"","mode":"preview"} -->
<!-- wp:heading {"textAlign":"left","fontSize":"x-large"} -->
<h2 class="has-text-align-left has-x-large-font-size">BLADE RUNNER: THE FINAL CUT</h2>
<!-- /wp:heading -->
<!-- /wp:acf/parallax-header-block -->';

		register_block_pattern(
			'parallax_block_pattern',
			array(
				'title'         => __( 'Parallax Header Template', 'textdomain' ),
				'description'   => __( 'A pre-made parallax temmplate.', 'Block pattern description', 'textdomain' ),
				'content'       => trim($content),
				'categories'    => array( 'acfcore' ),
				'keywords'      => array( 'cta, ACFCore' ),
                'viewportWidth' => 1400
			)
		);

	}

}
add_action( 'init', 'parallax_register_block_patterns' );
