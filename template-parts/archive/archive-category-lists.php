<?php if ( have_posts() ) : ?>

	<header class="page-header">
		<?php
		the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</header><!-- .page-header -->

	<?php
	/* Start the Loop */
	while ( have_posts() ) :
		the_post();

		/*
		 * Include the Post-Type-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		 */
		get_template_part( 'template-parts/archive/list-articles', get_post_type() );

	endwhile;

	// the_posts_navigation();
	the_posts_navigation( array(
		'prev_text'     => '<i class="fa fa-chevron-left"></i> 前の'. get_query_var( 'posts_per_page') . '件',
		'next_text'     => '次の'. get_query_var( 'posts_per_page') . '件 <i class="fa fa-chevron-right"></i>'
	) );
?>
	<div class="pagination-wrap">
	<?php
	if ( pagination() ) {
	  echo pagination();
	}
	?>
	</div><!-- .pagination-wrap -->
<?php
else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>
<!-- hello-temptele-archive-ARCHIVE-CATEGORY-LISTS -->