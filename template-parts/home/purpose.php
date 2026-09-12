<div class="position_wide section02 img_bg_shine" id="purpose">
	<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/wave04-down.png" alt="">
</div><!-- position_wide -->
<div class="position_wide section02 img_bg_shine">
	<div class="position_center">
		<div class="title">
			<h1>Purpose</h1><p>目　　的</p>
		</div>
		<div class="contents js-fadeUp">
			<?php
				$page_id_02 = get_page_by_path('topページ_目的（団体の設立と事業）');  //〇〇スラッグ名が入ります
				$page_02 = get_post( $page_id_02 );
			?>
				<img class="pc" src="<?php echo get_the_post_thumbnail_url($page_id_02, 'full'); ?>" alt="">
			<?php
			    echo $page_02 -> post_content;  //本文を取得
				// echo $page_02 -> ID;     //IDを取得したい時はこちら
				// echo $page_02 -> post_title;    //タイトルを取得したい時はこちら
				// echo $page_02 -> post_excerpt;  //抜粋文を取得したい時はこちら
			?>
			<?php $page = get_page_by_path('団体の設立と事業（詳細）'); // ページ「スラグ」からリンクパスを取得 ?>
			<!-- <a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class="btn">詳しく見る</a> -->
		</div>
	</div>
</div><!-- position_wide -->
<div class="position_wide section02 img_bg_shine">
	<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/wave-parpose-down.png" alt="">
</div><!-- position_wide -->

