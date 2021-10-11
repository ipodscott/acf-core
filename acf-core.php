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
			
		if( function_exists('acf_add_local_field_group') ):
		
		acf_add_local_field_group(array(
			'key' => 'group_616426525ec81',
			'title' => 'ACF Core Settings',
			'fields' => array(
				array(
					'key' => 'field_616426650a4a0',
					'label' => 'Core Modules',
					'name' => 'core_modules',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 0,
					'layout' => 'block',
					'button_label' => '+ Add Module',
					'sub_fields' => array(
						array(
							'key' => 'field_6164267c0a4a1',
							'label' => 'Name',
							'name' => 'name',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '33.333',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_616426860a4a2',
							'label' => 'Slug',
							'name' => 'module_slug',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '33.333',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_616426960a4a3',
							'label' => 'Active State',
							'name' => 'active',
							'type' => 'true_false',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '33.333',
								'class' => '',
								'id' => '',
							),
							'message' => '',
							'default_value' => 0,
							'ui' => 1,
							'ui_on_text' => 'Inactive',
							'ui_off_text' => 'Active',
						),
					),
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-core-settings',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => '',
			'active' => true,
			'description' => '',
		));
		
		endif;
			
			
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