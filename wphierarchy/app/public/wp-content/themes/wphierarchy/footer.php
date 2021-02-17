<?php
/**
 * Template for displaying the footer.
 *
 * @todo: Add hooks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

	</div><!-- #content .site-content -->		
</div><!-- #page -->


<footer id="colophon" <?php wphierarchy_do_element_classes( 'site-info', 'site-info' ); ?> role="contentinfo">
	<p>This is the REGULAR footer</p>


	<p><?php esc_html_e( 'Code is Poetry', 'wphierarchy' ); ?></p>

	<?php printf( '<p>Powered by <a href="%1$s">%2$s</a></p>',
		esc_url( __( 'https://wordpress.org' ) ),
		esc_html__( 'Wordpress', 'wphierarcy' ) );
	?>

	<?php wp_footer(); ?>
</footer>
	</body>
</html>
