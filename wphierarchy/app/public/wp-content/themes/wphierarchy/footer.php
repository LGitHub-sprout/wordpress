<?php
/**
 * Template for displaying the footer.
 *
 * @todo: Add hooks
 *
 * @package WordPress
 * @subpackage wphierarchy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

	</div><!-- #content .site-content -->		
</div><!-- #page -->

<?php
	/**
	 * wphierarchy_before_footer_container hook
	 *
	 * @since 0.1
	 */
	do_action( 'wphierarchy_before_footer_container' );
?>

<div <?php wphierarchy_do_element_classes( 'footer', 'footer' ); ?>>
	<?php
	/**
	 * wphierarchy_inside_footer_container
	 *
	 * @since 0.1
	 */
	do_action( 'wphierarchy_inside_footer_container' );

	/**
	 * wphierarchy_footer hook
	 *
	 * @since 0.1
	 *
	 * @hooked wphierarchy_create_footer_widgets
	 * @hooked wphierarchy_create_footer
	 */
	 do_action( 'wphierarchy_footer' );

	 /**
	  * wphierarchy_after_footer_content hook
	  *
	  * @since 0.1
	  */
	 do_action( 'wphierarchy_after_footer_content' );
	?>
</div><!-- .footer -->

<?php wp_footer(); ?>
</body>
</html>
