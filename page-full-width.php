<?php
/**
 * Template Name: Full Width Page
 *
 * Blank page with header but no containers so 
 * content can easily stretch to the edge of the
 * browser, useful for bg effects. 
 * The content of the page will need containers in it.
 *
 * @package wp-portfolio
 */

get_header();

while ( have_posts() ) : the_post(); 

?>

<header class="color-bg">
	<div class="container">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</div>
</header>

<?php the_content(); ?>
	
<?php endwhile;  ?>

<?php get_footer(); ?>
