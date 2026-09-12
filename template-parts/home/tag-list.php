<?php
$arg   = array(
    'posts_per_page' => 10, // 表示する件数
    'orderby'        => 'date', // 日付でソート
    'order'          => 'DESC', // DESCで最新から表示、ASCで最古から表示
    'tag'            => 'health' // 表示したいタグのスラッグを指定
);
$posts = get_posts( $arg );
if ( $posts ): ?>
    <?php
    foreach ( $posts as $post ) :
        setup_postdata( $post ); 
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    	<a href="<?php the_permalink(); ?>" class="archive-list-cat">
    		<div class="article-inner">
                <div class="thumbnail">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/no-img.gif" alt="">
                    <?php endif; ?>
                </div>
                <headrt class="entry-header">
                    <div class="entry-title">
                       <h4> <?php the_title(); ?></h4>
                    </div>
                    <div class="entry-meta">
                        <span class="posted-on">
                            <?php the_time( 'Y年m月d日' ); ?>
                        </span>
                    </div>
                </header>
                <div class="entry-content">
                    <p>
	                <?php
	                $content = get_the_content();
	                echo $content;
	                ?>
	                </p>
                </div>
    		</div><!-- .article-inner -->
    	</a>
    	<footer class="entry-footer">
    		<?php yojo_entry_footer(); ?>
    	</footer><!-- .entry-footer -->
    </article><!-- #post-<?php the_ID(); ?> -->

    <?php endforeach; ?>
<?php
endif;
wp_reset_postdata();