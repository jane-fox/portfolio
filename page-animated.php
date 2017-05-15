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
		<canvas id="hex-canvas"></canvas>
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
<div class="row">

	<h2> What I can do for you. </h2>
	<hr>

	<div class="col-md-4">
		<div style="text-align: center;font-size: 64px;">
			<span class="glyphicon glyphicon-object-align-top"></span>
		</div>
		<h3>Best solution for your needs</h3>
		<p>With a variety of different tools, we can find the best tech for your exact requirements.</p>

	</div>

	<div class="col-md-4">
		<div style="text-align: center;font-size: 64px;">
			<span class="glyphicon glyphicon-cog"></span>
		</div>
		<h3>Wordpress Setup & Customization</h3>
		<p>The best fit for most needs! Bring your idea online fast, with any theme you need.</p>

	</div>

	<div class="col-md-4">
		<div style="text-align: center;font-size: 64px;">
			<span class="glyphicon glyphicon-wrench"></span>
		</div>
		<h3>Bugfixing</h3>
		<p>Having trouble with a website? Original developer not able to help? I can quickly jump in to any project and start making things work.</p>

	</div>

</div>
</div>

<hr>


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
