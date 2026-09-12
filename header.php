<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yojo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<meta name="description" content="福岡は「養生訓」を著した貝原益軒が生まれ、健康長寿を実践し、84歳まで生涯現役で生き抜いた古里。いわば「養生訓の里」。
	2030年に、生誕400年を迎えます。その史跡、施設、人々をつなぐのが養生訓の里ネットワークです。">
	<meta name="keywords" content="貝原益軒,養生訓,養生訓の里,曽田豊二,曽田豊二文庫,養生相談室,健康長寿,生活習慣病,福岡市,福岡藩,儒学者,本草学者,東軒,ゆかりの地">

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-HHGSPMTVXL"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'G-HHGSPMTVXL');
	</script>
	<!-- Google tag (gtag.js) end -->

	<?php wp_head(); ?>

	<script>
		// // google-map My Yojo Project
	  // (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
	  //   // key: "AIzaSyBENrznE4dnm7n_uFztjAr4LDGMhuJ12h0",
	  //   key: "AIzaSyCPKiQTLmNow01e8Zwqt7T_5NtnCjiCAc0",
	  //   v: "weekly",
	  //   // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
	  //   // Add other bootstrap parameters as needed, using camel case.
	  // });
	</script>

	<!-- Google Maps Platform for yojokun.org -->
	<meta name="google-site-verification" content="RTLKuSsNL8Ik_s5CDdX2VaspMNNddPdJAA71zueJPdI" />


</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'yojo' ); ?></a>

	<?php get_template_part('template-parts/header/header'); ?>
	<?php # get_template_part('template-parts/header/fix-navigation'); ?>
	<?php get_template_part('template-parts/utility/searchform-fixed'); ?>
