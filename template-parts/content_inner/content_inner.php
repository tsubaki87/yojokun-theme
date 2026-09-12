<?php

	$classes = get_post_class();
	$search__which = array('a', 'b');
	// var_dump($classes);
	// exit;


	// category-greeting ====================
	if (preg_grep('/category-greeting/', $classes)): 
		get_template_part('template-parts/content_inner/content_inner_greeting');
	// category-greeting ==================== end

	// $search_ ====================
	elseif (count(array_intersect($search__which, $classes)) != 0):
		echo 'search__which';
	// $search_ ==================== end

	elseif (preg_grep('/something-cat/', $classes)):
		echo 'something-cat';
	else:
		get_template_part('template-parts/content_inner/content_inner_default');



	endif;



