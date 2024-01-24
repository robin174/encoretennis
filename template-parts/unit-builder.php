<?php while(has_sub_field('page_builder')): ?>

	<section class="org--page-builder text-center">

		<?php if(get_row_layout() == 'page_subheading_h3'): // Subheading: h3 ?>
			<div class="container block--heading">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10">
						<h3 class="font--subheading"><?php the_sub_field('unit_subheading_h3'); ?></h3>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<?php if(get_row_layout() == 'page_paragraph'): // Paragraph: Full Width ?>
			<div class="container block--paragraph">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10">
						<?php the_sub_field('unit_paragraph'); ?>
					</div>
				</div>
			</div>
		<?php endif; ?>

		<?php if(get_row_layout() == 'page_image'): // layout: Image / Caption - Full Width ?>
	        <div class="container block--image">
		        <div class="row justify-content-center">
		            <div class="col-12 col-md-12">
		                <figure>
		                    <img class="mw-100" src="<?php the_sub_field('unit_image'); ?>" alt="" />
		                </figure>
		            </div>
		        </div>
	    	</div>
    	<?php endif; ?>

    	<?php if(get_row_layout() == 'page_embed'): // layout: oEmbed ?>
	        <div class="container block--embed">
		        <div class="row justify-content-center">
		            <div class="col-12 col-md-10">
		            	<div class="ratio ratio-16x9">
		                	<?php the_sub_field('unit_embed'); ?>
		            	</div>
		            </div>
		        </div>
	    	</div>
    	<?php endif; ?>

    	<?php if(get_row_layout() == 'page_bullet_list'): // layout: Bullet List  ?>
    		<div class="container block--bullet">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10">
				        <section>
				            <?php if( get_sub_field('page_bullet_list_introduction') ): ?>
				                <p class="bullet-intro"><?php the_sub_field('page_bullet_list_introduction'); ?></p>
				            <?php endif; ?>

				            <?php if( have_rows('repeater_bullet_list') ): // Repeater Field Name ?>
					            <ul class="bullet--copy"> 
					                <?php while( have_rows('repeater_bullet_list') ): the_row(); ?>
					                    <li><?php the_sub_field('bullet_point'); ?></li>
					                <?php endwhile; ?>
					            </ul>
				            <?php endif; ?>

				            <?php if( get_sub_field('page_bullet_list_conclusion') ): ?>
				                <p><?php the_sub_field('page_bullet_list_conclusion'); ?></p>
				            <?php endif; ?>
				        </section>
				    </div>
				</div>
			</div>
	    <?php endif; ?>

	    <?php if(get_row_layout() == 'page_number_list'): // layout: Number List  ?>
	    	<div class="container block--bullet">
				<div class="row justify-content-center">
					<div class="col-12 col-md-10">
				        <section>
				            <?php if( get_sub_field('page_number_list_introduction') ): ?>
				                <p class="bullet-intro"><?php the_sub_field('page_number_list_introduction'); ?></p>
				            <?php endif; ?>

				            <?php if( have_rows('repeater_number_list') ): // Repeater Field Name ?>
					            <ul class="number--copy"> 
					                <?php while( have_rows('repeater_number_list') ): the_row(); ?>
					                    <li><?php the_sub_field('number_point'); ?></li>
					                <?php endwhile; ?>
					            </ul>
				            <?php endif; ?>

				            <?php if( get_sub_field('page_number_list_conclusion') ): ?>
				                <p><?php the_sub_field('page_number_list_conclusion'); ?></p>
				            <?php endif; ?>
				        </section>
				    </div>
				</div>
			</div>
	    <?php endif; ?>
	</section>

<?php endwhile; ?>