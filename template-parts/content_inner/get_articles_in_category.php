<?php
// カテゴリーのデータを取得
$cat = get_the_category();
$cat = $cat[0];
// // var_dump($cat);
// // カテゴリー名の表示
// echo $cat->cat_name;
// // カテゴリーIDの表示
// echo $cat->cat_ID;
// // カテゴリースラッグの表示
// echo $cat->slug;

// 「Top-News表示」の場合は、強制的に「お知らせ」を表示させる ====================
$slug_name = $cat->slug;
if ($slug_name === 'news-top') {
    $cat = get_the_category();
    $cat = $cat[1];
}
// 「Top-News表示」の場合は、強制的に「お知らせ」を表示させる ==================== end

$args = [
    'posts_per_page' => 50, // 表示する件数
    'category' => $cat->cat_ID,
    'orderby' => 'date',
    'order' => 'DESC', //'ASC'
];

$classes = get_post_class();
// var_dump($classes[0]);

// 条件を渡して記事を取得
$custom_posts = get_posts($args);
if (count($custom_posts) > 1):
?>

<div class="get_articles_in_category__wrap">
    <div class="get_articles_in_category__title"><span class="category-item">カテゴリー　</span><?php echo $cat->cat_name; ?><span class="vertical-line"> | 記事一覧</span></div>
    <ul class="get_articles_in_category">
        <?php 
        foreach ( $custom_posts as $post ): setup_postdata($post); 
            $post_id = "post-" . get_the_ID();
            // var_dump($post_id);
        ?>
    	<li id="<?php echo $post_id; ?>">
    		<?php # the_time('Y/m/d') ?> 
    		<a href="<?php the_permalink(); ?>" 
            <?php if ($classes[0] == $post_id) { echo 'class="' . 'now_page' . '"'; } ?>>
            > 
    		<?php the_title(); ?></a>
    	</li>
        <?php endforeach; ?>
    </ul>
</div><!-- get_articles_in_category__wrap-->

<?php
endif;