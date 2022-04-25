		<?php if ( get_field( 'splash_page_toggle', 'option' ) == 0 ) : ?>
				<!-- footer -->
			<footer class="footer bg-brand-black text-white mt-16 lg:mt-32" role="contentinfo">


				<div class="contained">

					<div class="w-full flex lg:flex-row flex-wrap py-6 lg:py-14">

						<div class="w-full md:w-1/2 lg:w-1/4 order-0 mb-8 lg:mb-0 lg:self-center">
							<div class="w-full flex justify-center lg:pr-1/8">
								<?php $footer_image = get_field( 'footer_image', 'option' ); ?>
								<?php if ( $footer_image ) : ?>
									<img class="w-[320px] sm:w-[400px] h-auto lg:w-full lg:pr-1/12 lg:border-r-4 lg:border-brand-alt" src="<?php echo esc_url( $footer_image['url'] ); ?>" alt="<?php echo esc_attr( $footer_image['alt'] ); ?>" />
								<?php endif; ?>
							</div>
						</div>

						<div class="w-full md:w-1/4 lg:w-1/6 order-2 lg:order-1 mb-8 lg:mb-0">
							<h3 class="text-lg lg:text-2xl text-white font-bold mb-4 lg:mb-6">Contact</h4>
							<div class="w-full flex flex-col text-base xl:text-xl xl:leading-8">
								<a class="hover:text-brand-alt transition-colors duration-300" href="tel:<?php the_field( 'phone_number', 'option' ); ?>"><?php the_field( 'phone_number_text', 'option' ); ?></a>
								<a class="hover:text-brand-alt transition-colors duration-300" href="mailto:<?php the_field( 'contact_email', 'option' ); ?>?subject=Inquiry from the <?php bloginfo('name'); ?> website" target="_blank"><?php the_field( 'contact_email_link_text', 'option' ); ?></a>
							</div>
						</div>

						<?php // Second footer navigation section ?>
						<div class="w-1/2 md:w-1/4 lg:w-1/6 order-3 lg:order-2 mb-8 lg:mb-0">
							<h3 class="text-lg lg:text-2xl text-white font-bold mb-4 lg:mb-6">Resources</h4>
							<div class="w-full flex flex-col">
								<?php footer_nav(); ?>
							</div>
						</div>

						<?php // Social Media footer section ?>
						<?php if ( get_field( 'social_media_toggle', 'option' ) == 1 ) : ?>
							<?php get_template_part('parts/social') ?>
						<?php else : ?>
								<?php // Social Media turned off ?>
						<?php endif; ?>
								
						<?php // Newsletter section ?>
						<?php if ( get_field( 'newsletter_media_toggle', 'option' ) == 1 ) : ?>
								<?php get_template_part('parts/newsletter') ?>
						<?php else : ?>
							<?php // Newsletter turned off ?>
						<?php endif; ?>

					</div>

				</div>

				<div class="w-full flex flex-col lg:flex-row bg-white text-brand-black py-2">
					<div class="w-full contained">
						<div class="w-full flex flex-col lg:flex-row lg:items-end text-base xl:text-lg">
							<div class="w-full lg:1/2 xl:w-3/4">
								<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All rights reserved.</p>
							</div>
							<div class="w-full lg:1/2 xl:w-1/4 flex lg:justify-end">
								<a href="https://webok.ca" target="_blank" class="text-base hover:text-[#46CEC3] transition-colors duration-200"><?php _e('Powered by', 'web-ok-starter'); ?> Web Ok Solutions Inc.</a>
							</div>
						</div>
					</div>
				</div>
                	
			</footer>
			<!-- /footer -->

		<?php endif; ?>

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

	</body>
</html>


