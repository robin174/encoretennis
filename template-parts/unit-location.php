<section class="mol--section-location-find text-center">
	<div class="atm--loc">
		<?php if ( has_post_thumbnail() ) { ?>
            <figure class="loc text-center">
				<?php the_post_thumbnail('thumbnail');?>
			</figure>
        <?php } else { ?>
        	<figure class="loc-logo">
            	<img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/encore-tennis-logo-notype1.png"/>
        	</figure>
        <?php } ?>
	</div>
	<div class="atm--details">
		<h3 class="type--team"><?php the_title(); ?></h3>
		<p><?php the_field('location_address'); ?></p>
	</div>
</section>