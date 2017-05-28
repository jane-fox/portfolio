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


<footer id="site-footer" role="contentinfo">
	<div class="container">
		<div class="col-sm-6">
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wp-website-portfolio' ) ); ?>">
				<?php printf( esc_html__( 'Powered by %s', 'wp-website-portfolio' ), 'WordPress' ); ?>
			</a> 
			Powered by Wordpress | Custom theme based on _s
			-->
			<a href="<?php echo get_stylesheet_directory_uri(); ?>/resume.html" target="_blank">
				<span class="fa fa-file-text"></span> Resume
			</a>
			<a href="https://github.com/jane-fox" target="_blank">
				<span class="fa fa-github"></span> Github
			</a>

			
		</div>

		<div class="col-sm-6 footer-right text-right">
			© 2017 Jane Fox
		</div>
		
	</div><!-- .container -->
</footer><!-- #site-footer -->

<?php wp_footer(); ?>

</body>
</html>

