<?php
/**
 * Yojo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Yojo
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function yojo_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Yojo, use a find and replace
		* to change 'yojo' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'yojo', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'yojo' ),
			'secondary' => esc_html__( 'Sub Menu', 'yojo' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'yojo_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'yojo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yojo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'yojo_content_width', 640 );
}
add_action( 'after_setup_theme', 'yojo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function yojo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'yojo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'yojo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'yojo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function yojo_scripts() {
	wp_enqueue_style( 'yojo-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'yojo-style', 'rtl', 'replace' );

	wp_enqueue_script( 'yojo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_style( 'yojo-slick-style', get_template_directory_uri() . '/stylesheets/slick.css' );
    // wp_enqueue_style( 'yojo-scss-style', get_template_directory_uri() . '/stylesheets/style.css' ); // npm run watchではここにはコンパイルしない
	wp_enqueue_style( 'yojo-fontawesom-style', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css' );
	wp_enqueue_script( 'yojo-fontawesome', 'https://use.fontawesome.com/releases/v5.15.4/js/all.js' );
	wp_enqueue_style( 'sample00-fontawesom-style', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'css-font-awesome-6-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' );
	wp_enqueue_script( 'yojo-jquery-js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
  wp_enqueue_style( 'yojo-slick-theme-style', get_template_directory_uri() . '/stylesheets/slick-theme.css' );
  wp_enqueue_style( 'yojo-slick-dev-style', get_template_directory_uri() . '/stylesheets/slick-dev.css' );
	wp_enqueue_script( 'yojo-slick', get_template_directory_uri() . '/js/slick.min.js' );
  wp_enqueue_script( 'yojo-slick-dev', get_template_directory_uri() . '/js/slick-dev.js' );
	wp_enqueue_script( 'yojo-inview', get_template_directory_uri() . '/js/jquery.inview.min.js' );
	wp_enqueue_script( 'cdnjs-cloudflare-gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js' );
	wp_enqueue_script( 'cdnjs-cloudflare-ScrollTrigger-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js' );
	wp_enqueue_script( 'yojo-customizer', get_template_directory_uri() . '/js/yojo.js' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'yojo_scripts' );


/**
 * 文字数をトリミング
 */
function text_trim($word, $word_len) {
		$text_limit = $word_len;
		$text_leng = mb_strlen($word, 'UTF-8');
		$text = strip_tags( strip_shortcodes( $word ) );
		if ( $text_leng > $text_limit ) {
			$text =  mb_substr($text, 0, $text_limit) . '…';
		} else {
			$text =  mb_substr($text, 0, $text_limit);
		}
		return $text;
}


/**
 *メインループ ページネーション出力用関数 
 */
function pagination($end_size = 1, $mid_size = 2, $prev_next = true) {
  global $wp_query;
  $page_format = paginate_links(
    array(
      'current' => max(1, get_query_var('paged')),
      'total' => $wp_query->max_num_pages,
      'type'  => 'array',
      'prev_text' => '前へ',//前へのリンク文言
      'next_text' => '次へ',//次へのリンク文言
      'end_size' => $end_size,//初期値：１  両端のﾍﾟｰｼﾞﾘﾝｸの数
      'mid_size' => $mid_size,//初期値：２  現在のﾍﾟｰｼﾞの両端にいくつページリンクを表示するか（現在のページは含まない）
      'prev_next' => $prev_next,//初期値：true  リストの中に「前へ」「次へ」のリンクを含むか
    )
  );
  $code = '';
  if( is_array($page_format) ) {
    $paged = get_query_var('paged') == 0 ? 1 : get_query_var('paged');
    $code .= '<div class="pagination">'.PHP_EOL;
    $code .= '<ul>'.PHP_EOL;
    foreach ( $page_format as $page ) {
      $code .= '<li>'.$page.'</li>'.PHP_EOL;
    }
    $code .= '</ul>'.PHP_EOL;
    $code .= '</div>'.PHP_EOL;
    $code .= '<div class="pagination-total">'.$paged.'/'.$wp_query->max_num_pages.'</div>'.PHP_EOL;
  }
  wp_reset_query();
  return $code;
}



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



/**
 * WordPress でセッション 
 */
// function init_session_start() {
// 	// セッションが開始されていなければここで開始
// 	if( session_status() !== PHP_SESSION_ACTIVE ) {
// 		session_start();
// 		// session_regenerate_id();

// 		// $_COOKIE['too-message'] = 'notwatch';
// 		// print('セッションIDは '.$_COOKIE['PHPSESSID'].' です。');
// 		// print('セッション_COOKIEは '.$_COOKIE['too-message'].' です。');

// 		$_SESSION['too-message'] = 'notwatch';
// 		// echo 'ユーザー名は '. $_SESSION['too-message'].' 。';
// 		// unset($_SESSION['too-message']);
// 		if (!isset($_SESSION['too-message'])){
// 			echo 'ユーザー名は削除されました。';
// 		}else{
// 			echo 'ユーザー名は '. $_SESSION['too-message'].' 。';
// 		}
// 		echo session_id();
// 	}
// }
// add_action( 'template_redirect', 'init_session_start' );


