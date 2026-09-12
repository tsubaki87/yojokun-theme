<?php
get_header();
?>

	<?php 
		// Top Massage ====================
		// get_template_part('template-parts/home/top-massage'); 
		get_template_part('template-parts/home/top-massage-ekiken'); 
		// Top Massage ==================== end
	?>

	<main id="primary" class="site-main">
		<?php # get_template_part('template-parts/home/slick-home-top'); ?>
		<?php get_template_part('template-parts/home/trigger_pin'); ?>

		<?php get_template_part('template-parts/home/top-info'); ?>

		<?php # get_template_part('template-parts/home/news-core'); ?>
		<?php get_template_part('template-parts/home/news'); ?>
		<?php # get_template_part('template-parts/home/event'); ?>
			
		<?php get_template_part('template-parts/home/about-yojo'); ?>
		<?php get_template_part('template-parts/home/about-yojo02'); ?>

		<?php get_template_part('template-parts/home/map'); ?>
		<?php get_template_part('template-parts/home/board-member'); ?>
		<?php  # get_template_part('template-parts/home/greeting'); ?>
		<?php # get_template_part('template-parts/home/network'); ?>
		<?php get_template_part('template-parts/home/purpose'); ?>
		<?php get_template_part('template-parts/home/visit'); ?>
		<?php # get_template_part('template-parts/home/storys'); ?>
		<?php # get_template_part('template-parts/home/sponsorship'); ?>

		<br><br><br><br>

		<!-- <div class="wrap_grid grid_col_12 position_center">
			<?php # get_template_part('template-parts/home/slick-home-sub'); ?>
		</div> -->
		<!-- .wrap_grid -->

		<?php get_template_part('template-parts/home/cat-tag-list'); ?>

		<?php get_template_part('template-parts/home/visitor-counter'); ?>
			
	</main><!-- #main -->
<?php
# get_sidebar();
get_footer();
