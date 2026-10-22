<?php
// 役員（board）の記事一覧。並びは投稿日時の新しい順（代表理事が先頭になるように、投稿日時で並べている）
$args = [
    'posts_per_page' => 50, // 表示する件数
    'category_name' => 'board',
    'orderby' => 'date',
    'order' => 'DESC', //'ASC'
];

$classes = get_post_class();
?>
<div class="get_articles_in_category__wrap board">
    <div class="get_articles_in_category__title">役員一覧</div>
    <ul class="get_articles_in_category">
        <?php
        // 条件を渡して記事を取得
        $custom_posts = get_posts($args);
        foreach ( $custom_posts as $post ): setup_postdata($post);
            $post_id = "post-" . get_the_ID();
        ?>
    	<li>
    		<a href="<?php the_permalink(); ?>"<?php if ($classes[0] == $post_id) { echo ' class="now_page"'; } ?>>
    		<?php the_title(); ?></a>
    	</li>
        <?php endforeach; wp_reset_postdata(); ?>
    </ul>
</div><!-- get_articles_in_category__wrap-->
