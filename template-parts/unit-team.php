<section class="mol--section-team text-center">
	<div class="atm--headshot">
		<?php if ( has_post_thumbnail() ) { ?>
            <figure class="text-center">
				<?php the_post_thumbnail('thumbnail');?>
			</figure>
        <?php } else { ?>
        	<figure class="headshot-logo">
            	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/encore-tennis-logo-notype1.png"/>
        	</figure>
        <?php } ?>
	</div>
	<div class="atm--details">
		<h3 class="type--team"><?php the_title(); ?></h3>
		<p><?php the_field('team_description');?></p>
	</div>
</section>