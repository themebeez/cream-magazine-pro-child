<?php
/**
 * Child theme functions
 *
 * Functions file for child theme, enqueues parent and child stylesheets by default.
 *
 * @since	1.0.0
 * @package aa
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'cream_magazine_pro_child_enqueue_styles' ) ) {

	/**
	 * Enqueue Styles.
	 *
	 * Enqueue parent style and child styles where parent are the dependency
	 * for child styles so that parent styles always get enqueued first.
	 *
	 * @since 1.0.0
	 */
	function cream_magazine_pro_child_enqueue_styles() {

		// Enqueue Child theme's stylesheet.
		// Setting 'parent-style' as a dependency will ensure that the child theme stylesheet loads after it.
		wp_enqueue_style( 'cream-magazine-pro-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'cream-magazine-pro-style', 'cream-magazine-pro-main' ) );
	}
}
// Add enqueue function to the desired action.
add_action( 'wp_enqueue_scripts', 'cream_magazine_pro_child_enqueue_styles' );
