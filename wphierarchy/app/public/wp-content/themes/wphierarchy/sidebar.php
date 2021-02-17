<?php
/**
 * Dynamic sidebars for our theme.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="secondary">
	<div class="inside-sidebar">
		<?php
		/**
		 * wphierarcy_before_sidebar hook
		 *
		 * @since 0.1
		 */
		do_action( 'wphierarcy_before_sidebar' );

		// show the sidebar if it's active
		if ( ! is_active_sidebar( 'sidebar-1') ) {
			return;
		}
		dynamic_sidebar( 'sidebar-1' );

		/**
		 * wphierarchy_after_sidebar hook
		 *
		 * @since 0.1
		 */
		?>
	</div><!-- .sidebar -->
</div><!-- .secondary -->