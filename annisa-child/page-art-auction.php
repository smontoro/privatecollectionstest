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

<?php while ( have_posts() ) : the_post();?>

<div class="my-5">
	<section class="container text-center">
		<div class="col-sm-8 mx-auto">
			<h1><?php the_title(); ?></h1>
			<p class="my-5"><?php the_content(); ?></p>
		</div>
	</section>

	<section class="py-5">
		<?php echo do_shortcode("[gs_pinterest]"); ?>
	</section>

</div>


	<?php endwhile; ?>
	<php wp_reset_query(); ?>




<?php get_footer(); ?>
