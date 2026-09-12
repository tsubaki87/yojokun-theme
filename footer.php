<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yojo
 */

?>

	<footer id="colophon" class="site-footer">

		<!-- <div class="footer-wave-sm">
			<img class="pc" src="<?php # echo get_template_directory_uri(); ?>/img/wave-page02.png" alt="">
		</div> -->

		<div class="site-info">
			<nav class="footer-navigation">
				<?php
				wp_nav_menu(
					array(
						// 'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			<div class="footer-info">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="subtitle smf">一般社団法人　曽田豊二記念　</div><h4>養生訓の里ネットワーク</h4></a>
				<p class="smf">〒819-0055 福岡県福岡市西区生の松原３-18-3<br>tel.092-260-1860<br>e-mail contact@yojokun.org</p>
			</div><!-- .footer-inf -->
		</div><!-- .site-info -->

		<div class="footer-rigfts">
			<div class="smf">Copyright ©<?php echo date('Y'); ?> YSNetwork All Rights Reserved.</div>
		</div><!-- footer-rigfts -->

	</footer><!-- #colophon -->
</div><!-- #page -->


<div id="page_top">
	<a href="#">
		<!-- <img src="<?php # echo get_template_directory_uri(); ?>/img/icon-totop.png" alt=""> -->
		<img src="<?php echo get_template_directory_uri(); ?>/img/youken-ill.png" alt="">
		<div class="balloon">
			<div class="msg">いざ上方へ</div>
		</div>
	</a>
</div>

<?php wp_footer(); ?>

</body>
</html>
