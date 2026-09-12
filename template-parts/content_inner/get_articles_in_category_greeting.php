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
$args = [
    'category_name' => 'member',
    'orderby' => 'date',
    'order' => 'DESC', //'ASC'
];
?>
<div class="get_articles_in_category__wrap greeting">
    <div class="get_articles_in_category__title">養生訓の里ネットワーク　委員一覧</div>
    <ul class="get_articles_in_category">
        <?php 
        // 条件を渡して記事を取得
        $custom_posts = get_posts($args);
        foreach ( $custom_posts as $post ): setup_postdata($post); 
        ?>
    	<li>
    		<?php # the_time('Y/m/d') ?> 
    		<a href="<?php the_permalink(); ?>">
    		<?php the_title(); ?></a>
    	</li>
        <?php endforeach; ?>
    </ul>
</div><!-- get_articles_in_category__wrap-->