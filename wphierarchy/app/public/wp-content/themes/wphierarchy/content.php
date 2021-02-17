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
<p style="color: red;">content.php</p>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="inside-article">
			
			<header class="entry-header">
				<?php
				/**
				 * wphierarchy_before-entry-header hook
				 *
				 * @todo add wphierarchy_show_title() conditional
				 * @todo add wphierarchy_get_title_params FAILED ATTEMPT
				 * @todo add 'microdata' get_schema_type
				 *
				 * @since 0.1
				 */
				do_action( 'wphierarchy_before-entry-header' );

				the_title('<h1>', '</h1>');
				?>
			</header>

			<div class="entry-content">

				<?php // the_content(); ?>

				<?php the_excerpt(); ?>
				
			</div><!-- .entry-content -->

		</div><!-- .inside-article -->


	</article>
