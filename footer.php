<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-website-portfolio
 */
?>

</main>

<footer id="site-footer" role="contentinfo">
	<div class="container">

		<div class="col-xs-6">

			<a href="/resume" target="_blank">
				<span class="fa fa-file-text"></span> Resume
			</a>
			
			<a href="https://github.com/jane-fox" target="_blank">
				<span class="fa fa-github"></span> Github
			</a>
			
		</div>


		<div class="col-xs-6 footer-right text-right">
			© 2018 Jane Fox
		</div>
		
	</div><!-- .container -->
</footer><!-- #site-footer -->


<?php include_once("analytics.php") ?>

<!-- wp_footer -->
<?php wp_footer(); ?>
<!-- /wp_footer -->

</body>
</html>
