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
	$about_enterprise_title= get_field('about_enterprise_title');
	$about_enterprise= get_field('about_enterprise');

	$committee_title= get_field('committee_title');
	$committee_names= get_field('committee_names');

	$host_committee_title=get_field('host_committee_title');
	$host_committee_names=get_field('host_committee_names');

	$board_title= get_field('board_title');
	$board_names= get_field('board_names');
?>

<!-- ABOUT PRIVATE COLLECTIONS
============================ -->
<div class="container my-5">
	<div class="row">

		<div class="col-sm-7">
			<section class="about-content">
					<h1 class="text-center"><?php echo the_title(); ?></h1>
					<p><?php echo the_content(); ?></p>
			</section>

<!-- ABOUT ENTERPRISE
============================ -->
			<section class="about-enterprise pb-5">
					<h1 class="text-center"><?php echo $about_enterprise_title; ?></h1>
					<p><?php echo $about_enterprise; ?></p>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/hZAdjOz0LSs" frameborder="0" allowfullscreen></iframe>
			</section>
		</div><!--col-sm-8-->


<!-- SIDEBAR
============================ -->
		<aside class="col-sm-4 text-center about-aside">
				<section class="committee pt-4">
					<h5><?php echo $committee_title; ?></h5>
					<p><?php echo $committee_names; ?></p>
				</section>

				<section class="host-committee pt-4">
					<h5><?php echo $host_committee_title; ?></h5>
					<p><?php echo $host_committee_names; ?></p>
				</section>

				<section class="board pt-4">
					<h5><?php echo $board_title; ?></h5>
					<p><?php echo $board_names; ?></p>
				</section>
		</aside><!--col-sm-3-->

	</div><!-- row -->
</div><!--container-->


	<?php endwhile; ?>
	<php wp_reset_query(); ?>

<?php get_footer(); ?>