/**
 * 独自のカスタムフィールドを追加 記事 ====================
 */
// 固定カスタムフィールドボックス
function add_subfield_fields() {
	//add_meta_box(表示される入力ボックスのHTMLのID, ラベル, 表示する内容を作成する関数名, 投稿タイプ, 表示方法)
	//第4引数のpostをpageに変更すれば固定ページにオリジナルカスタムフィールドが表示されます(custom_post_typeのslugを指定することも可能)。
	//第5引数はnormalの他にsideとadvancedがあります。
	add_meta_box( 'subfield_setting', 'subfieldの情報', 'insert_subfield_fields', 'post', 'normal');
}
add_action('admin_menu', 'add_subfield_fields');
// カスタムフィールドの入力エリア
function insert_subfield_fields() {
	global $post;
	//下記に管理画面に表示される入力エリアを作ります。「get_post_meta()」は現在入力されている値を表示するための記述です。
	echo '開催期間： <input type="text" name="period" value="'.get_post_meta($post->ID, 'period', true).'" size="50" />　<br>';
	echo 'YSN役職： <input type="text" name="position" value="'.get_post_meta($post->ID, 'position', true).'" size="50" /><br>';
	echo '肩書： <input type="text" name="jobdescription" value="'.get_post_meta($post->ID, 'jobdescription', true).'" size="50" /><br>';
}
// カスタムフィールドの値を保存
function save_subfield_fields( $post_id ) {
	if(!empty($_POST['period'])){
		update_post_meta($post_id, 'period', $_POST['period'] );
	}else{
		delete_post_meta($post_id, 'period');
	}

  if(!empty($_POST['position'])){
		update_post_meta($post_id, 'position', $_POST['position'] );
	}else{
		delete_post_meta($post_id, 'position');
	}

	if(!empty($_POST['jobdescription'])){
		update_post_meta($post_id, 'jobdescription', $_POST['jobdescription'] );
	}else{
		delete_post_meta($post_id, 'jobdescription');
	}
}
add_action('save_post', 'save_subfield_fields');







/**
 * カスタム投稿タイプ 関連団体　network を追加====================
 */
