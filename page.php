<?php get_header(); ?>

	<main role="main">

	<?php if ( get_field( 'splash_page_toggle', 'option' ) == 0 ) : ?>

		<?php get_template_part('parts/hero'); ?>

		<section class="container mx-auto my-8 lg:my-16 px-4">
			<?php // <section> added inside row loop
			if (have_rows('rows')):
				// loop through the rows of data
				while (have_rows('rows')) : the_row();
				$layout = get_row_layout();
				include 'rows/row-' . $layout . '.php';
			endwhile;
			else :
				echo '<p class="p-4">No rows created yet. Talk to your web admin.</p>';
			endif; ?>
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