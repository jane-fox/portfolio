<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-website-portfolio
 */

?>

	</div><!-- #content -->

	<footer id="site-footer" role="contentinfo">
		<div class="container">
			<div class="col-sm-6">
				<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wp-website-portfolio' ) ); ?>"><?php printf( esc_html__( 'Powered by %s', 'wp-website-portfolio' ), 'WordPress' ); ?></a> -->
				Powered by Wordpres | Custom theme based on _s
			</div>

			<div class="col-sm-6 footer-right text-right">
				© 2017 Jane Fox
			</div>
			
		</div><!-- .container -->
	</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
</html>

