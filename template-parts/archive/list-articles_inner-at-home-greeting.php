<?php yojo_post_thumbnail(); ?>

<a href="<?php echo get_permalink() ?>" class="archive-list-cat">
    <header class="entry-header">
		<?php
		// the_title( '<h1 class="entry-title">', '</h1>' );
		$title = get_the_title();
		// $title = the_title();
		// $title = the_title_attribute();
		?>
		<div class="entry-title"><h4><?php echo $title; ?></h4></div>
	</header><!-- .entry-header -->

	</header>
	<div class="entry-description">
    <div class="position">
		  <?php
		  	# カスタムフィールドの出力 記事
		  	if (get_post_meta($post->ID, 'position', true)):
		  		echo get_post_meta($post->ID, 'position', true);
		  	endif;
		  ?>
    </div>
    <div class="jobdescription">
		  <?php
		  	# カスタムフィールドの出力 記事
		  	if (get_post_meta($post->ID, 'jobdescription', true)):
		  		echo get_post_meta($post->ID, 'jobdescription', true);
		  	endif;
        # コンテンツ出力
		    // $content = get_the_content();
		    // echo $content;
		  ?>
		<div class="link-msg">ご挨拶は ▶こちら</div>
    </div>
	</div> <!-- .entry-description -->
	<?php

	if ( 'post' === get_post_type() ) :
		?>
		<div class="entry-meta">
			<?php
			yojo_posted_on();
			// yojo_posted_by();
			?>
		</div><!-- .entry-meta -->
	<?php endif; ?>

</a>
