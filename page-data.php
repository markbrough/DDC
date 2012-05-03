<?php
/**
 * Template Name: Data packages template
 * Description: A Page Template that shows the DDC data packages
 *
 * @package WordPress
 * @subpackage DDC
 */

get_header(); ?>
		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>
				<?php
				$packages = $wpdb->get_results( $wpdb->prepare( "SELECT * FROM data_packages;" ), ARRAY_A ); 
				?>
				<div class="entry-content"><?php
				foreach ($packages as $k => $v) {
					print '<h1><a href="http://thedatahub.org/package/' . $v['package_name'] . '">' . $v['package_name'] . "</a></h1>\n";
					print $v['package_notes'];
				}
				?>
				</div>
 					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
