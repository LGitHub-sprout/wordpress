<?php
/**
 * Header elements.
 *
 * @since 0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'wphierarchy_make_header' ) ) {
	add_action( 'wphierarchy_header', 'wphierarchy_make_header' );
	/**
	 * Build the header.
	 *
	 * @since 0.1
	 *
	 * <?php generate_do_element_classes( 'mobile-navigation-toggle', 
		array( 'main-navigation', 'mobile-menu-control-wrapper' ) ); ?>
	 */
	do_action( 'before_header_content' );

	function wphierarchy_make_header() {
		?>
		<header class="masthead" <?php wphierarchy_do_element_classes( 'header' ); ?> role="banner">
			<div <?php wphierarchy_do_element_classes( 'inside-header' ); ?>>
				<?php
				/**
				 * wphierarchy_before_header_content hook
				 *
				 * @since 0.1
				 */
				do_action( 'wphierarchy_before_header_content' );

				wphierarchy_make_header_items(); // site-branding, topbar widget, logo.

				/**
				 * wphierarchy_after_header_content hook
				 *
				 * @since 0.1
				 *
				 * @hooked wphierarchy_make_navigation
				 */
				do_action( 'wphierarchy_after_header_content' );
				?>				
			</div><!-- .inside-header -->
		</header>
	<?php }
}

if ( ! function_exists( 'wphierarchy_make_header_items ') ) {
	/**
	 * Build header items:
	 *
	 * site-branding (fix <h1> <p> conditional)
	 * topbar widget
	 * logo
	 *
	 * @since 0.1
	 */
	function wphierarchy_make_header_items() { // rename to 'wphierarchy_make_site_title'
		$site_title = apply_filters( 'wphierarchy_site_title_output',
			sprintf(
				'<%1$s class="site-title" itemprop="headline">
					<a href="%2$s" rel="home">
						%3$s
					</a>
				</%1$s>',
				( is_front_page() ) ? 'h1' : 'p',
				esc_url( apply_filters( 'wphierarchy_site_title_href', home_url( '/' ) ) ),
				get_bloginfo( 'name' )
			)
		);
		echo apply_filters( 'wphierarchy_site_branding_output',
			sprintf(
				'<div class="site-branding-container">
					<div class="site-branding">
						%1$s
					</div>
				</div>',
				$site_title
			)
		);
	}
}

/**
 * @hook wp_head
 *
 */
if ( ! function_exists( 'wphierarchy_viewport_meta' ) ) {
	add_action( 'wp_head', 'wphierarchy_viewport_meta' );
	/**
	* Add viewport meta to wp_head.
	*
	* @since 0.1
	*/
	function wphierarchy_viewport_meta() {
		echo apply_filters( 'wphierarchy_add_viewport_meta', '<meta name="viewport" content="width=device-width, initial-scale=1">' );
	}
}

if ( ! function_exists( 'wphierarchy_pingback_url' ) ) {
	add_action( 'wp_head', 'wphierarchy_pingback_url' );
	/**
	 * Add pingback url auto-discovery header for singularly identifiable articles
	 *
	 * @since 0.1
	 *
	 * @link https://www.hostinger.com/tutorials/xmlrpc-wordpress
	 *
	 * xmlrpc.php is file that allows remote access to a website.
	 * Enables data transmission using HTTPs as transport and XML as encoding mechanisms for posting to site as well as implementing trackbacks and pings from other sites and Jetpack functionality.
	 *
	 * GP:					feed, comments/feed, xmlrpc?rsd
	 * wphierarchy:	feed, comments/feed, xmlrpc?rsd
	 * 
	 * if visitor is on any single post, of any post type (post, attachment, page, custom post types--?) and pingbacks turned on, then add pingback url.
	 *
	 * Settings > Discussion > Default post settings > Allow ... pingbacks and trackbacks.
	 *
	 * Should add <link rel="pingback" href="http://wphierarchy.lsystemworks/xmlrpc.php"
	 */
	function wphierarchy_pingback_url() {
		if ( is_singular() && pings_open() ) {
			printf( '<link rel="pingback" href="%s">' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
		}
	}
}

/**
 * Before header hook
 */
if ( ! function_exists( 'wphierarchy_skip_to_content_link' ) ) {
	add_action( 'wphierarchy_before_header', 'wphierarchy_skip_to_content_link', 2 );
	/**
	 * Make skip-to-content link before the header.
	 *
	 * @since 0.1
	 */
	function wphierarchy_skip_to_content_link() {
		printf( '<span class="screen-reader-text skip-to-content"><a title="%1$s" href="#content">%2$s</a></span>',
			esc_attr__( 'skip to content link', 'wphierarchy' ),
			esc_html__( 'skip to content', 'wphierarchy' ) );
	}
}




























