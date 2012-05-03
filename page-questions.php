<?php
/**
 * Template Name: Questions template
 * Description: A Page Template that shows the DDC questions
 *
 * @package WordPress
 * @subpackage DDC
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '/question-comments.php', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
