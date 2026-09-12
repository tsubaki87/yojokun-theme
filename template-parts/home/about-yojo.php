<div id="about-yojo"></div>
<div class="position_wide section01 wave00 about-yojo">
	<div class="wrap_grid grid_col_12 position_center home-about_wrap01">
		<div class="wrap_grid grid_col_12 position_center_transform-r">
			<div class="wrap_grid grid_col_6 home-about_wrap js-fadeUp-wrap-delay">
				<?php
					$page_id = get_page_by_path('Topページ_益軒と養生訓の簡潔な説明（概要）');  //〇〇スラッグ名が入ります
					$page = get_post( $page_id );
				?>
				<div class="home-about-img js-fadeUp-child">
		 			<img src="<?php echo get_the_post_thumbnail_url($page_id, 'full'); ?>" alt="">
				</div><!-- home-about -->
				<div class="home-about-text js-fadeUp-child">
					<?php
						echo $page -> post_content;  //本文を取得
						// echo $page -> ID;     //IDを取得したい時はこちら
						// echo $page -> post_title;    //タイトルを取得したい時はこちら
						// echo $page -> post_excerpt;  //抜粋文を取得したい時はこちら
					?>
					<?php $page = get_page_by_path('貝原益軒プロフィル'); // 固定ページ「スラグ」からリンクパスを取得 ?>
					<?php
					// $get_page_id = $page->ID;
					// var_dump($get_page_id );
					?>
					<!-- <a href="<?php # echo esc_url(get_permalink($page -> ID)); ?>" class="btn">貝原益軒プロフィル</a> -->

					<!-- <a href="<?php # echo '?p=708'; ?>" class="btn">貝原益軒プロフィル</a> -->
				</div><!-- home-about -->
			</div><!-- home-about_wrap -->
		</div>
	</div><!-- .wrap_grid -->
</div><!-- position_wide -->