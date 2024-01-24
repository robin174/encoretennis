<div class="container">
	<div class="row justify-content-center">
		<div class="col-12 col-md-8">

			<section class="org--section-courses">
                <section class="mol--section-courses-upcoming">
                    <h2>Upcoming Courses</h2>
                    <div class="block--section-courses">
                         <?php 
                            $today = date('Ymd');
                            $today = date('Ymd', mktime(0, 0, 0, date("m"), date("d")-1, date("Y"))); // less one day to show day after event date
                            $args = array (
                                'post_type' => 'courses',
                                'post_status' => 'publish', // only show published events
                                'orderby' => 'meta_value', // order by date
                                'meta_key' => 'date_select_start', // your ACF Date & Time Picker field
                                'meta_value' => $today, // Use the current time from above
                                'meta_compare' => '>=', // Compare today's datetime with our event datetime
                                'order' => 'ASC',
                                );
                            $query = new WP_Query( $args );
                            if ( $query->have_posts() ) :
                            while ( $query->have_posts() ) : $query->the_post(); ?>
                                <?php get_template_part('template-parts/unit-course-upcoming'); ?>
                            <?php endwhile; else : ?>
                                <p class="emph"><i class="fa-solid fa-triangle-exclamation"></i>There are currently no upcoming courses to show.</p>
                        <?php endif; wp_reset_postdata(); ?>
                    </div>
                </section>
            </section>

		</div>
	</div>
</div>
