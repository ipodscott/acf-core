<?php

/*
Plugin Name: ACF Core
Plugin URI: https://scottsaunders.design
Description: Add ACF Core Gutenberg Blocks.
Version: 1.0
Author: Scott Saunders
Author URI: https://scottsaunders.design
License: GPLv2 or later
Text Domain: scottsaunders.design
*/		

// Add Blocks	
	add_action('acf/init', 'my_acf_init');
	
		function my_acf_init() {
			
			//Add ACF Options
			include_once('block_settings.php');
			
			include_once 'primary_content_block/module.php';
			
			// check function exists
			if( function_exists('acf_register_block') ) {				
				$rows = get_field('core_modules', 'options');
				if( $rows ) {
				    foreach( $rows as $row ) {
				       $module_slug = $row['module_slug'];
				       $active_state = $row['active'];
				       
					       if( !$active_state ) {
						        include_once $module_slug.'/module.php';
							}				       
				    }
				    
				}
			}
		}
		
			
// Add Block Categories	
		
function my_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'acf-core-blocks',
				'title' => __( 'ACFCore Blocks', 'acf-core-blocks' ),
				'icon'  => 'layout',
			),
		)
	);
	
	  array_unshift( $categories );
  return $categories;
}
add_filter( 'block_categories', 'my_block_category',  3, 2);

//Add Core Options

add_action('acf/init', 'add_acf_core_options');
		function add_acf_core_options() {
	
	acf_add_options_page(array(
		'page_title' 	=> 'ACFCore',
		'menu_title'	=> 'ACFCore',
		'menu_slug' 	=> 'acf-core-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}