<?php get_header(); ?>

	<main role="main">

	<?php if ( get_field( 'splash_page_toggle', 'option' ) == 0 ) : ?>

		<section class="container mx-auto my-8 lg:my-16 px-4">
			<p class="p-4">Posts are disabled for this theme. Talk to your web admin.</p>
		</section>
		
	<?php else: ?>
				
		<section class="w-full h-[100vh]" style="background-color: <?php echo the_field( 'background_color', 'option' ); ?>;">
			<div class="flex flex-col w-full h-full items-center justify-center" style="color: <?php echo the_field( 'text_color', 'option' ); ?>;">
				<div class="flex flex-row w-full px-4 lg:px-0 items-center justify-center">
					<?php $branding_logo = get_field( 'branding_logo', 'option' ); ?>
					<?php if ( $branding_logo ) : ?>
						<img class="rounded w-56" src="<?php echo esc_url( $branding_logo['url'] ); ?>" alt="<?php echo esc_attr( $branding_logo['alt'] ); ?>" />
					<?php endif; ?>
				</div>
				<div class="flex flex-col w-full items-center justify-center px-4 lg:px-0 lg:w-1/2 lg:mx-auto my-0 lg:mt-12">
					<h1 class="text-2xl lg:text-5xl my-4 text-center"><?php the_field( 'large_text', 'option' ); ?></h1>
					<h2 class="text-base lg:text-xl text-center" ><?php the_field( 'small_text', 'option' ); ?></h2>
				</div>
			</div>
		</section>

	<?php endif; ?>

	</main>

<?php get_footer(); ?>