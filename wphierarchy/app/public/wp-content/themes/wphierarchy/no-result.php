<?php
/**
 * Output the content of the post.
 *
 * @todo add blurb to try a search; add search form.
 *
 * @package wphierarchy
 */

 if ( ! defined( 'ABSPATH' ) ) {
 	exit; // Exit if accessed directly.
 }
?>
<p style="color: red;">no-result.php</p>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h1>', '</h1>' ); ?>
		</header>

		<div class="entry-content">

			<h1>
				<?php _e( "Sorry, that page can't be found.", 'wphierarchy' ); ?>
			</h1>

			<?php //the_excerpt(); ?>
			
		</div><!-- .entry-content -->


	</article>
