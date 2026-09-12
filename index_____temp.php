<?php
get_header();
?>

 	<!-- Top Massage ==================== -->
	<div class="top-bg-back"></div>
	<div class="top-bg">
		<span class="top-title">
			<span>あの「養生訓」を</span>
			<span>いま、WEBで再現</span>
		</span>
		<div class="skip">Skip</div>
	</div>
 	<!-- Top Massage ==================== end -->

	<main id="primary" class="site-main">

		<?php get_template_part('template-parts/home/slick-home-top'); ?>
		

		<div class="position_wide section01 wave00-news">
			<div class="position_center">
				<div class="title"><h1>News</h1><p>お知らせ</p></div>
			</div>
			<div class="contents js-fadeUp-wrap">
				<div class="news-lists">
					<?php get_template_part('template-parts/home/cat-list-1row-at-home'); ?>
				</div>
			</div>
		</div><!-- position_wide -->

		<div class="position_wide section01 wave00-event">
			<div class="position_center">
				<div class="title">
					<h1>Event</h1>
					<p>イベント</p>
				</div>
			</div>
			<div class="wrap_grid grid_col_12 position_center">
				<div class="wrap_grid grid_col_3 position_center home-event js-fadeUp-wrap">
					<?php get_template_part('template-parts/home/cat-list-at-home'); ?>
				</div>
			</div><!-- .wrap_grid -->
		</div><!-- position_wide -->


		<div class="position_wide section01 wave00 about-yojo">
			<div class="wrap_grid grid_col_12 position_center home-about_wrap01">
				<div class="wrap_grid grid_col_12 position_center_transform-r js-fadeR">
					<div class="wrap_grid grid_col_6 home-about_wrap js-fadeUp-wrap-delay">
						<div class="home-about js-fadeUp-child">
							<?php
								$page_id = get_page_by_path('貝原益軒と養生訓について（概要）');  //〇〇スラッグ名が入ります
								$page = get_post( $page_id );
								echo $page -> post_content;  //本文を取得
								// echo $page -> ID;     //IDを取得したい時はこちら
								// echo $page -> post_title;    //タイトルを取得したい時はこちら
								// echo $page -> post_excerpt;  //抜粋文を取得したい時はこちら
							?>
							<a href="#" class="btn">詳しく見る</a>
						</div><!-- home-about -->
						<div class="home-about js-fadeUp-child">
				 			<img class="pc" src="<?php echo get_the_post_thumbnail_url($page_id, 'full'); ?>" alt="">
						</div><!-- home-about -->
					</div><!-- home-about_wrap -->
				</div>
			</div><!-- .wrap_grid -->
		</div><!-- position_wide -->

		<div class="position_wide section01 wave00-horizontal about-network">
			<div class="wrap_grid grid_col_12 position_center home-about_wrap02">
				<div class="wrap_grid grid_col_12 position_center_transform-l js-fadeL">
					<div class="wrap_grid grid_col_6 home-about_wrap js-fadeUp-wrap-delay">
						<div class="home-about js-fadeUp-child">
							<?php
								$page_id_02 = get_page_by_path('養生訓の里ネットワークとは（概要）');  //〇〇スラッグ名が入ります
								$page_02 = get_post( $page_id_02 );
							?>
				 			<img class="pc" src="<?php echo get_the_post_thumbnail_url($page_id_02, 'full'); ?>" alt="">
						</div><!-- home-about -->
						<div class="home-about js-fadeUp-child">
							<?php
							    echo $page_02 -> post_content;  //本文を取得
								// echo $page_02 -> ID;     //IDを取得したい時はこちら
								// echo $page_02 -> post_title;    //タイトルを取得したい時はこちら
								// echo $page_02 -> post_excerpt;  //抜粋文を取得したい時はこちら
							?>
							<a href="#" class="btn">詳しく見る</a>
						</div><!-- home-about -->
					</div><!-- home-about_wrap -->
				</div>
			</div><!-- .wrap_grid -->

			<div class="wrap_grid grid_col_12 position_center">
				<div class="title"><h1>Network</h1><p>関連団体</p></div>
			</div><!-- .wrap_grid -->
			<div class="wrap_grid grid_col_12 position_center home-about_net-list_wrap">
				<div class="wrap_grid-16 grid_col_2 position_center js-fadeUp-wrap">
					<?php get_template_part('template-parts/home/taxonomy-list-network'); ?>
				</div>
			</div><!-- .wrap_grid -->
		</div><!-- position_wide -->








		<div class="position_wide section02 img_bg_shine">
			<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/wave04-down.png" alt="">
		</div><!-- position_wide -->
		<div class="position_wide section02 img_bg_shine">
		<div class="position_center">
			<div class="title">
				<h1>Purpose</h1><p>目的</p>
			</div>
			<div class="contents">
				<h2>小見出小見出小見出小見出小見出</h2>
				<p>
					本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文 本文本文本文本文本文本文本文本文本文本文本文 本文本文本文本文本文本文本文本文本文本文本文 本文本文本文本文本文本文本文本文本文本文本文 本文本文本文本文本文本文本文本文本文本文本文 本文本文本文本文本文本文本文本文本文本文本文 本文本文本文本文本文本文本文本文本文本文本文
				</p>
				<a href="#" class="btn">詳しく見る</a>
			</div>
		</div><!-- .wrap_grid -->
		</div><!-- position_wide -->
		<div class="position_wide section02 img_bg_shine">
			<img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/wave-parpose-down.png" alt="">
		</div><!-- position_wide -->

		<div class="position_wide section01 wave00 wave00-action">
			<div class="wrap_grid grid_col_12 position_center">
				<div class="title"><h1>Action</h1><p>活動</p></div>
			</div><!-- .wrap_grid -->

			<div class="wrap_grid grid_col_12 position_center">
				<div class="wrap_grid grid_col_3 position_center action_wrap js-fadeR js-fadeUp-wrap-delay home-action_wrap">

					<img class="ill-core" src="<?php echo get_template_directory_uri(); ?>/img/ill-core.png" alt="">

					<div class="home-action js-fadeUp-child">
				 	 <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/img-non.jpg" alt="">
						<h2>小見出小見出小見出小見出小見出</h2>
						<p>
							本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
						</p>
					</div><!-- home-action -->
					<div class="home-action js-fadeUp-child">
				 	 <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/img-non.jpg" alt="">
						<h2>小見出小見出小見出小見出小見出</h2>
						<p>
							本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
						</p>
					</div><!-- home-action -->
					<div class="home-action js-fadeUp-child">
				 	 <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/img-non.jpg" alt="">
						<h2>小見出小見出小見出小見出小見出</h2>
						<p>
							本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
						</p>
					</div><!-- home-action -->
					<div class="home-action js-fadeUp-child">
				 	 <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/img-non.jpg" alt="">
						<h2>小見出小見出小見出小見出小見出</h2>
						<p>
							本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文本文
						</p>
					</div><!-- home-action -->
				</div>
					<a href="#" class="btn">詳しく見る</a>
			</div><!-- .wrap_grid -->
		</div><!-- position_wide -->


		<div class="position_wide section01 about-network">
			<div class="wrap_grid grid_col_12 position_center">
				<div class="title"><h1>Sponsorship</h1><p>協賛</p></div>
			</div><!-- .wrap_grid -->
			<div class="wrap_grid grid_col_12 position_center home-about_net-list_wrap">
				<div class="wrap_grid-16 grid_col_3 position_center js-fadeUp-wrap">
					<?php get_template_part('template-parts/home/taxonomy-list-sponsorship'); ?>
				</div>
			</div><!-- .wrap_grid -->
		</div><!-- position_wide -->



		<hr>

		<div class="wrap_grid position_center">
			<div class="title"><h2>home/taxonomy-list</h2></div>
		</div><!-- .wrap_grid -->
		<div class="wrap_grid position_center">
			<?php get_template_part('template-parts/home/taxonomy-list'); ?>
		</div><!-- .wrap_grid -->
		<br>

		<div class="wrap_grid position_center">
			<div class="title"><h2>home/tag-list</h2></div>
		</div><!-- .wrap_grid -->
		<div class="wrap_grid grid_col_4 position_center">
			<?php # get_template_part('template-parts/home/tag-list'); ?>
		</div><!-- .wrap_grid -->
		<br>

		<div class="wrap_grid grid_col_12 position_center">
			<?php get_template_part('template-parts/archive/for-cat-tag-list'); ?>
		</div><!-- .wrap_grid -->
		<br>

		<div class="wrap_grid position_center">
    	<div class="title"><h2>home/cat-list-1row</h2></div>
		</div><!-- .wrap_grid -->
		<div class="wrap_grid grid_col_3 position_center">
			<?php # get_template_part('template-parts/home/cat-list-1row'); ?>
		</div><!-- .wrap_grid -->
		<br>

		<div class="wrap_grid position_center">
    	<div class="title"><h2>home/cat-list</h2></div>
		</div><!-- .wrap_grid -->
		<div class="wrap_grid grid_col_3 position_center">
			<?php # get_template_part('template-parts/home/cat-list'); ?>
		</div><!-- .wrap_grid -->
		<br>

		<div class="wrap_grid position_center">
    	<div class="title"><h2>home/all-list</h2></div>
		</div><!-- .wrap_grid -->
		<div class="wrap_grid grid_col_4 position_center">
			<?php # get_template_part('template-parts/home/all-list'); ?>
		</div><!-- .wrap_grid -->

				

		<div class="wrap_grid grid_col_12 position_center">
			<?php # get_template_part('template-parts/home/slick-home-sub'); ?>
		</div><!-- .wrap_grid -->

		<!-- <div class="wrap_grid grid_col_6 position_center">
			<div class="container">
			  <div class="js-fadeUp">
			    <img class="pc" src="<?php # echo get_template_directory_uri(); ?>/img/mv_12.png" alt="">
			  </div>
			  <div class="js-fadeUp">
			    <img class="pc" src="<?php # echo get_template_directory_uri(); ?>/img/mv_13.png" alt="">
			  </div>
			  <div class="js-fadeUp">
			    <img class="pc" src="<?php # echo get_template_directory_uri(); ?>/img/mv_11.png" alt="">
			  </div>
			</div>
		</div> -->
		<!-- .wrap_grid -->




		<div class="position_wide section-last">
			最後のセクション<br>
			最後のセクション<br>
			最後のセクション<br>
			最後のセクション<br>
			最後のセクション<br>
			最後のセクション<br>
			最後のセクション<br>
			最後のセクション<br>
		</div><!-- position_wide -->


	</main><!-- #main -->

<?php
# get_sidebar();
get_footer();
