
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php echo get_permalink() ?>" class="archive-list-cat-1row">
		<div class="article-inner">
			<?php get_template_part('template-parts/archive/list-articles_inner'); ?>
		</div><!-- .article-inner -->
	</a>
	<footer class="entry-footer">
		<?php yojo_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
