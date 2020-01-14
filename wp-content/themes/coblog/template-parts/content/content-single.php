<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>    
    <header class="coblog-entry-header coblog-entry-header-single">
        <div class="coblog-post-grid-category"><?php echo get_the_category_list( '', get_the_ID() );?></div>
		<?php the_title( '<h1 class="coblog-entry-title">', '</h1>' );?>
        <div class="coblog-entry-meta">
            <?php coblog_posted_meta();?>
        </div><!-- .coblog-entry-meta -->
	</header><!-- .coblog-entry-header -->
    <?php coblog_post_thumbnail(); ?>    
	<div class="entry-content">
        <?php
        the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'coblog' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
</article>
