	<div class="archive-top-sky">
		<?php
			$page_id = get_page_by_path('header-img_全国に広がる');  //〇〇スラッグ名が入ります
			$page = get_post( $page_id );
			$thumbnail_url = get_the_post_thumbnail_url(
			  $page -> ID, // 投稿IDまたは投稿オブジェクトを指定（省略可）
			  'full' // 画像サイズを指定
			);
			$page_id = get_page_by_path('header-img_全国に広がる-スマホ');  //〇〇スラッグ名が入ります
			$page = get_post( $page_id );
			$thumbnail_url_sp = get_the_post_thumbnail_url(
			  $page -> ID, // 投稿IDまたは投稿オブジェクトを指定（省略可）
			  'full' // 画像サイズを指定
			);
		?>
		<img class="pc" src="<?php echo $thumbnail_url; ?>" alt="">
		<img class="sp" src="<?php echo $thumbnail_url_sp; ?>" alt="">
	</div>

	<main id="primary" class="site-main">
		<?php get_template_part('template-parts/archive/archive-main-default_inner'); ?>
	</main><!-- #main -->
