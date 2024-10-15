<?php
get_header(); ?>

	<section class="templ--page-main">

		<!-- Page Header incl. Logo -->
		<?php get_template_part('template-parts/unit-page-header'); ?>

		<section class="mol--page-main">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-3">
						<figure>
							<img class="mw-100" src="<?php the_field('featured_image'); ?>"/>
						</figure>
					</div>
					<div class="col-12 col-md-9">
						<div class="text-center">
							<h1><?php the_title(); ?></h1>
							<!-- Page Builder -->
							<?php get_template_part ('template-parts/unit-builder'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

<?php get_footer(); ?>