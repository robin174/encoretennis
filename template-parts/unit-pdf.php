<section class="org--section-pdf">
	<div class="container">
		<div class="row justify-content-center">

			<?php if( have_rows('pdf_repeater') ): // Repeater Field Name ?>
				<?php while( have_rows('pdf_repeater') ): the_row(); ?>
					<div class="col-12 col-md-8">
						<section class="mol--section-pdf d-flex">
							<div style="padding-right: 10px;">
								<i class="fa-sharp fa-3x fa-file-pdf"></i>
							</div>
							<div>
								<h4 class="atm--policies"><?php the_sub_field('pdf_repeater_title'); ?></h4>
								<p><?php the_sub_field('pdf_repeater_desc'); ?></p>
								<?php if (get_sub_field('pdf_repeater_file')): ?>
									<div class="d-flex">
										<a class="atm--button-signup me-auto" href="<?php the_sub_field('pdf_repeater_file'); ?>" target="_blank">View PDF</a>
									</div>
								<?php else : ?>
									<p class="atm-nofile">There is currently no PDF available to view.</p>
								<?php endif; ?>
							</div>
						</section>
                	</div>
                <?php endwhile; ?>
            <?php endif; ?>

		</div>
	</div>
</section>