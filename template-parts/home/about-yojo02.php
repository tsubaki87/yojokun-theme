<div id="about-yojo02"></div>
<div class="position_wide section01 wave00-horizontal about-yojo02">
	<div class="wrap_grid grid_col_12 position_center home-about_wrap02">
		<div class="wrap_grid grid_col_12 position_center_transform-l">
			<div class="wrap_grid grid_col_6 home-about_wrap js-fadeUp-wrap-delay">
				<?php
					$page_id_02 = get_page_by_path('Topページ_益軒・東軒夫妻（概要）');  //〇〇スラッグ名が入ります
					$page_02 = get_post( $page_id_02 );
				?>
				<div class="home-about-text js-fadeUp-child">
					<?php
					    echo $page_02 -> post_content;  //本文を取得
						// echo $page_02 -> ID;     //IDを取得したい時はこちら
						// echo $page_02 -> post_title;    //タイトルを取得したい時はこちら
						// echo $page_02 -> post_excerpt;  //抜粋文を取得したい時はこちら
					?>
				</div><!-- home-about -->
				<div class="home-about-img js-fadeUp-child">
		 			<img src="<?php echo get_the_post_thumbnail_url($page_id_02, 'full'); ?>" alt="">
					<div class="caption">同じ大きさで仲良く並んだ貝原益軒の墓（右）、東軒の墓（左）。金龍寺境内で</div>
					<!-- <img class="pc" src="<?php # echo get_template_directory_uri(); ?>/img/IMG_0769.jpeg" alt=""> -->
					<?php $page = get_page_by_path('益軒・東軒夫妻「琴瑟相和し、健康長寿めざした45'); // ページ「スラグ」からリンクパスを取得 ?>
					<a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class="btn">その他の写真</a>
				</div><!-- home-about -->
			</div><!-- home-about_wrap -->
		</div>
	</div><!-- .wrap_grid -->
</div><!-- position_wide -->