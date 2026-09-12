<?php
get_header();
?>

 	<!-- Top Massage ==================== -->
	<?php 
		// get_template_part('template-parts/home/top-massage'); 
		get_template_part('template-parts/home/top-massage-ekiken'); 
	?>
 	<!-- Top Massage ==================== end -->

	<main id="primary" class="site-main">

		<?php get_template_part('template-parts/home/slick-home-top'); ?>
		

		<!-- TOP スクロールイベント作成 ============================== -->
		<!-- <div class="position_wide section-top__wrap img_bg_yojokun">
			<div class="ection-top">
				<img class="pc" src="<?php # echo get_template_directory_uri(); ?>/img/ph-yojokun-ekiken01.jpg" alt="">
				<img class="pc" src="<?php # echo get_template_directory_uri(); ?>/img/ph-yojokun-ekiken02.jpg" alt="">
				<div class="title">
					<h1>あの「養生訓」をいま、webで再現 </h1><p>養生訓の里ネットワーク</p>
				</div>
				<div class="contents js-fadeUp">
					<h1>あの「養生訓」をいま、webで再現 </h1><p>養生訓の里ネットワーク</p>
				</div>
			</div>
		</div> -->
		<!-- position_wide -->
		<!-- TOP スクロールイベント作成 ============================== end -->





		<!-- <div class="position_wide section01 wave00 wave00-action wave00-news-core">
			<div class="position_center">
				<div class="title"><h1>News</h1><p>お知らせ</p></div>
			</div>
			<div class="position_center home-action_ground-wrap home-news-core_ground-wrap">
				<div class="position_center action_wrap js-fadeUp-wrap-delay home-action_wrap home-news-core_wrap">
					<img class="ill-core" src="<?php # echo get_template_directory_uri(); ?>/img/ill-core03.png" alt="">
					<?php # get_template_part('template-parts/home/taxonomy-list-historic'); ?>
					<?php # get_template_part('template-parts/home/cat-list-at-home-news'); ?>
				</div>
					<a href="#" class="btn">詳しく見る</a>
			</div>
		</div> -->
		<!-- position_wide -->


		<div class="position_wide section01 wave00-news">
			<div class="position_center">
				<div class="title"><h1>News</h1><p>お知らせ</p></div>
			</div>
			<div class="contents js-fadeUp-wrap">
				<div class="news-lists">
					<?php get_template_part('template-parts/home/cat-list-1row-at-home-news'); ?>
				</div>
			</div>
		</div>
		<!-- position_wide -->

		<!-- <div class="position_wide section01 wave00-event">
			<div class="position_center">
				<div class="title">
					<h1>Event</h1>
					<p>イベント</p>
				</div>
			</div>
			<div class="position_center">
				<div class="wrap_grid_auto-fill grid_col_3 position_center home-event js-fadeUp-wrap">
					<?php # get_template_part('template-parts/home/cat-list-at-home-event'); ?>
				</div> -->
				<!-- .wrap_grid -->
			<!-- </div>
		</div> -->
		<!-- position_wide -->





		<div class="position_wide section01 wave00 about-yojo">
			<div class="wrap_grid grid_col_12 position_center home-about_wrap01">
				<div class="wrap_grid grid_col_12 position_center_transform-r">
					<div class="wrap_grid grid_col_6 home-about_wrap js-fadeUp-wrap-delay">
						<div class="home-about-text js-fadeUp-child">
							<?php
								$page_id = get_page_by_path('Topページ_益軒と養生訓の簡潔な説明（概要）');  //〇〇スラッグ名が入ります
								$page = get_post( $page_id );
								echo $page -> post_content;  //本文を取得
								// echo $page -> ID;     //IDを取得したい時はこちら
								// echo $page -> post_title;    //タイトルを取得したい時はこちら
								// echo $page -> post_excerpt;  //抜粋文を取得したい時はこちら
							?>
							<?php $page = get_page_by_path('Topページ_益軒と養生訓の簡潔な説明（概要）'); // ページ「スラグ」からリンクパスを取得 ?>
							<a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class="btn">詳しく見る</a>
						</div><!-- home-about -->
						<div class="home-about-img js-fadeUp-child">
				 			<img class="pc" src="<?php echo get_the_post_thumbnail_url($page_id, 'full'); ?>" alt="">
						</div><!-- home-about -->
					</div><!-- home-about_wrap -->
				</div>
			</div><!-- .wrap_grid -->
		</div><!-- position_wide -->

		<div class="position_wide section01 wave00-horizontal about-network">
			<div class="wrap_grid grid_col_12 position_center home-about_wrap02">
				<div class="wrap_grid grid_col_12 position_center_transform-l">
					<div class="wrap_grid grid_col_6 home-about_wrap js-fadeUp-wrap-delay">
						<div class="home-about-img js-fadeUp-child">
							<?php
								$page_id_02 = get_page_by_path('Topページ_益軒・東軒夫妻（概要）');  //〇〇スラッグ名が入ります
								$page_02 = get_post( $page_id_02 );
							?>
				 			<img class="pc" src="<?php echo get_the_post_thumbnail_url($page_id_02, 'full'); ?>" alt="">
						</div><!-- home-about -->
						<div class="home-about-text js-fadeUp-child">
							<?php
							    echo $page_02 -> post_content;  //本文を取得
								// echo $page_02 -> ID;     //IDを取得したい時はこちら
								// echo $page_02 -> post_title;    //タイトルを取得したい時はこちら
								// echo $page_02 -> post_excerpt;  //抜粋文を取得したい時はこちら
							?>
							<?php $page = get_page_by_path('Topページ_益軒・東軒夫妻（概要）'); // ページ「スラグ」からリンクパスを取得 ?>
							<a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class="btn">詳しく見る</a>
						</div><!-- home-about -->
					</div><!-- home-about_wrap -->
				</div>
			</div><!-- .wrap_grid -->
		</div><!-- position_wide -->


		<div class="position_wide section02">
			<div class="position_center">
				<div class="title">
					<h1>Map</h1><p>地 　図</p>
				</div>
				<div class="contents js-fadeUp">
    			<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ZGX1LsXIKHt9_knW1xmJYU3X5U8zlS8&ehbc=2E312F" width="1800px" height="480"></iframe>
					<?php
					$cat_column = get_term_by( 'slug', 'historic-site' , 'category' );
					$cat_column_link = get_term_link( $cat_column , 'category' );
					?>
					<a href="<?php echo esc_url( $cat_column_link ); ?>" class="btn btn-addition02">史跡を訪ねて　一覧</a>
					<?php
					$cat_column = get_term_by( 'slug', 'collection-library' , 'category' );
					$cat_column_link = get_term_link( $cat_column , 'category' );
					?>
					<a href="<?php echo esc_url( $cat_column_link ); ?>" class="btn btn-addition02">資料所蔵・展示資料館　一覧</a>
				</div>
			</div>
		</div><!-- position_wide -->






		

		<div class="position_wide section01 wave00-ysn" id="greeting">
			<div class="position_center">
				<div class="title">
					<h2>養生訓の里ネットワーク準備委員会</h2>
				</div>
			</div>
			<div class="position_center">
				<div class="position_center home-ysn js-fadeUp-wrap">
					<?php get_template_part('template-parts/home/cat-list-at-home-greeting-top'); ?>
				</div><!-- .wrap_grid -->
				<div class="wrap_grid_auto-fill grid_col_3 position_center home-ysn js-fadeUp-wrap">
					<?php get_template_part('template-parts/home/cat-list-at-home-greeting'); ?>
				</div><!-- .wrap_grid -->
			</div>
		</div><!-- position_wide -->

		<div class="position_wide section01 wave00-horizontal about-network">
			<div class="wrap_grid grid_col_12 position_center" id="network">
				<div class="title"><h1>Network</h1><p>関連団体</p></div>
			</div><!-- .wrap_grid -->
			<div class="position_center home-about_net-list_wrap">
				<div class="wrap_grid-16 grid_col_2 position_center js-fadeUp-wrap">
					<?php get_template_part('template-parts/home/taxonomy-list-network'); ?>
				</div><!-- .wrap_grid -->
			</div>
		</div><!-- position_wide -->



		<div class="position_wide section02 img_bg_shine">
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
					<a href="<?php echo esc_url(get_permalink($page -> ID)); ?>" class="btn">詳しく見る</a>
				</div>
			</div>
		</div><!-- position_wide -->
		<div class="position_wide section02 img_bg_shine">
			<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/wave-parpose-down.png" alt="">
		</div><!-- position_wide -->





		<div class="position_wide section01 wave00 wave00-action">
			<div class="position_center">
				<div class="title"><h1>Visit</h1><p>ゆかりの地</p></div>
			</div>
			<div class="position_center home-action_ground-wrap">
				<div class="wrap_grid-32 grid_col_3 position_center action_wrap js-fadeUp-wrap-delay home-action_wrap">
					<img class="ill-core" src="<?php echo get_template_directory_uri(); ?>/img/ill-core02.png" alt="">
					<?php get_template_part('template-parts/home/taxonomy-list-historic'); ?>
				</div>
					<a href="#" class="btn">詳しく見る</a>
			</div>
		</div>
		<!-- position_wide -->

