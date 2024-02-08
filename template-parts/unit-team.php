<section class="mol--section-team d-flex flex-row">
	<div class="atm--headshot">
		<?php if ( has_post_thumbnail() ) { ?>
            <figure class="headshot text-center">
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
		<ul class="team--questions">
			<li><span class="ut--green">Favourite tennis players</span>&nbsp;<?php the_field('fav_tennis_player'); ?></li>
			<li><span class="ut--green">Quick tip</span>&nbsp;<?php the_field('quick_tip'); ?></li>
			<li><span class="ut--green">Favourite singer/group</span>&nbsp;<?php the_field('fav_singer_group'); ?></li>
			<li><span class="ut--green">Fun fact</span>&nbsp;<?php the_field('fun_fact'); ?></li>
		</ul>
	</div>
</section>