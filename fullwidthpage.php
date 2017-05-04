<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<style>
	#parallax-container {
		position: relative;
		overflow-x: hidden;
		overflow-y: visible;
		height: 400px;
	}
	#parallax-container .layer {
		position: absolute;

	}
	.layer canvas {
		position: absolute;
		left: -200px;
		top: -200px;
	}

	.bg-inverse {
		background: transparent !important;
	}
	.bg-inverse a {
		color: #000 !important;
	}
</style>

<div class="parallax" id="parallax-container">
	<div class="layer" data-depth="0.90">
		<canvas id="hex-canvas"></canvas>
	</div>

	<div class="layer container" data-depth=".2">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(  ); ?>

		
		<?php endwhile; // end of the loop. ?>


	</div> 

</div>


<script src="/portfolio/wp-content/themes/understrap/src/js/jquery.min.js"></script>
<script src="/portfolio/wp-content/themes/understrap/src/js/parallax.min.js"></script>
<script src="/portfolio/wp-content/themes/understrap/src/js/spinhex.js"></script>



<script>

$(function() {

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
