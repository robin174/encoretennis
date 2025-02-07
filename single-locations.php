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
						<div>
							<p>To book at this location, visit the Encore Tennis LTA Clubspark page, by clicking the button below.</p>
							<a class="button-location" target="_blank" href="<?php the_field('location_clubspark_url'); ?>">Book with Encore Tennis</a>
						</div>

						<?php /*
						<section>
							<?php if(get_field('location_teamup') === 'embedhurst') : ?>
								<?php get_template_part('template-parts/unit-teamup-hurst'); ?>
							<?php elseif(get_field('location_teamup') === 'embedqueens') : ?>
								<?php get_template_part('template-parts/unit-teamup-queens'); ?>
							<?php elseif(get_field('location_teamup') === 'embedstjohns') : ?>
								<?php get_template_part('template-parts/unit-teamup-stjohns'); ?>
							<?php endif; ?>
						</section> 
						*/?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/unit-lines-thick'); ?>
	
</section>

<?php get_footer(); ?>