<!-- 
		<div class="position_wide section01 wave00 wave00-action">
			<div class="position_center">
				<div class="title"><h1>Storys</h1><p>「養生訓」物語</p></div>
			</div>
			<div class="position_center home-action_ground-wrap">
				<div class="wrap_grid-32 grid_col_3 position_center action_wrap js-fadeUp-wrap-delay home-action_wrap">
					<img class="ill-core" src="<?php # echo get_template_directory_uri(); ?>/img/ill-core.png" alt="">
					<?php # get_template_part('template-parts/home/cat-list-at-home-story'); ?>
				</div>
					<a href="#" class="btn">詳しく見る</a>
			</div>
		</div> -->
		<!-- position_wide -->


		<!-- <div class="position_wide section01 wave00 wave00-action">
			<div class="position_center">
				<div class="title"><h1>Action</h1><p>活動</p></div>
			</div>
			<div class="position_center home-action_ground-wrap">
				<div class="wrap_grid-32 grid_col_3 position_center action_wrap js-fadeUp-wrap-delay home-action_wrap">

					<img class="ill-core" src="<?php # echo get_template_directory_uri(); ?>/img/ill-core.png" alt="">

					<div class="home-action js-fadeUp-child">
				 	 <img class="pc" src="<?php # echo get_template_directory_uri(); ?>/img/img-non.jpg" alt="">
						<h2>小見出小見出小見出小見出小見出</h2>
						<p>
							本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
						</p>
					</div>
					<div class="home-action js-fadeUp-child">
				 	 <img class="pc" src="<?php # echo get_template_directory_uri(); ?>/img/img-non.jpg" alt="">
						<h2>小見出小見出小見出小見出小見出</h2>
						<p>
							本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
						</p>
					</div>
					<div class="home-action js-fadeUp-child">
				 	 <img class="pc" src="<?php # echo get_template_directory_uri(); ?>/img/img-non.jpg" alt="">
						<h2>小見出小見出小見出小見出小見出</h2>
						<p>
							本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
						</p>
					</div>
					<div class="home-action js-fadeUp-child">
				 	 <img class="pc" src="<?php # echo get_template_directory_uri(); ?>/img/img-non.jpg" alt="">
						<h2>小見出小見出小見出小見出小見出</h2>
						<p>
							本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
						</p>
					</div>
				</div>
					<a href="#" class="btn">詳しく見る</a>
			</div>
		</div> -->
		<!-- position_wide -->





		<div class="position_wide section01 about-network" id="sponsorship">
			<div class="position_center">
				<div class="title"><h1>Sponsorship</h1><p>協賛</p></div>
			</div>
			<div class="position_center home-about_net-list_wrap">
				<div class="wrap_grid-16 grid_col_3 position_center js-fadeUp-wrap">
					<?php get_template_part('template-parts/home/taxonomy-list-sponsorship'); ?>
				</div>
			</div>
		</div><!-- position_wide -->

			<br>
			<br>
			<br>
			<br>
			<br>


		<!-- <div class="wrap_grid grid_col_12 position_center">
			<?php # get_template_part('template-parts/home/slick-home-sub'); ?>
		</div> -->
		<!-- .wrap_grid -->


		<div class="position_wide section-last">
			<div class="wrap_grid grid_col_12 position_center">
				<?php get_template_part('template-parts/archive/for-cat-tag-list'); ?>
			</div><!-- .wrap_grid -->
		</div><!-- position_wide -->


	</main><!-- #main -->

<?php
# get_sidebar();
get_footer();
