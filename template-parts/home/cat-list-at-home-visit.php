<?php
$arg = array(
    // 'posts_per_page' => 4, // 表示する件数
    // 'orderby' => 'date', // 日付でソート
    // 'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
    'category_name' => 'historic-site', // 表示したいカテゴリーのスラッグを指定
    // 'include' => array(732, 730, 930, 926, 724),
    'include' => array(732, 730, 926, 724),
  );
$posts = get_posts( $arg );
if( $posts ):
  foreach ( $posts as $post ) :
    setup_postdata( $post );

    get_template_part( 'template-parts/archive/list-articles-at-home-visit', get_post_type() );

  endforeach;
endif;
wp_reset_postdata();