<div class="container">

	<section class="splide">
		<div class="splide__track">

			<ul class="splide__list">
				<?php if( have_rows('home_repeater') ): ?>
					<?php while( have_rows('home_repeater')): the_row(); ?>

						<li class="splide__slide">
							<div class="row justify-content-center">
								<div class="col-12">
									<figure>
										<img class="mw-100" src="<?php the_sub_field('home_image_slide'); ?>">
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