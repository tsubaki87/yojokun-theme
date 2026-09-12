
<nav id="fix-navigation" class="main-navigation fix-menu">
	<div class="logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="custom-logo-link">
			<div class="custom-logo">
				<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="logo">
       	<img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/logo_sp.jpg" alt="logo">
			</div>
		</a>
	</div>
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'fix-menu-id',
		)
	);
	?>
</nav><!-- #fix-navigation -->