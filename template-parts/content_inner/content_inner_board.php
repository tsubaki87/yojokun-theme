<?php
	# 本文の最初の h3（例:「監事　江頭 啓介」）から、肩書きと氏名を取り出す（スマホで写真の右に出す）
	$board_role = '';
	$board_name = '';
	if (preg_match('/<h3[^>]*>(.*?)<\/h3>/s', get_the_content(), $matches)):
		$heading = trim(wp_strip_all_tags($matches[1]));
		$parts = preg_split('/　+/u', $heading, 2); // 肩書きと氏名の間は全角スペース
		if (count($parts) === 2):
			list($board_role, $board_name) = $parts;
		else:
			$board_name = $heading;
		endif;
	endif;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<p class="board-org">（一社）曽田豊二記念　養生訓の里ネットワーク　役員</p>
		<?php if ($board_name): ?>
		<p class="board-person">
			<?php if ($board_role): ?><span class="board-role"><?php echo esc_html($board_role); ?></span><?php endif; ?>
			<span class="board-name"><?php echo esc_html($board_name); ?></span>
		</p>
		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'yojo' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'yojo' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php
	get_template_part('template-parts/content_inner/get_articles_in_category_board');
	?>
</article><!-- #post-<?php the_ID(); ?> -->
