<?php
// 役員からのご挨拶（トップ）: 役員（board）の記事をカードにして、右から左へ流し続ける（動きは js/yojo.js）
// 並びは役員一覧と同じ投稿日時の新しい順（代表理事が先頭）
$args = [
	'posts_per_page' => 50,
	'category_name' => 'board',
	'orderby' => 'date',
	'order' => 'DESC',
];
$greeting_posts = get_posts($args);
if (!$greeting_posts) return;
?>
<div class="position_wide home-greeting-carousel">
	<div class="title"><h3>役員からのご挨拶</h3></div>
	<div class="greeting-carousel">
		<ul class="greeting-carousel__track">
			<?php foreach ($greeting_posts as $post): setup_postdata($post);
				$content = get_the_content();
				// 本文の最初の h3（例:「監事　江頭 啓介」）から、肩書きと氏名を取り出す（content_inner_board.php と同じ）
				$board_role = '';
				$board_name = get_the_title();
				if (preg_match('/<h3[^>]*>(.*?)<\/h3>/s', $content, $matches)):
					$parts = preg_split('/　+/u', trim(wp_strip_all_tags($matches[1])), 2); // 肩書きと氏名の間は全角スペース
					if (count($parts) === 2):
						list($board_role, $board_name) = $parts;
					endif;
				endif;
				// 写真: アイキャッチがあればそれ、なければ本文の最初の画像
				$photo = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
				if (!$photo && preg_match('/<img[^>]+src="([^"]+)"/', $content, $img)):
					$photo = $img[1];
				endif;
			?>
			<li class="greeting-card">
				<a href="<?php the_permalink(); ?>">
					<div class="greeting-card__photo">
						<?php if ($photo): ?><img src="<?php echo esc_url($photo); ?>" alt="<?php echo esc_attr($board_name); ?>" decoding="async"><?php endif; ?>
					</div>
					<p class="greeting-card__org">養生訓の里ネットワーク</p>
					<?php if ($board_role): ?><p class="greeting-card__role"><?php echo esc_html($board_role); ?></p><?php endif; ?>
					<p class="greeting-card__name"><?php echo esc_html($board_name); ?></p>
				</a>
			</li>
			<?php endforeach; wp_reset_postdata(); ?>
		</ul>
	</div>
</div><!-- position_wide -->
