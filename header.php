<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('leading-normal'); ?>>


<header data-topbar class="site-header px-6 py-4">
	<div class="main-navigation-overlay"></div>

	<a class="menuToggle" href="#">
		<svg class="svg-icon menu-toggle" viewBox="0 0 20 20">
			<path fill="#000000" d="M3.314,4.8h13.372c0.41,0,0.743-0.333,0.743-0.743c0-0.41-0.333-0.743-0.743-0.743H3.314
				c-0.41,0-0.743,0.333-0.743,0.743C2.571,4.467,2.904,4.8,3.314,4.8z M16.686,15.2H3.314c-0.41,0-0.743,0.333-0.743,0.743
				s0.333,0.743,0.743,0.743h13.372c0.41,0,0.743-0.333,0.743-0.743S17.096,15.2,16.686,15.2z M16.686,9.257H3.314
				c-0.41,0-0.743,0.333-0.743,0.743s0.333,0.743,0.743,0.743h13.372c0.41,0,0.743-0.333,0.743-0.743S17.096,9.257,16.686,9.257z"></path>
		</svg>
	</a>
	
	<div class="flex flex-wrap">
		<div class="flex w-full sm:w-full md:w-1/3">
			<div class="site-branding">
				<?php if(is_front_page()) : ?>
					<h1 class="site-title"><a href="<?php echo site_url(); ?>"><?php bloginfo('site_title'); ?></a></h1>
					<a href="<?php echo site_url(); ?>"><img class="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/site-logo.png" alt=""></a>
				<?php else : ?>
					<h1 class="site-title"><a href="<?php echo site_url(); ?>"><?php bloginfo('site_title'); ?></a></h1>
					<a href="<?php echo site_url(); ?>"><img class="site-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/site-logo.png" alt=""></a>
				<?php endif; ?>
			</div>
		</div>

		<div class="flex w-full sm:w-full md:w-2/3 sm:text-right">
			<?php wp_nav_menu( [ 'theme_location' => 'main-menu', 'container_class' => 'main-menu-container', 'menu_class' => 'main-menu'] ); ?>
		</div>
	</div>
</header>