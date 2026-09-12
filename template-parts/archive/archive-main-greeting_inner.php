<?php if ( have_posts() ) : ?>

<div class="position_center">
	<header class="page-header">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</header><!-- .page-header -->
</div>

<div class="wrap_grid_auto-fill grid_col_3 position_center">
	<?php
	/* Start the Loop */
	while ( have_posts() ) :
		the_post();
		/*
		 * Include the Post-Type-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		 */
		get_template_part( 'template-parts/content-greeting', get_post_type() );

	endwhile;

	the_posts_navigation();

else :
	get_template_part( 'template-parts/content', 'none' );
endif;
?>
</div><!-- .wrp_grid -->
