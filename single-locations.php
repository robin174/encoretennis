<?php
/**
* The template for displaying a single location
* @package encoretennis
*/
get_header(); ?>

<section class="templ--page-main">

	<?php get_template_part('template-parts/unit-header'); ?>

	<section class="mol--page-main">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-12">
					<div class="text-center">

						<div>
							<h1 class="type--brand-page"><?php the_title(); ?></h1>
						</div>

						<section>
							<?php if(get_field('location_teamup') === 'embedhurst') : ?>
								<?php get_template_part('template-parts/unit-teamup-hurst'); ?>
							<?php elseif(get_field('location_teamup') === 'embedqueens') : ?>
								<?php get_template_part('template-parts/unit-teamup-queens'); ?>
							<?php endif; ?>
						</section>

					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/unit-lines-thick'); ?>
	
</section>

<?php get_footer(); ?>