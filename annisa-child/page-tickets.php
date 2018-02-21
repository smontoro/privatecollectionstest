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
	$donate_title= get_field('donate_title');
	$donate_info= get_field('donate_info');
	$ticket_html= get_field('ticket_html');
	?>

<div class="container my-5">

<!-- TICKETS
============================ -->
	<div class="row mb-5">
		<div class="col-sm-9 text-center mx-auto">
			<section>
				<h1 class="text-center"><?php echo the_title(); ?></h1>
				<p><?php echo the_content(); ?></p>
			</section>

			<section class="tickets-html">
				<?php echo $ticket_html; ?>
			</section>
		</div>
	</div><!--row-->

		<hr>

<!-- DONATIONS
============================ -->
		<section class="row">
			<div class="col-sm-6">
				<h1 class="text-center"><?php echo $donate_title; ?></h1>
				<p><?php echo $donate_info; ?></p>
				<div class="text-center">
					<a class="btn btn-primary btn-outline-dark" href="http://enterpriseforyouth.org/donate/">Donate</a>
				</div>
			</div>

			<div class="col-sm-6 mt-5">
				<iframe class="donate-video" width="560" height="315" src="https://www.youtube.com/embed/T4HLfy3NYBo?list=PLXqgINAqvUtznpotMpBFXVq9GP3ZGG3-S" frameborder="0" allowfullscreen></iframe>
			</div>
		</section>


</div><!--container-->

	<?php endwhile; ?>
	<php wp_reset_query(); ?>




<?php get_footer(); ?>
