<?php
/**
* The template for displaying a single competition
* @package encoretennis
*/
get_header(); ?>

<section class="templ--page-main">
	<?php get_template_part('template-parts/unit-header'); ?>
	<section class="mol--page-main">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-8">

					<section class="org--section-events">
                        <section class="mol--section-events-upcoming">
                        	<div class="block--section-events">
								<section class="mol--section-event d-flex flex-column">
									<div class="d-flex flex-row mb-3">
										<h5 class="me-auto"><i class="fa-solid fa-calendar-days">&nbsp;</i><?php the_field('date_select'); ?></h5>
										<?php if ( has_term('green' , 'age-range') ) { ?>
											<span class="atm--pill-green d-block d-md-none"></span><span class="atm--pill-green d-none d-md-block">green</span>
										<?php } if ( has_term('orange' , 'age-range') ) { ?>
											<span class="atm--pill-orange d-block d-md-none"></span><span class="atm--pill-orange d-none d-md-block">orange</span>
										<?php } if ( has_term('red' , 'age-range') ) { ?>
											<span class="atm--pill-red d-block d-md-none"></span><span class="atm--pill-red d-none d-md-block">red</span>
										<?php } ?>
									</div>
									<h3><?php the_title(); ?></h3>
									<?php if(get_field('tournament_introduction')) : ?>
										<p><?php the_field('tournament_introduction'); ?></p>
									<?php endif; ?>
									<h6><i class="fa-solid fa-location-dot"></i>&nbsp;<?php the_field('location_select'); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<i class="fa-solid fa-trophy"></i>&nbsp;<?php the_field('tournament_select'); ?></h6>
									<div class="d-flex">
										<a class="atm--button-signup ms-auto" href="<?php the_field('tournament_link'); ?>" target="_blank">Sign up</a>
									</div>
								</section>
							</div>
						</section>
					</section>

				</div>
			</div>
		</div>
	</section>
</section>

<?php get_footer(); ?>