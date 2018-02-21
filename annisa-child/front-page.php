<body>

<?php
/**
 * The template for displaying the homepage
 *
 * @package Anissa
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post();
		$event_info_section = get_field('event_info_section');
		$date= get_field('date');
		$event_date= get_field('event_date');
		$tours= get_field('tours');
		$tour_hours= get_field('tour_hours');
		$post_party= get_field('post_party');
		$post_party_hours= get_field('post_party_hours');
		$tickets_subtitle= get_field('tickets_subtitle');
		$masterpiece= get_field('masterpiece');
		$masterpiece_price= get_field('masterpiece_price');
		$premier= get_field('premier');
		$premier_price= get_field('premier_price');
		$honorary_chair= get_field('honorary_chair');

		$partner_info_section= get_field('partner_info_section');
		$sponsors_year= get_field('sponsors_year');
		$sponsor_logo= get_field('sponsor_logo');
		$cultural_partners_year= get_field('cultural_partners_year');
		$cultural_partners_logo= get_field('cultural_partners_logo');
		$size= "full";
	?>

<div class="content container">
<!-- INTRODUCTION
	===========================================-->
	<section class="intro text-center my-5 mx-auto">
		<h1><?php echo the_title(); ?></h1>
		<p><?php echo the_content(); ?></p>
			<a class="btn btn-primary btn-outline-dark" href="http:/sfprivatecollections.org/about/">Learn More</a>
	</section>


<!-- SLIDER
	===========================================-->
	<section class="slider row">
		<div class="mx-auto mt-5">
			<?php echo do_shortcode("[metaslider id=28]"); ?>
		</div>
	</section>

	

<!-- EVENT
	===========================================-->
	<section class="event-info text-center my-5">
		<h1 class="mt-5"><?php echo $event_info_section; ?></h1>	
		<h4 class="my-5"><?php echo $honorary_chair; ?></h4>
			
		<div class="row">
				<div class="when col-sm-6">
					<h2><?php echo $date; ?></h2>
					<p id="date"><?php echo $event_date; ?></p>
					<h4><?php echo $tours; ?></h4>
					<p><?php echo $tour_hours; ?><p>
					<h4><?php echo $post_party; ?></h4>
					<p><?php echo $post_party_hours; ?></p>
				</div>

				<div class="tickets col-sm-6">
					<h2><?php echo $tickets_subtitle; ?></h2>
					<h3><?php echo $masterpiece; ?></h3>
					<p><?php echo $masterpiece_price; ?></p>
					<h3><?php echo $premier; ?></h3>
					<p><?php echo $premier_price; ?></p> 
					<a class="btn btn-primary btn-outline-dark" href="http:/sfprivatecollections.org/tickets/">Purchase Tickets</a>
				</div>
		</div><!--row-->
	</section>

	<hr>


<!-- PARTNERS
	===========================================-->
	<section class="text-center my-5">
		<h1><?php echo $partner_info_section; ?></h1>
		<div class="row">
			
			<div class="col-sm-6">
				<h2><?php echo $sponsors_year; ?></h2>
				<figure><?php echo wp_get_attachment_image ($sponsor_logo, $size); ?></figure>
			</div>

			<div class="col-sm-6">
				<h2><?php echo $cultural_partners_year; ?></h2>
				<figure><?php echo wp_get_attachment_image ($cultural_partners_logo, $size); ?></figure>
			</div>
		</div>
	</section>






<?php endwhile; ?>
	<php wp_reset_query(); ?>

 </div><!--content-->

<?php get_footer();