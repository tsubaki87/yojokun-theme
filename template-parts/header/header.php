<header id="masthead" class="site-header">
	<div class="site-header-wrap">
		<div class="site-branding">
			<?php // the_custom_logo(); ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link">
				<div class="custom-logo">
					<!-- <img class="pc" src="<?php # echo get_template_directory_uri(); ?>/img/logo-yojo.png" alt="logo"> -->
          <!-- <img class="sp" src="<?php # echo get_template_directory_uri(); ?>/img/logo-yojo.png" alt="logo"> -->
					<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/logo-yojokun.png" alt="logo">
          <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/logo-yojokun.png" alt="logo">
				</div>
			</a>
		</div><!-- .site-branding -->

		<div class="site-header-right-side">
			<?php get_template_part('template-parts/utility/social-media'); ?>

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'davinci' ); ?></button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div><!-- .site-header-right-side -->
	</div><!-- .site-header-wrap -->



<input type="checkbox" id="hamburger-btn-check">
<label for="hamburger-btn-check" class="hamburger-btn" id="hamburger-btn-id"><span></span></label>
<label for="hamburger-btn-check" class="site-navigation-overlay" id="hamburger-btn-id"><span></span></label>
<nav id="site-navigation-fixed" class="main-navigation-fixed">
	<div class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '', 'sample01' ); ?></div>
	<div class="main-navigation-fixed-inner">
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
			'container_class' => 'menu-menu-1-container',
		)
	);
	// wp_nav_menu(
	// 	array(
	// 		'theme_location' => 'secondary',
	// 		// 'menu' => 'menu-3',
	// 		'container_class' => 'menu-menu-1-container',
	// 	)
	// );
	?>

	<?php # get_template_part('template-parts/utility/social-media'); ?>
	<?php # get_template_part('template-parts/utility/searchform'); ?>
	</div>

</nav><!-- #site-navigation-fix --> <!-- hamburger-btn -->



</header><!-- #masthead -->
