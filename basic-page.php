<?php
/**
 * Template for displaying pages
 * 
 * @package wp-portfolio
 */

get_header();


while (have_posts()) {
	the_post();
?> 


<header class="color-bg">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</header>

<div class="container">
<div class="row">
	<div class="col-md-8">

		<?php
		get_template_part('content', 'page');

		// If comments are open or we have at least one comment, load up the comment template
		if (comments_open() || '0' != get_comments_number()) {
			comments_template();
		}
		?>

	</div>

	<div class="col-md-4">
		<?php get_sidebar('right'); ?> 
	</div>

</div>
</div>
<?php } //endwhile; ?> 

<?php get_footer(); ?> 
