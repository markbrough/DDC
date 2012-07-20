<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<p><b>Development Data Challenge is an Initiative of:</b></p>
				<p><a href="http://www.aidinfo.org">Aidinfo</a> | <a href="http://www.dfid.gov.uk">DFID</a> | <a href="http://www.guardian.co.uk/global-development">The Guardian</a> | <a href="http://www.openaidregister.org">Open Aid Register</a> | <a href="http://www.okfn.org">Open Knowledge Foundation</a> | <a href="http://www.publishwhatyoufund.org">Publish What You Fund</a> | <a href="http://www.sida.se">SIDA</a> | <a href="http://finances.worldbank.org">World Bank Finances</a></p>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
