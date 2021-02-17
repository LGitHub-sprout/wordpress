<?php
/**
 * Template for displaying all single posts.
 *
 * @package wphierarchy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div id="primary" <?php wphierarchy_do_element_classes( 'site-header' ); ?>>
	<main id="main" <?php wphierarchy_do_element_classes( 'main', 'main' ); ?> role="main">

		<h1><?php esc_html_e( 'This &rarr; is single.php', 'wphierarchy' ); ?></h1>

		<?php
		/**
		 * wphierarchy_before_main_content hook
		 * @since 0.1
		 */
		do_action( 'wphierarchy_before_main_content' );

		if ( have_posts() ) : while ( have_posts() ) :
		
			the_post();

			get_template_part( 'content-single' );

		endwhile;

		else:

			get_template_part( 'no-result' );

			// _e( 'No content, sorry!', 'wphierarchy' );

		endif;

		?>

		<div class="todo">
			<h4>Stuff to do</h4>
			<ul>
				<li>work on GP options: defaults.php, css-output.php, theme-functions.php</li>
				<ul>
					<li><a href="https://developer.wordpress.org/reference/functions/wp_add_inline_style/"><code>wp_add_inline_style</code></a> css-output.php</li>
					<li><a href="https://developer.wordpress.org/reference/functions/wp_strip_all_tags/"><code>wp_strip_all_tags</code></a> css-output.php</li>
				</ul>
				<li>theme handbook $content_width.. see above how to get this working</li>
				<li>udemy: add #content container for skip-to-link</li>
				<li>GP do_default_sidebar_widgets( 'right_sidebar') and add dynamic_sidebars for header and footer.</li>
			</ul>
		</div><!-- .todo -->

	</main>
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>


















