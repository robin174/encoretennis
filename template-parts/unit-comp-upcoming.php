<section class="mol--section-event d-flex flex-column">
	<div class="d-flex flex-row mb-3">
		<h5 class="me-auto"><i class="fa-solid fa-calendar-days">&nbsp;</i><?php the_field('date_select'); ?></h5>
		<?php if ( has_term('yellow' , 'age-range') ) { ?>
			<span class="atm--pill-yellow d-block d-md-none"></span><span class="atm--pill-yellow d-none d-md-block">yellow</span>
		<?php } if ( has_term('green' , 'age-range') ) { ?>
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
	<h6><i class="fa-solid fa-location-dot"></i>&nbsp;
		<?php if(get_field('location_select') == 'Other') { ?>
			<?php the_field('other_location'); ?>
		<?php } elseif(get_field('location_select') == 'hurstpierpoint' || 'queenspark'  || 'stanns' || 'buckinghampark'  ) { ?>
			<?php the_field('location_select'); ?>
		<?php } ?>
		<span>|</span><i class="fa-solid fa-trophy"></i>&nbsp;<?php the_field('tournament_select'); ?></h6>
	<div class="d-flex">
		<a class="atm--button-signup ms-auto" href="<?php the_field('tournament_link'); ?>" target="_blank">Sign up</a>
	</div>
</section>