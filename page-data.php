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
				<div class="entry-content data-packages"><?php
				foreach ($packages as $k => $v) {
					print '<div class="data-package-title"><h1><i>Package name:</i> <a href="http://thedatahub.org/package/' . $v['package_name'] . '">' . $v['package_name'] . "</a></h1></div>\n";
					print '<div class="data-package-body">' . $v['package_notes'] . '<br />&nbsp;</div>';
				}
				?>
				</div>
 					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
