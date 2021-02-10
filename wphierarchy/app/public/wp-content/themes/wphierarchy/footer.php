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

<footer id="colophon" <?php wphierarchy_do_element_classes( 'footer' ); ?>>
	<p>This is the REGULAR footer</p>
	<p><?php esc_html_e( 'Code is Poetry', 'wphierarchychild' ); ?></p>
	<?php wp_footer(); ?>
</footer>
	</body>
</html>
