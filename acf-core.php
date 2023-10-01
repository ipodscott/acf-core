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

function prefix_add_acf_footer_styles()
{
    wp_enqueue_style("acf_styles", plugins_url("css/acf-blocks.css", __FILE__));
}
add_action("get_footer", "prefix_add_acf_footer_styles");

add_action("acf/init", "my_acf_init");
function my_acf_init()
{
    // Register ACF blocks from directories containing 'module.php' within 'active' directory
    $active_directory = __DIR__ . '/active/';
    if (is_dir($active_directory)) {
        $block_directories = glob($active_directory . '*/module.php');
        foreach ($block_directories as $module_file) {
            include_once $module_file;
        }
    }
}

function my_plugin_block_categories($categories, $post)
{
    $acf_core = array(
        "slug" => "acf-core-blocks",
        "title" => __("ACF Core Blocks", "acf-core-blocks"),
        "icon" => "layout",
    );

    array_unshift($categories, $acf_core);
    return $categories;
}
add_filter('block_categories_all', 'my_plugin_block_categories', 10, 2);
