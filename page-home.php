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

		<?php /* 
		<section class="d-none d-lg-block mol--page-splide-experiment" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Screenshot 2024-02-13 at 10.58.36.png');">
			<div class="container" style="position: relative;width:1300px;height:750px;">

				<video id="myVideo" width="1300" height="750">
					<source src="<?php echo get_template_directory_uri(); ?>/assets/images/ENCORE LINES_FAT_4.mp4" type="video/mp4">
				</video>

				<section class="splide" id="mySplide">
					<div class="splide__track">
						<ul class="splide__list">
							<?php if( have_rows('home_repeater') ): ?>
								<?php while( have_rows('home_repeater')): the_row(); ?>

									<li class="splide__slide">
										<figure>
											<img class="mw-100" src="<?php the_sub_field('home_image_slide'); ?>" >
										</figure>
									</li>

								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
				</section>

			</div>
		</section>
		*/ ?>

		<?php /* 
		<!-- Splide (JS)
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/splide/splide.min.js" type="text/javascript"/></script>
		<script type="text/javascript">
			var splide = new Splide( '.splide', {
				type: 'loop',
				speed: 700,
				start: 0,
				autoplay: true,
				perPage: 1
			});
			splide.mount();

			const video = document.getElementById('myVideo');

			// Hide Splide initially
			//splide.root.style.display = 'none';
			splide.root.style.visibility = 'hidden';
			splide.root.style.opacity = 0;

			// Event listener for the video element
			video.addEventListener('click', function(event) {
				event.preventDefault(); // Prevent any default click behavior

				// Toggle play/pause based on the current state of the video
				if (video.paused || video.ended) {
					video.play();

			    	// Set a timeout to display the Splide slider after 5 seconds
				    	setTimeout(function() {
				    		//splide.root.style.display = 'block';
				      		splide.root.style.visibility = 'visible';  // Make the slider visible but fully transparent
				      		setTimeout(function() {
				        		splide.root.style.opacity = 1;  // Fade in the slider
				        		//splide.root.style.visibility = 'visible';
				      		}, 20); // Short delay before starting the fade-in
				    	}, 2000);
			    	
			  	} else {
			    	video.pause();
			  	}
			 });
		</script>
		*/ ?>
	</section>

<?php get_footer(); ?>