
<?php
	$page_id = get_page_by_path('お　願　い');  //〇〇スラッグ名が入ります
	$page = get_post( $page_id );
?>

<div id="section-top-info"></div>
<div class="position_wide section02 section-top-info">
	<div class="position_center">
		<!-- <div class="title">
			<h2>お　願　い</h2>
		</div> -->
		<div class="discription">
			<div class="title">
				<h2>
				<?php
					echo $page -> post_title;    //タイトルを取得したい時はこちら
				?>
				</h2>
			</div>
			<?php
				echo $page -> post_content;  //本文を取得
				// echo $page -> ID;     //IDを取得したい時はこちら
				// echo $page -> post_title;    //タイトルを取得したい時はこちら
				// echo $page -> post_excerpt;  //抜粋文を取得したい時はこちら
			?>
		</div>
	</div>
</div><!-- position_wide -->