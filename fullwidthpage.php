<?php
/**
 * Template Name: Full Width Page
 *
 * Blank page
 *
 * @package 
 */

get_header();
?>


	<?php while ( have_posts() ) : the_post(); ?>

		<?php the_content(  ); ?>

	
	<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>
