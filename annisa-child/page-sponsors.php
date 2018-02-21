<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package anissa
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post();
	$contact = get_field('contact');
?>

<div class="container my-5 sponsors">
	<div class="row">

<!-- SPONSORSHIPS
======================= -->		
		<div class="col-sm-7">
			<h1 class="text-center"><?php echo the_title(); ?></h1>
			<p><?php echo the_content(); ?></p>
		</div>


<!-- CONTACT
======================= -->				
		<div class="col-sm-4 sponsor-aside pt-4">
			<p class="text-center"><?php echo $contact; ?></p>
		</div>

	</div><!--row-->
</div><!--container-->



	<?php endwhile; ?>
	<php wp_reset_query(); ?>


<?php get_footer(); ?>
