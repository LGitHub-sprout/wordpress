<?php
/**
 * Adds HTML markup.
 *
 * @package wphierarchy
 *
 * @since 0.1
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
	 * Adds custom classes to the header.
	 *
	 * @param array $classes The existing classes.
	 * @since 0.1
	 *
	 * @package wphierarchy
	 *
	 * Inspired by (but not as good as) GeneratePress.
	 */
	if ( ! function_exists( 'wphierarchy_create_header_classes' ) ) {
	add_filter( 'wphierarchy_create_header_class', 'wphierarchy_create_header_classes' );
	/**
	 * Adds custom classes to the header.
	 */
	function wphierarchy_create_header_classes( $classes ) {

		$classes[] = 'site-header';
	}
	return $classes;
}
