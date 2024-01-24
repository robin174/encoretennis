<section class="mol--section-event d-flex flex-column">
	<div class="d-flex flex-row mb-3">
		<?php if(get_field('date_select_single')) { ?>
			<h5 class="me-auto"><i class="fa-solid fa-calendar-days">&nbsp;</i><?php the_field('date_select_start'); ?></h5>
		<?php } else { ?>
			<h5 class="me-auto"><i class="fa-solid fa-calendar-days">&nbsp;</i><?php the_field('date_select_start'); ?>&nbsp;-&nbsp;</i><?php the_field('date_select_end'); ?></h5>
		<?php } ?> 
	</div>
	<h3><?php the_title(); ?></h3>
	<?php if(get_field('course_description_ta')) : ?>
		<p><?php the_field('course_description_ta'); ?></p>
	<?php endif; ?>
	<h6><i class="fa-solid fa-location-dot"></i>&nbsp;
		<?php if(get_field('c_location_select') == 'Other') { ?>
			<?php the_field('c_other_location'); ?>
		<?php } elseif(get_field('c_location_select') == 'Redhill' || 'Horley' || 'Reedham' || 'Godstone') { ?>
			<?php the_field('c_location_select'); ?>
		<?php } ?>
		&nbsp;&nbsp;|&nbsp;&nbsp;<i class="fa-solid fa-tag"></i>&nbsp;<?php the_field('course_cost'); ?></h6>
	<div class="d-flex">
		<a class="atm--button-signup ms-auto" href="<?php the_field('course_link'); ?>" target="_blank">Sign up</a>
	</div>
</section>