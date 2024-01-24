<?php
/**
* Template Name: Page - Community Tennis
* @package encoretennis
*/

get_header('bct'); ?>

<section class="templ--page-main">
	<?php get_template_part('template-parts/unit-header'); ?>
	<section class="mol--page-main">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-8">

					<section>
						<?php if (get_field('page_headline')): ?>
							<h1 class="type--brand-page"><?php the_field('page_headline'); ?></h1>
						<?php endif; ?>
						<?php the_field('page_text'); ?>
						<a href="">Test link</a>
					</section>
					
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer('bct'); ?>