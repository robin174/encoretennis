<?php
/**
* The template for displaying a single team member
* @package encoretennis
*/
get_header(); ?>

<section class="templ--page-main">
	<?php get_template_part('template-parts/unit-header'); ?>
	<section class="mol--page-main">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-3">
					<?php get_template_part('template-parts/unit-team'); ?>
				</div>
			</div>
		</div>
	</section>
</section>

<?php get_footer(); ?>