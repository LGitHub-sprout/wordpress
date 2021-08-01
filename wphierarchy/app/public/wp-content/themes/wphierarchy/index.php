<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package wphierarchy
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<div id="primary" <?php wphierarchy_do_element_classes( 'site-header' ); ?>>
	<main id="main" <?php wphierarchy_do_element_classes( 'main', 'main' ); ?> role="main">

		<h1><?php esc_html_e( 'This &rarr; is index.php', 'wphierarchy' ); ?></h1>

		<?php
		/**
		 * wphierarchy_before_main_content hook
		 * @since 0.1
		 */
		do_action( 'wphierarchy_before_main_content' );

		if ( have_posts() ) : while ( have_posts() ) :
		
			the_post();

			get_template_part( 'content' );

		endwhile;

		else:

			get_template_part( 'no-result' );

			// _e( 'No content, sorry!', 'wphierarchy' );

		endif;

		?>

		<div class="todo">
			<h4>Stuff to do as of August 1, 2021</h4>
			<ul>
				<li>work on GP options: defaults.php, css-output.php, theme-functions.php</li>
				<ul>
					<li><a href="https://developer.wordpress.org/reference/functions/wp_add_inline_style/"><code>wp_add_inline_style</code></a> css-output.php</li>
					<li><a href="https://developer.wordpress.org/reference/functions/wp_strip_all_tags/"><code>wp_strip_all_tags</code></a> css-output.php</li>
				</ul>
				<li>theme handbook $content_width.. see above how to get this working</li>
				<li>udemy: add #content container for skip-to-link</li>
				<li>GP do_default_sidebar_widgets( 'right_sidebar') and add dynamic_sidebars for header and footer.</li>
				<li>add 'microdata' attributes to HTML tags -- schema types. see generatepress notes</li>
				<li>assign custom classes for all HTML tags, site-wide</li>
				<li>get title params working plus conditional for is_singular</li>
				<li>make 'Stuff To Do' plugin so shows on all pages (widget area)</li>
				<li>check out GP content.php 'microdata' get_schema stuff, the_content, and pagination</li>
				<li>check out GP post image the_thumbnail stuff</li>
				<li>build the footer-bar</li>
			</ul>
		</div><!-- .todo -->

	</main>
</div><!-- #primary -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>


















