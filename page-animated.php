<?php
/**
 * Template Name: Custom Animation
 *
 * Renders page with big javascript animation, requires script
 *
 * @package wp-website-portfolio
 */

get_header();
?>


<div class="color-bg" id="animation-container">

	<div class="layer" data-depth="0.30"> 
		<canvas id="hex-canvas"></canvas>
	</div>

	<div class="layer" data-depth=".1">
		<div class="content">

			<?php while ( have_posts( ) ) : the_post(); ?>

				<?php the_content( ); ?>

			
			<?php endwhile; // end of the loop. ?>

		</div>
	</div> 

</div>


<?php if (function_exists('get_field')) { ?>
	<div class="container">
	<div class="row text-center">

		<?php echo get_field("below_display"); ?>

	</div>
	</div>
<?php } // if ?>



<?php get_footer(); ?>
