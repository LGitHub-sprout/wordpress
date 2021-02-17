<?php
/**
 * wphierarchy Parent Theme functions
 *
 * Don't edit this file. Instead create a child theme, functions.php, and edit those.
 *
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * @package wphierarchy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Set theme version.
define( 'WPHIERARCHY_VERSION', '0.1' );

if ( ! function_exists( 'wphierarchy_setup_theme' ) ) {
	add_action( 'after_setup_theme', 'wphierarchy_setup_theme' );
	/**
	 * Sets up theme defaults and registers various WP features.
	 *
	 * @since 0.1
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/
	 */
	function wphierarchy_setup_theme() {
		/**
		 * Load translations for wphierarchy theme.
		 *
		 * @link https://developer.wordpress.org/reference/functions/load_theme_textdomain/
		 */
		load_theme_textdomain( 'wphierarchy', get_template_directory() . '/languages' );
	}

	// Registers theme support for a given feature.
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio' ) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery' ) );
	add_theme_support( 'customize-selective-refresh-widgets' );

	// come back to code rest of custom-backgrounds, custom-header.
	// mostly deal with the customizer 
	// add_theme_support( 'custom-background' );
	add_theme_support( 'custom-header' );

	// @since 5.5.0 now accepts 'unlink-homepage-logo'.
	add_theme_support( 'custom-logo' );

	// research all these below:
	add_theme_support( 'starter-content' );

	// alignwide and alignfull classes in the block editor.
	add_theme_support( 'align-wide' );
	// add support for core block visual styles.
	add_theme_support( 'wp-block-styles' );
	// add support for responsive embed content.
	add_theme_support( 'responsive-embeds' );
	// add support for disable-custom-font-sizes
	add_theme_support( 'disable-custom-font-sizes' );
	// add support for custom line height controls.

	// Support a custom color palette.
	// @link https://github.com/WordPress/theme-experiments/blob/master/gutenberg-starter-theme-blocks/functions.php
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Strong Blue', 'wphierarchy' ),
			'slug'  => 'primary',
			'color' => '#0073aa',
		),
		array(
			'name'  => __( 'Lighter Blue', 'wphierarchy' ),
			'slug'  => 'primary-light',
			'color' => '#229fd8',
		),
		array(
			'name'  => __( 'Very Dark Gray', 'wphierarchy' ),
			'slug'  => 'secondary',
			'color' => '#444',
		),
		array(
			'name'  => __( 'Very Light Gray', 'wphierarchy' ),
			'slug'  => 'secondary-light',
			'color' => '#eee',
		)
	) );

	/**
	 * Register the primary menus.
	 * https://codex.wordpress.org/Navigation_Menus
	 */
	register_nav_menus(
		array(
			'main_menu'			=> __( 'Main Menu', 'wphierarchy' ),
			'footer_menu'		=> __( 'Footer Menu', 'wphierarchy' ),
			'social_menu'		=> __( 'Social Menu', 'wphierarchy' )
			)
		);
}

/**
 * 2016 Theme stylesheet
 * get parent styles by STYLESHEET
 * wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri(), array(), '20190507' );
 *
 * if PARENT style enqueued using GET_STYLESHEET uri function, then
 * child theme must enqueue BOTH parent and CHILD style.
 *
 * if PARENT style enqueued using GET_TEMPLATE uri function, then
 * just load CHILD style.
 *
 * if PARENT theme loads both stylesheets, child theme does nothing.
 *
 * child style uses get_stylesheet_uri
 *
 * 2/13/21: switched out get_stylesheet_uri for get_theme_file_uri per theme handbook:
 * @link: https://developer.wordpress.org/themes/basics/linking-theme-files-directories/#linking-to-theme-directories
 */
if ( ! function_exists( 'wphierarchy_scripts' ) ) {
	add_action( 'wp_enqueue_scripts', 'wphierarchy_scripts' );
	/**
	 * Enqueue scripts and styles
	 */
	function wphierarchy_scripts() {
		wp_enqueue_style( 'wphierarchy-style', get_template_directory_uri() . '/style.css',
			array(), 'all' );

		if ( is_child_theme() && apply_filters( 'wphierarchy_load_child_theme_style', true ) ) {
			wp_enqueue_style( 'wphierarchy-child-style', get_theme_file_uri() . '/style.css', array( 'wphierarchy-style' ), filemtime( get_stylesheet_directory() . '/style.css' ) );
		}
	}
}

if ( ! isset( $content_width ) ) {
	$content_width = 700;
}

/**
 * Filter the_title - fail! works but creates error
 */
 // if ( ! function_exists( 'filter_title' ) ) {
// 	add_filter( 'the_title', 'filter_title' );
// 	/**
// 	 * Filter the_title 
// 	 */
// 	function filter_title( $title, $id = null ) {
// 		if ( is_sticky() ) {
// 			the_title( '<h1>', '</h1>', 'Yo, Whaddup ' );
// 		// } else {
// 		// return $title;
// 		}
// 	}
// }

/**
 * Get all necessary theme files
 *
 * @since 0.1
 */
$theme_dir = get_template_directory();

require $theme_dir	. '/classes/class-wphierarchy-svg-icons.php';

require $theme_dir . '/inc/theme-functions.php';
require $theme_dir . '/inc/markup.php';
require $theme_dir . '/inc/general.php';

/**
 * Load the theme structure
 */
require $theme_dir . '/inc/structure/header.php';
require $theme_dir . '/inc/structure/navigation.php';








































