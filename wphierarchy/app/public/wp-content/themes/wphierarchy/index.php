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

<div id="primary" <?php wphierarchy_do_element_classes( 'content' ); ?>>
	<main id="main" <?php wphierarchy_do_element_classes( 'main' ); ?>>
		<h1>This is index.php</h1>

	<?php
		if ( have_posts() ) :

			while ( have_posts() ) :

				the_post();

			// posts

			endwhile;

			else:

				// no posts

			endif;
	?>

	</main>
</div><!-- #primary -->

<?php get_footer(); ?>


