function create_post_type02() {
  register_post_type(
    'network',
    array(
      'label' => '関連団体',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 6,
      'supports' => array(
        'title',
		'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );
  register_taxonomy(
    'network-cat',
    'network',
    array(
      'label' => '関連団体/カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );
  register_taxonomy(
    'network-tag',
    'network',
    array(
      'label' => '関連団体/タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );
}
add_action( 'init', 'create_post_type02' );

/**
 * カスタム投稿タイプ 関連団体 管理画面に　カラムとフィルターを追加====================
 */
function add_custom_column02( $column ){
    global $post_type;
    if( $post_type === 'network' ){
        $column['network-cat'] = '関連団体';
    }
    return $column;
}
add_filter( 'manage_posts_columns', 'add_custom_column02' );

function add_custom_column_id02( $column_name, $id ){
    if( $column_name === 'network-cat' ) {
        echo get_the_term_list( $id, 'network-cat', '', ', ' );
    }
}
add_action( 'manage_posts_custom_column', 'add_custom_column_id02', 10, 2 );
/* フィルター追加 */
function add_posts_taxonomy_filter02() {
    global $post_type;
    $taxonomy = '';
    if( $post_type === 'network' ){
        $taxonomy = 'network-cat';
    }
    if( !empty( $taxonomy ) ){
        print "<select name=\"{$taxonomy}\">\n";
        print "<option value=\"\">カテゴリ指定なし</option>\n";
        $terms = get_terms( $taxonomy );
        foreach( $terms as $term ){
            print "<option value=\"{$term->slug}\">{$term->name}</option>\n";
        }
        print "</select>\n";
    }
}
add_action( 'restrict_manage_posts', 'add_posts_taxonomy_filter02' );

/**
 * 独自のカスタムフィールドを追加 関連団体 ====================
 */
// 固定カスタムフィールドボックス
function add_network_fields() {
	add_meta_box( 'network_setting', 'networkの情報', 'insert_network_fields', 'network', 'normal'); // $post_type === 'network'
}
add_action('admin_menu', 'add_network_fields');
// カスタムフィールドの入力エリア
function insert_network_fields() {
	global $post;
	//下記に管理画面に表示される入力エリアを作ります。「get_post_meta()」は現在入力されている値を表示するための記述です。
	echo '所属団体： <input type="text" name="network_name" value="'.get_post_meta($post->ID, 'network_name', true).'" size="50" /><br>';
	echo 'リンクURL： <input type="text" name="network_url" value="'.get_post_meta($post->ID, 'network_url', true).'" size="50" /><br>';
}
// カスタムフィールドの値を保存
function save_network_fields( $post_id ) {
	if(!empty($_POST['network_name'])){ //題名が入力されている場合
		update_post_meta($post_id, 'network_name', $_POST['network_name'] ); //値を保存
	}else{ //題名未入力の場合
		delete_post_meta($post_id, 'network_name'); //値を削除
	}
	
	if(!empty($_POST['network_url'])){
		update_post_meta($post_id, 'network_url', $_POST['network_url'] );
	}else{
		delete_post_meta($post_id, 'network_url');
	}
}
add_action('save_post', 'save_network_fields');
/**
 * カスタム投稿タイプ 関連団体　network を追加==================== end
 */




/**
 * カスタム投稿タイプ 地図　map を追加====================
 */
function create_post_type_map() {
  register_post_type(
    'map',
    array(
      'label' => '地図',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 6,
      'supports' => array(
        'title',
		'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );
  register_taxonomy(
    'map-cat',
    'map',
    array(
      'label' => '地図/カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );
  register_taxonomy(
    'map-tag',
    'map',
    array(
      'label' => '地図/タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );
}
add_action( 'init', 'create_post_type_map' );

/**
 * カスタム投稿タイプ 地図 管理画面に　カラムとフィルターを追加====================
 */
function add_custom_column_map( $column ){
    global $post_type;
    if( $post_type === 'map' ){
        $column['map-cat'] = '地図';
    }
    return $column;
}
add_filter( 'manage_posts_columns', 'add_custom_column_map' );

function add_custom_column_id_map( $column_name, $id ){
    if( $column_name === 'map-cat' ) {
        echo get_the_term_list( $id, 'map-cat', '', ', ' );
    }
}
add_action( 'manage_posts_custom_column', 'add_custom_column_id_map', 10, 2 );
/* フィルター追加 */
function add_posts_taxonomy_filter_map() {
    global $post_type;
    $taxonomy = '';
    if( $post_type === 'map' ){
        $taxonomy = 'map-cat';
    }
    if( !empty( $taxonomy ) ){
        print "<select name=\"{$taxonomy}\">\n";
        print "<option value=\"\">カテゴリ指定なし</option>\n";
        $terms = get_terms( $taxonomy );
        foreach( $terms as $term ){
            print "<option value=\"{$term->slug}\">{$term->name}</option>\n";
        }
        print "</select>\n";
    }
}
add_action( 'restrict_manage_posts', 'add_posts_taxonomy_filter_map' );

/**
 * 独自のカスタムフィールドを追加 地図 ====================
 */
// 固定カスタムフィールドボックス
function add_map_fields() {
	add_meta_box( 'map_setting', 'mapの情報', 'insert_map_fields', 'map', 'normal'); // $post_type === 'map'
}
add_action('admin_menu', 'add_map_fields');
// カスタムフィールドの入力エリア
function insert_map_fields() {
	global $post;
	//下記に管理画面に表示される入力エリアを作ります。「get_post_meta()」は現在入力されている値を表示するための記述です。
	// echo '住所： <input type="text" name="map_address" value="'.get_post_meta($post->ID, 'map_address', true).'" size="50" /><br>';
	echo 'googlei-Map-リンクURL： <input type="text" name="map_url" value="'.get_post_meta($post->ID, 'map_url', true).'" size="50" /><br>';
}
// カスタムフィールドの値を保存
function save_map_fields( $post_id ) {
	// if(!empty($_POST['map_address'])){ //題名が入力されている場合
	// 	update_post_meta($post_id, 'map_address', $_POST['map_address'] ); //値を保存
	// }else{ //題名未入力の場合
	// 	delete_post_meta($post_id, 'map_address'); //値を削除
	// }
	
	if(!empty($_POST['map_url'])){
		update_post_meta($post_id, 'map_url', $_POST['map_url'] );
	}else{
		delete_post_meta($post_id, 'map_url');
	}
}
add_action('save_post', 'save_map_fields');
/**
 * カスタム投稿タイプ 地図　map を追加==================== end
 */






/** カテゴリページのタイトルから "カテゴリ:"の接頭語を削除する ==================== */
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>' ;
    }
    return $title;
});
/** カテゴリページのタイトルから "カテゴリ:"の接頭語を削除する ==================== end */


// wp_safe_redirect()：同じサイト内でのリダイレクト ====================
add_action('get_header', 'redirectFunc');
function redirectFunc(){
  // ページのURLを取得
  $url = $_SERVER['REQUEST_URI'];
  // URLに「p=163」「/?m=20」が入っていたら「https://hz.personanews.net/?p=41」にリダイレクトする
	// 301リダイレクト：ページを完全にお引越しして、URLを変更する場合に利用。
	// 302リダイレクト：諸事情で、ページのURLを一時的に変更する場合に利用。
  if(strstr($url, '/?m=20')){
    wp_safe_redirect('https://horizon.jma2-jp.org/', 302);
    exit;
  }
}
// wp_safe_redirect()：同じサイト内でのリダイレクト ==================== end


// アイキャッチ画像を有効化する ==================== 
add_theme_support('post-thumbnails');
// アイキャッチ画像を有効化する ==================== end