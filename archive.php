<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Yojo
 */

get_header();
?>

<?php
	$classes = get_body_class();
	// $search = array('category-art', 'category-global', 'category-life', 'category-social');
	// $search_yojo = array('category-yojo', 'category-ekiken','category-yojokun','category-historic-site','category-collection-library');
	$search_yojo = array('category-yojo', 'category-ekiken','category-yojokun','category-historic-site');
	$search_kaihara_family = array('category-kaihara-family', 'category-people-of-kaihara');
	$search_healthy = array('category-healthy', 'category-all-generations','category-supplement');
	// $search_spread = array('category-spread', 'category-health-event','category-post-section','category-book-introduction','category-related-organizations','category-video','category-publication');
	$search_spread = array('category-spread', 'category-health-event','category-book-introduction','category-related-organizations','category-video','category-publication');
	$search_museum = array('category-museum', 'category-furusato-museum','category-collection-library');
	$search_secretariat = array('category-secretariat', 'category-ysn-council','category-ysn-network','category-council-secretariat', 'category-post-section', 'category-application-membership', 'category-inquiry', 'category-from-secretariat');

	//  ====================
	if (preg_grep('/tax-map-cat/', $classes)): 
		get_template_part('template-parts/archive/archive-main-map');
	//  ==================== end

	elseif (count(array_intersect($search_yojo, $classes)) != 0):
		get_template_part('template-parts/archive/archive-main-yojo');
	elseif (count(array_intersect($search_kaihara_family, $classes)) != 0):
		get_template_part('template-parts/archive/archive-main-kaihara_family');
	elseif (count(array_intersect($search_healthy, $classes)) != 0):
		get_template_part('template-parts/archive/archive-main-healthy');
	elseif (count(array_intersect($search_spread, $classes)) != 0):
		get_template_part('template-parts/archive/archive-main-spread');
	elseif (count(array_intersect($search_museum, $classes)) != 0):
		get_template_part('template-parts/archive/archive-main-museum');
	elseif (count(array_intersect($search_secretariat, $classes)) != 0):
		get_template_part('template-parts/archive/archive-main-secretariat');


	// // $search_academic = array('category-literature', 'category-introduction');
	// // 地図ページ ====================
	// if (preg_grep('/tax-map-cat/', $classes)): 
	// 	get_template_part('template-parts/archive/archive-main-map');
	// // 地図ページ ==================== end
	// 挨拶 ====================
	elseif (preg_grep('/category-greeting/', $classes)):
		get_template_part('template-parts/archive/archive-main-greeting');
	// 挨拶 ==================== end
	// // 学術 ====================
	// // elseif (preg_grep('/category-greeting/', $classes)): 
	// elseif (count(array_intersect($search_academic, $classes)) != 0):
	// 	get_template_part('template-parts/archive/archive-main-academic');
	// // 学術 ==================== end

	elseif (preg_grep('/something-cat/', $classes)):
		echo 'something-cat';
	else:
		// echo 'general-cat';
		get_template_part('template-parts/archive/archive-main-default');
	endif;

# get_sidebar();
get_footer();
