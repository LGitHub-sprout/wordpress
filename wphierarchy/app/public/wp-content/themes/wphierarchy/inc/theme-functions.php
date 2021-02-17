<?php
/**
 * Display HTML classes for elements
 *
 * @since 0.1
 *
 * @package wphierarchy
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly. 
}

/**
 * Display HTML classes for an element.
 *
 * @param string $context	The element to target.
 * @param string|array		$classes One or more classes to add to the list.
 */
function wphierarchy_do_element_classes( $context, $class = '' ) {
	$after = apply_filters( 'wphierarchy_after_element_class_attribute', '', $context );

	if ( $after ) {
		$after = ' ' . $after;
	}

 	echo 'class="' . join( ' ', wphierarchy_get_element_classes( $context, $class ) ) . '"' . $after;
}

/**
 * Retrieve HTML classes for an element.
 *
 * @param string 				$context The element to target.
 * @param string|array	$class One or more classes to add to the class list.
 * return array	Array of classes.
 */

function wphierarchy_get_element_classes( $context, $class = '' ) {
	$classes = array();

	if ( ! empty( $class ) ) {
		if ( ! is_array( $class ) ) {
			$class = preg_split( '#\s+#', $class );
		}

		$classes = array_merge( $classes, $class );
	}

	$classes = array_map( 'esc_attr', $classes );

	return apply_filters( "wphierarchy_create_{$context}_class", $classes, $class );
}

/**
 * Build the the_title() parameters
 *
 * @fails not getting any $params
 *
 * @since 0.1
 */
if ( ! function_exists( 'wphierarchy_get_the_title_params' ) ) {
	function wphierarchy_get_the_title_params() {

		// array(
		// 	$param1 => '<h1>',
		// 	$param2 => '</h1>'
		// 	);

		// $param1 = '<h1>';
		// $param2 = '</h1>';

		$params = array(
			'before' => sprintf(
				'<h1 class="entry-title"%s>',
				'itemprop="headline"'	// add 'microdata' here
				),
			'after' => '</h1>',
			);
		return apply_filters( 'wphierarchy_get_the_title_params', $params );
	}
}

/**
 * Gets the SVG code for a given icon.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @param string $group The icon group.
 * @param string $icon The icon.
 * @param int    $size The icon size in pixels.
 *
 * @return string
 */
function wphierarchy_get_icon_svg( $group, $icon, $size = 24 ) {
	return wphierarchy_SVG_Icons::get_svg( $group, $icon, $size );
}



































