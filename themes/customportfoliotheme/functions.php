<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Custom Portfolio
 * @since 2023
 */

/*
Theme Name: Custom Portfolio
Theme URI: https://wordpress.org/themes/customportfoliotheme/
Author: Greg Zucchero
Requires at least: 5.9
Tested up to: 6.0
Requires PHP: 5.6
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: customportfolio
Tags: one-column, custom-colors, custom-menu, custom-logo, editor-style, featured-images, full-site-editing, block-patterns, rtl-language-support, sticky-post, threaded-comments

*/


// if ( ! function_exists( 'twentytwentytwo_support' ) ) :

// 	/**
// 	 * Sets up theme defaults and registers support for various WordPress features.
// 	 *
// 	 * @since 2023
// 	 *
// 	 * @return void
// 	 */
// 	function twentytwentytwo_support() {

// 		// Add support for block styles.
// 		add_theme_support( 'wp-block-styles' );

// 		// Enqueue editor styles.
// 		add_editor_style( 'style.css' );

// 	}

// endif;

// add_action( 'after_setup_theme', 'twentytwentytwo_support' );

// if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

// 	/**
// 	 * Enqueue styles.
// 	 *
// 	 * @since 2023
// 	 *
// 	 * @return void
// 	 */
// 	function twentytwentytwo_styles() {
// 		// Register theme stylesheet.
// 		$theme_version = wp_get_theme()->get( 'Version' );

// 		$version_string = is_string( $theme_version ) ? $theme_version : false;
// 		wp_register_style(
// 			'twentytwentytwo-style',
// 			get_template_directory_uri() . '/style.css',
// 			array(),
// 			$version_string
// 		);

// 		// Enqueue theme stylesheet.
// 		wp_enqueue_style( 'twentytwentytwo-style' );

// 	}

// endif;

// add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

// // Add block patterns
// require get_template_directory() . '/inc/block-patterns.php';
