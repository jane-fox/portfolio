<?php
/**
 * Template Name: Custom Animation
 *
 * Renders page with big javascript animation
 *
 * @package wp-website-portfolio
 */

get_header();
?>


<div class="parallax color-bg" id="parallax-container">
	<div class="layer" data-depth="0.10"> 
		<canvas id="hex-canvas1"></canvas>
	</div>
	<div class="layer" data-depth="0.50"> 
		<canvas id="hex-canvas2"></canvas>
	</div>
	<div class="layer" data-depth="0.90"> 
		<canvas id="hex-canvas3"></canvas>
	</div>


	<div class="layer container" data-depth=".2">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(  ); ?>

		
		<?php endwhile; // end of the loop. ?>


	</div> 

</div>



<div class="container">

	<h2> Extra content down here </h2>

	<h3> wordpress</h3>
	<h3> javascript</h3>
	<h3> everything</h3>

</div>



<script>

jQuery(function() {

	var container = document.getElementById("parallax-container");

	new Parallax(container);

});

</script>


<?php /*
<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_html( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->
 */ ?>
<?php get_footer(); ?>
