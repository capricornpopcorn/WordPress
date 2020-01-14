<?php

if ( ! function_exists( 'coblog_posted_meta' ) ) :
	function coblog_posted_meta() {
        $coblog_author = get_theme_mod( 'enable_author', 1 );	
        $coblog_date = get_theme_mod( 'enable_date', 1 );

        $coblog_single_author = get_theme_mod( 'enable_single_author', 1 );	
        $coblog_single_date = get_theme_mod( 'enable_single_date', 1 );	
        $coblog_single_comment_count = get_theme_mod( 'enable_single_comment_count', 1 );	
        $coblog_single_view = get_theme_mod( 'enable_single_view', 1 );	
        
        $coblog_time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
            $coblog_time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }
        $coblog_time_string = sprintf( $coblog_time_string,
            esc_attr( get_the_date( DATE_W3C ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( DATE_W3C ) ),
            esc_html( get_the_modified_date() )
        );
    
        if( (!is_singular() && $coblog_author==1) || (is_singular() && $coblog_single_author == 1 ) ) {
            echo '<span class="coblog-meta-img"><a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'"><img src="'.get_avatar_url( get_the_author_meta('email') ).'" alt="'.esc_html__( 'image', 'coblog' ).'"></a></span>';
            echo '<span class="coblog-meta-author">'.esc_html__( "By", "coblog" ).'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>';
        }
        if ( is_singular() ) :
            if( ( $coblog_single_date == 1) ) {
                echo '<span class="coblog-meta-date">' . $coblog_time_string . '</span>';
            }
            if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
            if( $coblog_single_comment_count == 1 ) { ?>
                <span class="coblog-meta-comment">
                    <i class="fas fa-comment-dots"></i><?php comments_popup_link( '<span class="leave-reply">' . esc_html__( '0', 'coblog' ) . '</span>', esc_html__( 'Post a comment', 'coblog' ), esc_html__( '%', 'coblog' ) ); ?>
                </span>
            <?php }
            endif;
            else :
            if( $coblog_date == 1 ) {
                echo '<span class="coblog-meta-date"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $coblog_time_string . '</a></span>';
            }
        endif;
    }
endif;

if ( ! function_exists( 'coblog_entry_footer' ) ) :
	function coblog_entry_footer() {
		if ( 'post' === get_post_type() ) {
			$tags_list = get_the_tag_list( '' );
			if ( $tags_list ) {
				printf( '<div class="coblog-tags-links">'. $tags_list. '</div>' ); // WPCS: XSS OK.
			}
		}
	}
endif;

if ( ! function_exists( 'coblog_post_thumbnail' ) ) :
	function coblog_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}
		if ( is_singular() ) :
			?>
			<div class="coblog-post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->
        <?php else : ?>
        <div class="coblog-post-thumbnail">
            <a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                the_post_thumbnail( 'coblog-1140-600', array(
                    'alt' => the_title_attribute( array(
                        'echo' => false,
                    ) ),
                ) );
                ?>
            </a>
        </div>
		<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'coblog_post_entry_content' ) ) :
	function coblog_post_entry_content() {
        if ( get_theme_mod( 'enable_excerpt', 1 ) ) { 
            if ( get_theme_mod( 'character_limit', 280 ) ) {
                $coblog_limit = get_theme_mod( 'character_limit', 280 );
                echo wp_kses_post(coblog_excerpt_max_charlength($coblog_limit));
            } else {
                the_content();
            }
            if ( get_theme_mod( 'enable_readmore', 1 ) ) { 
                if ( get_theme_mod( 'readmore_text', 'Read More' ) ) {
                    $coblog_continue = esc_html( get_theme_mod( 'readmore_text', 'Read More' ) );
                    echo '<p class="coblog-btn-post"><a class="coblog-btn-common coblog-btn-primary" href="'.esc_url(get_permalink()).'">'. esc_html($coblog_continue) .'</a></p>';
                } 
            } 
        }
	}
endif;
