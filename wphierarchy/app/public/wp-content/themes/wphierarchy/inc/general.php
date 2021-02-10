<?php
/**
 * General functions
 *
 * @package wphierarchy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_filter( 'wp_headers', 'wphierarchy_set_wpheaders' );
/**
 * Set any necessary headers.
 *
 * @param $header assoc array of headers to be sent.
 *
 * @since 0.1
 *
 * @link https://developer.wordpress.org/reference/hooks/wp_headers/ 
 */
 function wphierarchy_set_wpheaders( $headers ) {
 	$headers['x-ua-compatible'] = 'IE-edge';

 	return $headers;
 }