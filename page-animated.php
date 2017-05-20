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



<div class="container">
<div class="row text-center margin-bottom">

<?php echo get_field("below_display"); ?>

</div>
</div>




<!-- 

	Placeholder until I figure out design



	<h2> What I can do for you. </h2>
	<hr>

	<div class="col-md-4">
		<div style="text-align: center;font-size: 64px;">
			<span class="glyphicon glyphicon-object-align-top"></span>
		</div>
		<h3>Bring yor brand to life</h3>
		<p>No need to settle with pre-made themes when you can make your brand stand out the way it was meant to. I can bring your design online and pixel perfect.</p>
		<p>(alt) Don't settle for pre-made themes when making your brand stand out is critical to your success.</p>

	</div>

	<div class="col-md-4">
		<div style="text-align: center;font-size: 64px;">
			<span class="glyphicon glyphicon-cog"></span>
		</div>
		<h3>Wordpress Setup <br>& Customization</h3>
		<p>The best fit for most needs! Bring your idea online fast, with any theme you need.</p>
		<p>You'll be ready to start blogging, share your photography, </p>
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



<div class="alt-bg">
<div class="container">
<div class="row text-center margin-bottom">



	<h2> Why work with me </h2>
	<hr>

	<div class="col-md-4">
		<div style="text-align: center;font-size: 64px;">
			<span class="glyphicon glyphicon-fast-forward"></span>
		</div>
		<h3>Fast</h3>
		<p>Basic Wordpress setup in less than 7 days.</p>

	</div>

	<div class="col-md-4">
		<div style="text-align: center;font-size: 64px;">
			<span class="glyphicon glyphicon-certificate"></span>
		</div>
		<h3>Flexible</h3>
		<p>My solutions aren't limited to one platform. I can advise you on the technology that's best for your project.</p>

	</div>

	<div class="col-md-4">
		<div style="text-align: center;font-size: 64px;">
			<span class="glyphicon glyphicon-globe"></span>
		</div>
		<h3>Experienced</h3>
		<p>Great teams have imparted their wisdom to me. Now I can put it to work for you.</p>

	</div>



	/ placeholder
-->

<?php get_footer(); ?>
