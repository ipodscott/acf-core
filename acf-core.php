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
  // check function exists
  if (function_exists("acf_register_block")) {
    include_once "api_block/module.php";
    include_once "audio_button/module.php";
    include_once "big_book/module.php";
    include_once "primary_content_block/module.php";
    //include_once "gallery_block/module.php";
    include_once "gl_gallery/module.php";
    include_once "large_header/module.php";
    include_once "link_button/module.php";
    include_once "parallax_header/module.php";
    include_once "presentation-slide/module.php";
    //include_once "media-button/module.php";
    include_once "video_button/module.php";
    //include_once 'preso_preview/module.php';
    include_once "large_slider/module.php";
    include_once "video_summary/module.php";
    include_once "slide/module.php";
    include_once "side_navigation/module.php";
    //include_once 'image_zoom/module.php';
    include_once "big_menu/module.php";
    //include_once 'primary_flex_container/module.php';
  }
}


function my_plugin_block_categories( $categories, $post ) {

  $acf_core = array(
    "slug" => "acf-core-blocks",
    "title" => __("ACF Core Blocks", "acf-core-blocks"),
    "icon" => "layout",
  );

  array_unshift( $categories, $acf_core );
  return $categories;
}
add_filter( 'block_categories_all', 'my_plugin_block_categories', 10, 2 );
