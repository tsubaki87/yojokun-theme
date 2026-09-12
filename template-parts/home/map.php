<?php
	$page_id = get_page_by_path('養生訓の里マップの見方');  //〇〇スラッグ名が入ります
	$page = get_post( $page_id );
?>

<div id="section-map"></div>
<div class="position_wide section02 section-map">
	<div class="position_center">
		<div class="title">
			<h1>Map</h1><p>地 　図</p>
		</div>
		<div class="discription">
			<div class="title">
				<?php
					echo $page -> post_title;    //タイトルを取得したい時はこちら
				?>
			</div>
			<p>
				<?php
					echo $page -> post_content;  //本文を取得
					// echo $page -> ID;     //IDを取得したい時はこちら
					// echo $page -> post_title;    //タイトルを取得したい時はこちら
					// echo $page -> post_excerpt;  //抜粋文を取得したい時はこちら
				?>
			</p>
		</div>
		<div class="contents js-fadeUp map_wrapper">
  		<!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ZGX1LsXIKHt9_knW1xmJYU3X5U8zlS8&ehbc=2E312F" width="1800px" height="480"></iframe> -->

			<?php // 別サイトの Google Maps Platform クイック ビルダー Location Plus ====================を埋め込み ?>
			<iframe src="https://map.yojokun.org/map-yojo-main.php" target="_blank rel="noreferrer noopener"
				width="1800" height="480"
			  style="border:0;"
			  loading="lazy">
			</iframe>


			<div class="map_to_list_wrap">
				<?php
				$cat_column = get_term_by( 'slug', 'historic-site' , 'category' );
				$cat_column_link = get_term_link( $cat_column , 'category' );
				?>
				<a href="<?php echo esc_url( $cat_column_link ); ?>" class="btn btn-addition02 word-bk">ゆかりの地　<wbr>一覧</a>
				<?php
				$cat_column = get_term_by( 'slug', 'collection-library' , 'category' );
				$cat_column_link = get_term_link( $cat_column , 'category' );
				?>
				<a href="<?php echo esc_url( $cat_column_link ); ?>" class="btn btn-addition02 word-bk">資料所蔵館　<wbr>一覧</a>
			</div><!-- map_to_list_wrap -->
			
		</div>
	</div>
</div><!-- position_wide -->