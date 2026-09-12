<div class="position_wide section01 wave00 wave00-action" id="visit">
	<div class="position_center">
		<div class="title"><h1>Visit</h1><p>ゆかりの地</p></div>
	</div>
	<div class="position_center home-action_ground-wrap">
		<div class="wrap_grid-32 grid_col_3 position_center action_wrap js-fadeUp-wrap-delay home-action_wrap">
			<img class="ill-core big" src="<?php echo get_template_directory_uri(); ?>/img/ill-core05.png" alt="">
			<img class="ill-core small" src="<?php echo get_template_directory_uri(); ?>/img/ill-core05-2.png" alt="">
			<?php # get_template_part('template-parts/home/taxonomy-list-historic'); ?>
			<?php get_template_part('template-parts/home/cat-list-at-home-visit'); ?>
		</div>
	</div>
</div>
<?php
$cat_column = get_term_by( 'slug', 'historic-site' , 'category' );
$cat_column_link = get_term_link( $cat_column , 'category' );
?>
<a href="<?php echo esc_url( $cat_column_link ); ?>" class="btn visit">全て見る</a>
<!-- position_wide -->