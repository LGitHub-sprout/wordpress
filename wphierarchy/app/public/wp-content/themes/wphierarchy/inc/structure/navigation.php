<?php
/**
 * Navigation for our site.
 *
 * @package wphierarchy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'wphierarchy_make_navigation' ) ) {
	add_action( 'wphierarchy_after_header_content', 'wphierarchy_make_navigation' );
	/**
	 * Build the navigation.
	 *
	 * @since 0.1
	 */
	function wphierarchy_make_navigation() {
		/**
		 * wphierarchy_before_navigation hook
		 *
		 * @since 0.1
		 */
		do_action( 'wphierarchy_before_navigation' );
		?>
		<nav id="main-navigation" <?php wphierarchy_do_element_classes( 'navigation' ); ?>>
			<div <?php wphierarchy_do_element_classes( 'inside-navigation' ); ?>>
				<?php
				/**
				 * wphierarchy_inside_navigation hook
				 *
				 * @see GP inc/structure/navigation line34
				 *
				 * @hooked wphierarchy_navigation_search
				 * @hooked wphierarchy_mobile_menu_search_icon?>
				 */
				?>

				<!-- loads of stuff in the menu btn to figure out. -->
				<button class="menu-toggle" aria-controls="main-menu" aria-expanded="false">
				Menu</button>

				<?php
				wp_nav_menu ([
						'theme_location'	=> 'main_menu',
						'container'				=> 'div',
						'container_class' => 'main-nav',
						'container_id'		=> 'main-menu',
						// 'menu_class'			=>	'' // why leave blank?
					]
				);
				/**
				* wphierarchy_after_navigation hook
				*
				* @since 0.1
				*/
				?>

			</div><!-- #main-navigation .main-navigation -->
		</nav>
		<?php
	}
}












































