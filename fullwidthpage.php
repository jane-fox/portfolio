<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
?>


		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(  ); ?>

		
		<?php endwhile; // end of the loop. ?>



<div class="container">

	<h2> Extra content down here </h2>

	<h3> wordpress</h3>
	<h3> javascript</h3>
	<h3> everything</h3>

</div>


<script src="/portfolio/wp-content/themes/understrap/src/js/jquery.min.js"></script>
<script src="/portfolio/wp-content/themes/understrap/src/js/parallax.min.js"></script>
<script src="/portfolio/wp-content/themes/bootstrap-basic/js/spinhex.js"></script>



<script>

$(function() {


});

</script>



<?php get_footer(); ?>
