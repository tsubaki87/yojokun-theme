<?php # yojo_post_thumbnail(); ?>

<a href="<?php echo get_permalink() ?>" class="archive-list-cat-1row">
    <header class="entry-header">
    	<?php
    	// the_title( '<h1 class="entry-title">', '</h1>' );
    	$title = get_the_title();
    	// $title = the_title();
    	// $title = the_title_attribute();
    	?>
    	<div class="entry-title"><h4><?php echo $title; ?></h4></div>
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
    </header><!-- .entry-header -->
</a>

<!-- <div class="entry-content">
	<p>
		<?php
		// $content = get_the_content();
		// echo $content;
		?>
	</p>
</div>  -->
<!-- .entry-content -->
