<?php
/**
* Displays all of the <head> section and everything up till <div id="main">
* @package boomtennis
*/ 
?>
		</main><!-- end main -->
		<footer>
			<div class="container">
				<section class="footer-layer01">
	                <div class="row">
	                	<div class="col-12 col-md-6">
	                		<figure class="footer-logo">
	                			<?php if(is_page('Encore Tennis')) : ?>
	                				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/encore-tennis-logo-notype1.png"/>
	                			<?php else : ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/encore-tennis-logo-notype1.png"/></a>
								<?php endif; ?>
							</figure>
	                	</div>
	                	<div class="col-12 col-md-6">
	                		<div class="row">
			                	<div class="col-12 col-md-6">
									<div class="mol__unit-contact text-center text-md-start">
										<h4>Follow</h4>
										<ul>
											<li><a href="<?php the_field('et_instagram', 'option');?>" target="_blank">Instagram</a></li>
											<li><a href="<?php the_field('et_tiktok', 'option');?>" target="_blank">TikTok</a></li>
											<li><a href="<?php the_field('et_youtube', 'option'); ?>" target="_blank">YouTube</a></li>
										</ul>
									</div>
								</div>
								<div class="col-12 col-md-6">
									<div class="mol__unit-contact text-center text-md-start">
										<h4>Contact</h4>
										<ul>
											<li><a href="mailto:<?php the_field('et_email', 'option');?>"><?php the_field('et_email', 'option');?></a></li>
											<li>07966 210 692</li>
											<li>Encore Tennis<br/>
												Address 01<br>
												Address 02<br>
												Town<br>
												Postcode</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
	                </div>
               	</section>
                <section class="footer-layer02">
	                <div class="row">
						<div class="col-6">
	                		<p class="atm-copyright">&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;<?php the_field('et_company', 'option'); ?><br>
	       					All rights reserved.</p>
	       					<p class="atm-copyright"><a href="https://indd.adobe.com/view/1e7bd97a-2e9d-40a4-bcca-09ba3b120a8e" target="_blank" title="Caba Consultancy">Website designed by Caba Consultancy</a></p>
	                	</div>
	                	<div class="col-6">
							<div class="mol__unit-mailchimp">
								<div class="row g-0">
									<?php get_template_part('template-parts/unit-newsletter'); ?>
								</div>
							</div>
	                	</div>
	                </div>
                </section>

            </div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>