
<?php
	//Change Function Name
	function template_register_block_patterns() {

	if ( class_exists( 'WP_Block_Patterns_Registry' ) ) {

                $content = 'Copied Block Content Goes Here';

		register_block_pattern(
			//Change Below
			'template_block_pattern',
			array(
				'title'         => __( 'Call to Action Gallery', 'textdomain' ),
				'description'   => __( 'A call to action with a beautiful two-column gallery below.', 'Block pattern description', 'textdomain' ),
				'content'       => trim($content),
				'categories'    => array( 'acfcore' ),
				'keywords'      => array( 'cta, ACFCore' ),
                'viewportWidth' => 1400
			)
		);

	}

}

//Change name to match the function name on line 4
add_action( 'init', 'template_register_block_patterns' );
