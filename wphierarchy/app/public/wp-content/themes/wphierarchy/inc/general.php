<?php
/**
 * General functions
 *
 * @package wphierarchy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'wphierarchy_widgets_init' ) ) {
	add_action( 'widgets_init', 'wphierarchy_widgets_init' );
	/**
	 * Register widgetized area aka sidebar.
	 *
	 * @since 0.1
	 */
	function wphierarchy_widgets_init() {
			$widgets = array( 
				'sidebar-1'			=> __( 'Right Sidebar', 'wphierarchy' ),
				'sidebar-2'			=> __( 'Left Sidebar', 'wphierarchy' ),
				'header'				=> __( 'Header Sidebar', 'wphierarchy' ),
				'footer-1'			=> __( 'Footer Sidebar Left', 'wphierarchy' ),
				'footer-2'			=> __( 'Footer Sidebar Right', 'wphierarchy' ),
				'footer-3'			=> __( 'Footer Sidebar Center', 'wphierarchy' ),
			);

		foreach ( $widgets as $id => $name ) {
			/**
			 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
			 * recommended to register sidebar individually (e.g., not register_sidebars)
			 */
			register_sidebar( array(
				'name'							=> $name,
				'id'								=> $id,
				'description'				=> __( 'Add widgets for main sidebar here.', 'wphierarchy' ),
				'before_widget'			=> '<aside id="%1$s" class="widget inner-padding %2$s">',
				'after_widget'			=> '</aside>',
				'before_title'			=> '<h2 class="widget-title">',
				'after_title'				=> '</h2>',
				)
			);
		}
	}
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