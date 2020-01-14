<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <?php
            $single_layout = get_theme_mod( 'single_layout', 'none' );	
            if( $single_layout == 'full' ) {
                $coblog_single_layout = 'coblog-single-full';
            } elseif ( $single_layout == 'left' ) {
                $coblog_single_layout = 'coblog-single-left-sidebar';
            } elseif ( $single_layout == 'right' ) {
                $coblog_single_layout = 'coblog-single-right-sidebar';
            } else {
                $coblog_single_layout = 'coblog-single-full';
            }
            ?>
            <div class="coblog-post-single-wrap <?php echo $coblog_single_layout;?>">
                <?php if ( $single_layout == 'left' ) { get_sidebar();}?>     
                <div class="coblog-post-single">
                    <?php while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content/content', 'single' );
                        $coblog_tag = get_theme_mod( 'enable_single_tag', 1 );
                        $coblog_nav = get_theme_mod( 'enable_single_nav', 1 );
                        $coblog_comment = get_theme_mod( 'enable_single_comment', 1 );
                        if($coblog_tag == 1){
                            coblog_entry_footer();
                        }
                        if($coblog_nav == 1){
                            the_post_navigation(
                                array(
                                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'coblog' ) . '</span> ' .
                                        '<span class="screen-reader-text">' . __( 'Next post:', 'coblog' ) . '</span> <br/>' .
                                        '<span class="post-title">%title</span>',
                                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'coblog' ) . '</span> ' .
                                        '<span class="screen-reader-text">' . __( 'Previous post:', 'coblog' ) . '</span> <br/>' .
                                        '<span class="post-title">%title</span>',
                                )
                            );
                        }
                        if ( comments_open() || get_comments_number() ) :
                            if($coblog_comment == 1){
                                comments_template();
                            }
                        endif;
                    endwhile; // End of the loop.
                    ?>
                </div><!--/.coblog-post-single -->
                <?php if ( $single_layout == 'right' ) { get_sidebar();}?> 
            </div><!--/.coblog-post-single-wrap -->
        </div><!--/.container -->
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
