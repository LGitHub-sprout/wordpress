<?php
/**
 * The template for displaying the header.
 *
 * @package wphierarchy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	/**
	 * wp_body_open hook
	 *
	 * @since 0.1
	 */
	do_action( 'wp_body_open' );

	/**
	 * wphierarchy_before_header hook
	 *
	 * @since 0.1
	 *
	 * @hooked wphierarchy_skip-to-content
	 * @hooked wphierarchy_top_bar (need to build)
	 * @hooked wphierarchy_navigation
	 */
	do_action( 'wphierarchy_before_header' );

	/**
	 * wphierarchy_header hook
	 *
	 * @since 0.1
	 *
	 * @hooked wphierarchy_make_header
	 */
	do_action( 'wphierarchy_header' );

	/**
	 * wphierarch_after_header hook
	 *
	 * @since 0.1
	 *
	 * @hooked featured_page_header??? check this out.
	 */
	do_action( 'wphierarchy_after_header' );
	?>
	
	<div id="page" <?php wphierarchy_do_element_classes( 'page', 'page' ); ?>>
		<?php
		/**
		 * wphierarchy_inside_page hook
		 *
		 * @since 0.1
		 */
		do_action( 'wphierarchy_inside_page' );
		?>
		<div id="content" class="site-content">
			<?php
			/**
			 * wphiearchy_inside_site_content hook
			 *
			 * @since 0.1
			 */
			do_action( 'wphierarchy_inside_site_content' );
			?>