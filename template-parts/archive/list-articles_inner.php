<?php yojo_post_thumbnail(); ?>

<a href="<?php echo get_permalink() ?>" class="archive-list-cat">
    <header class="entry-header">
		<?php
		// the_title( '<h1 class="entry-title">', '</h1>' );
		$title = get_the_title();
		// $title = the_title();
		// $title = the_title_attribute();
		?>
		<div class="entry-title"><h4><?php echo $title; ?></h4></div>

		<div class="period">
			<?php
			# カスタムフィールドの出力 記事
			if (get_post_meta($post->ID, 'period', true)):
				echo get_post_meta($post->ID, 'period', true);
			endif;
			?>
		</div>
	</header><!-- .entry-header -->

	</header>
	<div class="entry-content">
		<?php
		$content = get_the_content();
		echo $content;
		?>
	</div> <!-- .entry-content -->
	<?php

	if ( 'post' === get_post_type() ) :
		?>
		<div class="entry-meta">
			<?php
			yojo_posted_on();
			// yojo_posted_by();
			?>
		</div><!-- .entry-meta -->
	<?php endif; ?>


</a>

<!-- <div class="entry-content"> -->
	<?php
	// the_content(
	// 	sprintf(
	// 		wp_kses(
	// 			/* translators: %s: Name of current post. Only visible to screen readers */
	// 			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'yojo' ),
	// 			array(
	// 				'span' => array(
	// 					'class' => array(),
	// 				),
	// 			)
	// 		),
	// 		wp_kses_post( get_the_title() )
	// 	)
	// );

	// wp_link_pages(
	// 	array(
	// 		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'yojo' ),
	// 		'after'  => '</div>',
	// 	)
	// );
	?>
<!-- </div> -->
<!-- .entry-content -->
