<?php
/**
* Template Name: Page - Experiment
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

		<?php /*
		<section class="mol--page-splide" style="position: relative; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/screenshot 2024-02-13 at 09.39.43.png'); background-position: bottom; background-repeat:repeat-x">
			<div class="container">
				<section class="splide">
					<div class="splide__track">

						<div class="" style="position: absolute; z-index:10000; top: 0; left:0;margin:0padding:0;">
							<video width="1267" height="845" style="margin:0padding:0;" autoplay muted>
								<source src="<?php echo get_template_directory_uri(); ?>/assets/images/ENCORE LINES_FAT_2 copy.mp4" type="video/mp4">
							</video>
						</div>
						<ul class="splide__list">
							<?php if( have_rows('home_repeater') ): ?>
								<?php while( have_rows('home_repeater')): the_row(); ?>

									<li class="splide__slide" style="background:black;">
										<div class="row justify-content-center">
											<div class="col-12">
												<figure >
													<img class="mw-100" src="<?php the_sub_field('home_image_slide'); ?>" >
												</figure>	
											</div>
										</div>
									</li>

								<?php endwhile; ?>
							<?php endif; ?>
						</ul>

					</div>
				</section>
			</div>
		</section>
		*/ ?>
		<div class="container">
			<div class="row g-0">
				<div class="col-12">
					<div style="background: red;padding: 5px 0;width:100%;">
						XYZ
					</div>
				</div>
			</div>
		</div>


		<section class="mol--page-splide" style="position: relative; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot 2024-02-13 at 10.58.36.png'); background-position: bottom; background-repeat:repeat-x">
			<div class="container" style="position: relative;height:750px;">

				<video width="1300" height="750" style="margin:0padding:0;" autoplay muted>
					<source src="<?php echo get_template_directory_uri(); ?>/assets/images/ENCORE LINES_FAT_4.mp4" type="video/mp4">
				</video>

				<div style="position: absolute; z-index: 20; top:0;opacity: 0.3;">
					<section class="splide">
						<div class="splide__track">
							<ul class="splide__list">
								<?php if( have_rows('home_repeater') ): ?>
									<?php while( have_rows('home_repeater')): the_row(); ?>

										<li class="splide__slide" style="background:black;">
											<div class="row justify-content-center">
												<div class="col-10">
													<figure >
														<img class="mw-100" src="<?php the_sub_field('home_image_slide'); ?>" >
													</figure>	
												</div>
											</div>
										</li>

									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>
					</section>
				</div>

			</div>
		</section>


		<?php /*
		<?php if(get_field('footer_style') == 'thinlines') { ?>
			<?php get_template_part('template-parts/unit-lines-thin'); ?>
		<?php } elseif(get_field('footer_style') == 'thicklines') { ?>
			<?php get_template_part('template-parts/unit-lines-thick'); ?>
		<?php } ?>
		*/ ?>

	</section>

<!-- Splide (JS)
 –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/splide/splide.min.js" type="text/javascript"/></script>
<script type="text/javascript">
	var splide = new Splide( '.splide', {
		type: 'loop',
		speed: 700,
		autoplay: true,
		perPage: 1
	});
	splide.mount();
</script>
<?php get_footer(); ?>