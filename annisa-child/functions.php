<?php
/**
 * Anissa Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Anissa
 * @since Anissa
 */

//Custom post types collections function
function anissa_custom_enqueue_child_theme_styles() {
    wp_enqueue_style('parent-theme-css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'anissa_custom_enqueue_child_theme_styles');

function create_custom_post_types() {

	register_post_type('collections',
		array(
			'labels' => array (
				'name' => __('Collections'),
				'singular_name' => __('Collection')
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array (
				'slug' => 'collections'
				),
			)
		);
}
	

//Custom about single page function


//hook this custom post type function into the theme
add_action( 'init', 'create_custom_post_types' );