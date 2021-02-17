<?php
/**
 * Output the content of the post.
 *
 * @package wphierarchy
 */

 if ( ! defined( 'ABSPATH' ) ) {
 	exit; // Exit if accessed directly.
 }
?>
<p style="color: red;">content-single.php</p>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="inside-article">
			<?php
			/**
			 * wphierarchy_before-entry-header hook
			 *
			 * @since 0.1
			 */
			do_action( 'wphierarchy_before-entry-header' );
			?>
			<header class="entry-header">
				<?php the_title( '<h1>', '</h1>' ); ?>

				<?php 
				$params = wphierarchy_get_the_title_params();
				the_title( '$params[before]', '$params[after]' );
				?>

				<?php esc_html_e( 'Posted by: ' ); the_author_meta( 'nickname' );
				?>
			</header>

			<div class="entry-content">

				<?php the_content(); ?>

				<?php //the_excerpt(); ?>
				
			</div><!-- .entry-content -->

		</div><!-- .inside-article -->

	<?php
		if ( ! comments_open() ) {
			esc_html_e( 'Comments are closed.', 'wphierarchy' );
		} else {
			comments_template();
			}
	?>

	</article>


























