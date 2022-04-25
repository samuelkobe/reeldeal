<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<meta property="og:title" content="" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="" />
		<meta property="og:url" content="" />
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />

		<?php wp_head(); ?>

		<script src="https://unpkg.com/vue@3"></script>
		<!-- <script src="https://unpkg.com/vue@3.2.33/dist/vue.global.prod.js"></script> -->

	</head>
	<body <?php body_class(); ?>>
		<?php if ( ! function_exists( 'wp_body_open' ) ) {
			function wp_body_open() {
				do_action( 'wp_body_open' );
			}
		} ?>


	<?php if ( get_field( 'splash_page_toggle', 'option' ) == 0 ) : ?>
		<div id="app">
			<header id="header" :class="[!view.atTopOfPage ? 'h-16' : 'h-16 lg:h-28']" class="w-full flex flex-wrap transition-height duration-200 fixed top-0 z-50" role="banner">
			<!-- <header id="header" :class="[ menuOpen ? 'h-full lg:h-28' : 'h-28']" class="w-full flex flex-wrap fixed top-0 z-50" role="banner"> -->
				<?php get_template_part('parts/nav') ?>
			</header>
	<?php else: ?>
		<div id="app">
	<?php endif; ?>