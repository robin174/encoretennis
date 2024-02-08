<?php
/**
* Template Name: Page - Builder
* @package encoretennis
*/

get_header(); ?>

<section class="templ--page-main">

	<!-- Page Header incl. Logo -->
	<?php get_template_part('template-parts/unit-page-header'); ?>

	<section class="mol--page-main">

		<!-- Page Introduction -->
		<?php get_template_part('template-parts/unit-introduction'); ?>

		<!-- Page Builder -->
		<?php get_template_part ('template-parts/unit-builder'); ?>

		<!-- Bespoke Content -->
		<?php if(is_page('team')) : ?>
			<div class="container">
				<div class="row g-5 justify-content-center">
					<div class="col-12 col-md-10 col-xl-9">
						<?php
				            $args=array(
				 				'post_type' => 'team',
								'post_status' => 'publish',
								'order' => 'DESC',
				            );
				            $my_query = null;
				            $my_query = new WP_Query($args);
				            if( $my_query->have_posts() ) {
				            	while ($my_query->have_posts()) : $my_query->the_post(); ?>
									<?php get_template_part('template-parts/unit-team'); ?>
								<?php endwhile; }
        					wp_reset_query(); ?>
	                </div>
	            </div>
	        </div>
		<?php elseif(is_page('competitions')) : ?>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10 col-xl-8">

						<section class="org--section-events">
	                        <section class="mol--section-events-upcoming">
	                            <h2>Upcoming Competitions</h2>
	                            <div class="block--section-events">
	                                 <?php 
	                                    $today = date('Ymd');
	                                    $today = date('Ymd', mktime(0, 0, 0, date("m"), date("d")-1, date("Y"))); // less one day to show day after event date
	                                    $args = array (
	                                        'post_type' => 'events',
	                                        'post_status' => 'publish', // only show published events
	                                        'orderby' => 'meta_value', // order by date
	                                        'meta_key' => 'date_select', // your ACF Date & Time Picker field
	                                        'meta_value' => $today, // Use the current time from above
	                                        'meta_compare' => '>=', // Compare today's datetime with our event datetime
	                                        'order' => 'ASC',
	                                        );
	                                    $query = new WP_Query( $args );
	                                    if ( $query->have_posts() ) :
	                                    while ( $query->have_posts() ) : $query->the_post(); ?>
	                                        <?php get_template_part('template-parts/unit-comp-upcoming'); ?>
	                                    <?php endwhile; else : ?>
	                                        <p class="emph"><i class="fa-solid fa-triangle-exclamation"></i>There are currently no upcoming competitions to show.</p>
	                                <?php endif; wp_reset_postdata(); ?>
	                            </div>
	                        </section>
	                    </section>

					</div>
				</div>
			</div>
		<?php elseif(is_page('policies')) : ?>
			<?php get_template_part('template-parts/unit-pdf'); ?>
		<?php elseif(is_page('how-to-find-us')) : ?>
			<h2>How to find us</h2>
		<?php endif; ?>

	</section>
</section>

<?php if(get_field('add_image')) { ?>
	<section class="mol--page-separator">
		<div class="container" style="padding:0;">
			<div class="row justify-content-center g-0">
				<div class="col-12">
					<figure class="text-center">
						<img class="mw-100" src="<?php the_field('image_file'); ?>"/>
					</figure>
				</div>
			</div>
		</div>
	</section>
<?php } ?>

<?php if(get_field('footer_style') == 'thinlines') { ?>
	<?php get_template_part('template-parts/unit-lines-thin'); ?>
<?php } elseif(get_field('footer_style') == 'thicklines') { ?>
	<?php get_template_part('template-parts/unit-lines-thick'); ?>
<?php } ?>

<?php get_footer(); ?>