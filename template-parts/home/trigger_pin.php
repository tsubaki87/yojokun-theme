<?php
// TOP スクロールイベント作成 ==============================
// trigger_pin ==============================
?>
<section class="top__wrap">

	<section class="top_img__wrap">
		<div class="top_img">
			<span class="top_img_innerLeft">
				<!-- <img src="<?php # echo get_template_directory_uri(); ?>/img/ph-yojokun-ekiken01.jpg" alt=""> -->
				<img src="<?php echo get_template_directory_uri(); ?>/img/ekiken-statue-dev02.jpg" alt="">
				<div class="caption">貝原益軒銅像（福岡市中央区今川２−３−23、曹洞宗「金龍寺」境内）</div>
			</span>
			<span class="top_img_innerRight">
				<img src="<?php echo get_template_directory_uri(); ?>/img/ph-yojokun-ekiken02.jpg" alt="">
				<div class="caption">貝原益軒肖像画（狩野昌運筆）。元禄７年（1694年）、65歳の時。自ら依頼したとされる。</div>
			</span>
		</div>
	</section>

	<section class="top">
		<div class="top_title">
			<span class="top_title_innerLeft">
				貝原益軒は1630年生まれ。
			</span>
			<span class="top_title_innerRight">
				2030年は生誕400年
			</span>
		</div>
	</section>

	<section class="logo">
		<div class="logo_wrap">
			<div class="logo_wrap_inner">
				<!-- <div class="logo_wrap_inner_copy">
					あの「養生訓」をいま、webで再現 
				</div>
				<div class="logo_wrap_inner_title">
					養生訓の里ネットワーク
				</div> -->
				<div class="logo_wrap_inner_logotype">
					<!-- <img src="<?php # echo get_template_directory_uri(); ?>/img/logo-yojo-type.png" alt=""> -->
					<!-- <img src="<?php # echo get_template_directory_uri(); ?>/img/ysn-logo.png" alt=""> -->
					<img src="<?php echo get_template_directory_uri(); ?>/img/ysn-logo-soda02.png" alt="">
				</div>
			</div>
		</div>
	</section>

	<section class="topbtn">
		<div class="topbtn_wrap">
			<span class="topbtn_wrap_innerLeft">
				<?php $page_bronzestatue = get_page_by_path('貝原益軒銅像'); // 固定ページ「スラグ」からリンクパスを取得 ?>
				<a href="<?php echo esc_url(get_permalink($page_bronzestatue -> ID)); ?>" class="link_btn">銅像を見る</a>
			</span>
			<span class="topbtn_wrap_innerRight">
				<?php $page_portrait = get_page_by_path('貝原益軒肖像画'); // 固定ページ「スラグ」からリンクパスを取得 ?>
				<a href="<?php echo esc_url(get_permalink($page_portrait -> ID)); ?>" class="link_btn">肖像画を見る</a>
			</span>
		</div>
	</section>

	<?php
	date_default_timezone_set('Asia/Tokyo');
	// echo date('Y-m-d H:i');
	if (date('Y-m-d H:i') < '2025-10-04 23:59'): // 締切日時
		// 期間までの表示
	?>
	

	<!-- <section class="attraction">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>/?p=2540">
			<div class="attraction_wrap"> -->
				<!-- 初期 -->
				<!-- <div class="title">2025年秋、養生訓の里ネットワーク設立記念シンポジウム開催へ　>></div> -->
				<!-- <div class="title word-bk">参加者受付中！　<wbr>10/4（土）<wbr>里ネットワーク<wbr>設立記念<wbr>シンポジウム<wbr>開催　>></div> -->
				 <!-- 募集期間 -->
				<!-- <div class="title word-bk"><span style="color: yellow;">参加者受付中！　</span><wbr>10/4（土）<wbr>養生訓の里ネットワーク<wbr>設立記念<wbr>シンポジウム<wbr>開催　>></div> -->
			<!-- </div>
		</a>
	</section> -->


	<?php else: // 締め切り後の表示 ?>
	<?php endif; ?>

</section>
<?php
// trigger_pin ============================== end
// TOP スクロールイベント作成 ============================== end
?>