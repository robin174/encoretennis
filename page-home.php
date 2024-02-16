<?php
/**
* Template Name: Page - Home
* @package encoretennis
*/

get_header(); ?>

	<section class="templ--page-main">

		<!-- Page Header incl. Logo -->
		<?php get_template_part('template-parts/unit-page-header'); ?>

		<section class="mol--page-main">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-12">
						<div class="text-center">
							<h1 class="type--brand"><?php the_title(); ?></h1>
							<h2><?php the_field('home_headline'); ?></h2>
							<p><?php the_field('home_text'); ?></p>
							<div>
								<?php
						            $args=array(
						 				'post_type' => 'locations',
										'post_status' => 'publish',
										'order' => 'ASC',
						            );
						            $my_query = null;
						            $my_query = new WP_Query($args);
						            if( $my_query->have_posts() ) {
						            	while ($my_query->have_posts()) : $my_query->the_post(); ?>
											<a class="button-location" href="<?php the_permalink(); ?>"><?php the_field('location_shortname');?></a>
										<?php endwhile; }
		        						wp_reset_query(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="mol--page-splide">
			<?php get_template_part('template-parts/unit-splide-gallery'); ?>
		</section>

		<?php if(get_field('footer_style') == 'thinlines') { ?>
			<?php get_template_part('template-parts/unit-lines-thin'); ?>
		<?php } elseif(get_field('footer_style') == 'thicklines') { ?>
			<?php get_template_part('template-parts/unit-lines-thick'); ?>
		<?php } ?>

	</section>

<?php get_footer(); ?>