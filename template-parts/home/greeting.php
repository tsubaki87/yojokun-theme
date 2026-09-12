<div class="position_wide section01 wave00-ysn" id="greeting">
	<div class="position_center">
		<div class="title word-bk">
			<!-- <h2>養生訓の里ネットワーク<wbr>準備委員会</h2> -->
			<!-- <h2>ご挨拶<wbr>（準備委員会）</h2> -->
			<h2>ご挨拶</h2><h3>（運営委員会）</h3>
		</div>
	</div>
	<div class="position_center">
		<!-- <div class="position_center home-ysn js-fadeUp-wrap"> -->
		<div class="wrap_grid_auto-fill grid_col_3 position_center home-ysn js-fadeUp-wrap">
			<?php get_template_part('template-parts/home/cat-list-at-home-greeting-top'); ?>
		</div><!-- .wrap_grid -->
		<div class="wrap_grid_auto-fill grid_col_3 position_center home-ysn js-fadeUp-wrap">
			<?php get_template_part('template-parts/home/cat-list-at-home-greeting'); ?>
		</div><!-- .wrap_grid -->

		<?php
			$page_id = get_page_by_path('創設賛同者一覧');  //〇〇スラッグ名が入ります
			$page = get_post( $page_id );
		?>
		<div id="founding-supporter"></div>
		<div class="supporter_wrap">
			<div class="title"><h3>創設賛同者</h3></div>

			<?php
				echo $page -> post_content;  //本文を取得
				// echo $page -> ID;     //IDを取得したい時はこちら
				// echo $page -> post_title;    //タイトルを取得したい時はこちら
				// echo $page -> post_excerpt;  //抜粋文を取得したい時はこちら
			?>

		</div>
	</div>
</div><!-- position_wide -->