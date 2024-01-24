<section class="org--page-introduction">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<?php if(is_page('Encore Tennis')) : ?>
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/encore-tennis-logo-notype1.png"/>
					</figure>
				<?php else : ?>
					<figure>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/encore-tennis-logo-notype1.png"/></a>
					</figure>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>