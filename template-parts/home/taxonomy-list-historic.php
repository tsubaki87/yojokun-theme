<?php
  $args = array(
    'post_type' => 'map',
    // 'posts_per_page' => -1, // 全件
    'posts_per_page' => 4,
    // 'order' => 'ASC',
    'order' => 'DESC',
    'tax_query' => array(
      array(
        'taxonomy' => 'map-cat',
        'terms' => array('historic'), // 史跡紹介　のみ
        // 'terms' => array('walk'), // 散歩コース　のみ
        'field' => 'slug'
      ),
    ),
  );
$info_query = new WP_Query($args);
if($info_query -> have_posts()):
    while($info_query -> have_posts()): 
    $info_query -> the_post();
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class();?>>
        <?php 
        $url = get_permalink(); // 記事のURL 
        // var_dump($url);
        ?>
    	<!-- <a href="<?php # the_permalink(); ?>" class="archive-list-cat"> --> <!-- 記事へのリンク -->
    	<!-- <a href="<?php # echo get_post_meta($post->ID, 'map_url', true); ?>" class="archive-list-cat"> -->
    	<a href="<?php echo $url; ?>" class="archive-list-cat">
    		<div class="article-inner net-list js-fadeUp-child">
                <div class="thumbnail">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/no-img.gif" alt="">
                    <?php endif; ?>
                </div>
                <div class="entry_wrap">
                    <header class="entry-header">
                        <div class="entry-title">
                            <h4> <?php the_title(); ?></h4>
			                <div class="info-msg"><?php echo get_post_meta($post->ID, 'map_name', true); ?></div>
                        </div>
                        <!-- <div class="entry-meta">
                            <span class="posted-on">
                                <?php # the_time( 'Y年m月d日' ); ?>
                            </span>
                        </div> -->
                    </header>
                    <div class="entry-content">
                        <p>
	                        <?php
	                        $content = get_the_content();
	                        echo text_trim($content, 50);
	                        ?>
	                    </p>
                    </div>
                </div><!-- entry_wrap -->
    		</div><!-- .article-inner -->
    	</a>
    	<!-- <footer class="entry-footer">
    		<?php # yojo_entry_footer(); ?>
    	</footer> -->
        <!-- .entry-footer -->
    </article><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; ?>
<?php endif;
wp_reset_postdata();
