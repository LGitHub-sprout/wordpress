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
 */
function wphierarchy_do_element_classes( $context, $class = '' ) {
	$after = apply_filters( 'wphierarchy_after_element_class_attribute', '', $context );

	if ( $after ) {
		$after = ' ' . $after;
	}

	// echo wphierarchy_get_element_classes( $context, $class );

 	echo 'class="' . join( ' ', wphierarchy_get_element_classes( $context, $class ) ) . '"' . $after;
}

function wphierarchy_get_element_classes( $context, $class = '' ) {
	$classes = array();

	if ( ! empty( $class ) ) {
		if ( ! is_array( $class ) ) {
			$class = preg_split( '#\s+#', $class );
		}

		$classes = array_merge( $classes, $class );
	}

	$classes = array_map( 'esc_attr', $classes );

	// if ( empty( $classes ) ) {
	// 	echo print_r( $classes ); // echoes empty array
	// }

	// return wphierarchy_create{$context}_class()

	// $classes = apply_filters( "wphierarchy_create_{$context}_class", $classes, $class );
	// return $classes;

	return apply_filters( "wphierarchy_create_{$context}_class", $classes, $class );
}



































