<?php
get_header(); ?>

	<section class="templ--page-main">
		<section class="org--page-introduction" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/use-encoretennis-header-v1.jpg') center;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/BoomLogo-GreenBlue-Outlined.svg"/>
						</figure>
					</div>
				</div>
			</div>
		</section>
		<section class="mol--page-main">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-12">
						<div class="text-center">
							<h1><?php the_title(); ?></h1>
							
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

<?php get_footer(); ?>