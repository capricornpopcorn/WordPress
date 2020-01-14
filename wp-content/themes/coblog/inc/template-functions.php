<?php

// Customizer CSS
if(!function_exists('coblog_css_generator')){
    function coblog_css_generator(){
        $output = '';

        // Coblog "Header"
        $output .= 'img.coblog-logo{ width: '.esc_attr( get_theme_mod( 'logo_width', '170' ) ) .'px; }';
        $height = get_theme_mod( 'logo_height', '' );
        if( $height ){
            $output .= 'img.coblog-logo{ height: '.esc_attr( $height ) .'px; }';
        }

        // Coblog "Theme Color"
        $output .= 'body{ color: '.esc_attr( get_theme_mod( 'tc_body_color', '#596172' ) ) .'; }';
        $output .= 'body{ background: '.esc_attr( get_theme_mod( 'tc_body_bg', '#ffffff' ) ) .'; }';
        $output .= 'ul.main-menu > li > a{ color: '.esc_attr( get_theme_mod( 'tc_menu_color', '#000' ) ) .'; }';
        $output .= 'ul.main-menu > li.current-menu-item > a, 
                    ul.main-menu > li > a:hover,
                    ul.main-menu > li.menu-item-has-children.current-menu-item:after, 
                    ul.main-menu > li.menu-item-has-children:hover:after{ color: '.esc_attr( get_theme_mod( 'tc_menu_hover_color', '#FD4145' ) ) .'; }
                    ul.main-menu > li > a:after{ background:'.esc_attr( get_theme_mod( 'tc_menu_hover_color', '#FD4145' ) ) .'; }';
        $output .= 'ul.sub-menu li a{ color: '.esc_attr( get_theme_mod( 'tc_submenu_color', '#000' ) ) .'; }';
        $output .= 'ul.sub-menu li a:hover{ color: '.esc_attr( get_theme_mod( 'tc_submenu_hover_color', '#FD4145' ) ) .'; }';
        $output .= 'a{ color: '.esc_attr( get_theme_mod( 'tc_primary_color', '#FD4145' ) ) .'; }';
        $output .= 'a:hover{ color: '.esc_attr( get_theme_mod( 'tc_secendary_color', '#E62B2F' ) ) .'; }';
        $output .= '.coblog-btn-primary, button, input[type="button"], input[type="reset"], input[type="submit"]{ color: '.esc_attr( get_theme_mod( 'tc_btn_color', '#ffffff' ) ) .'; }';
        $output .= '.coblog-btn-primary, button, input[type="button"], input[type="reset"], input[type="submit"]{ background: '.esc_attr( get_theme_mod( 'tc_btn_bgcolor', '#FD4145' ) ) .'; }';
        $output .= '.coblog-btn-primary:hover,button, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover{ color: '.esc_attr( get_theme_mod( 'tc_btn_hover_color', '#fff' ) ) .'; }';
        $output .= '.coblog-btn-primary:hover, button, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover{ background: '.esc_attr( get_theme_mod( 'tc_btn_bg_hover_color', '#000000' ) ) .'; }';

        // Coblog "Footer Top Options"
        $output .= '.coblog-top-footer, .coblog-top-footer a{ color: '.esc_attr( get_theme_mod( 'ft_color', '#000' ) ) .'; }';
        $output .= '.coblog-top-footer{ background: '.esc_attr( get_theme_mod( 'ft_bg_color', '#f8f8f8' ) ) .'; }';
        $output .= '.coblog-top-footer a:hover{ color: '.esc_attr( get_theme_mod( 'ft_link_hover_color', '#FD4145' ) ) .'; }';
        $output .= '.coblog-top-footer{ padding-top: '.esc_attr( get_theme_mod( 'ft_padding_top', '80' ) ) .'px; }';
        $output .= '.coblog-top-footer{ padding-bottom: '.esc_attr( get_theme_mod( 'ft_padding_bottom', '80' ) ) .'px; }';

        // Coblog "Footer Options"
        $output .= '.coblog-footer-info,
                    .coblog-footer-social-icon ul li a{ color: '.esc_attr( get_theme_mod( 'fb_color', '#596172' ) ) .'; }';
        $output .= '.coblog-footer{ background: '.esc_attr( get_theme_mod( 'fb_bg_color', '#f8f8f8' ) ) .'; }';
        $output .= '.coblog-footer-social-icon ul li a:hover{ color: '.esc_attr( get_theme_mod( 'fb_link_color', '#FD4145' ) ) .'; }';
        $output .= '.coblog-footer a:hover{ color: '.esc_attr( get_theme_mod( 'fb_link_hover_color', '#FD4145' ) ) .'; }';
        $output .= '.coblog-footer-info{ padding-top: '.esc_attr( get_theme_mod( 'fb_padding_top', '60' ) ) .'px; }';
        $output .= '.coblog-footer-info{ padding-bottom: '.esc_attr( get_theme_mod( 'fb_padding_bottom', '60' ) ) .'px; }';

        return $output;
    }
}


//theme setup
if ( ! function_exists( 'coblog_setup' ) ) :
	function coblog_setup() {
        
        //add language string
		load_theme_textdomain( 'coblog', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

        # Set the default content width.
        $GLOBALS['content_width'] = apply_filters( 'coblog_content_width', 640 );

		// Registe wp_nav_menu
        register_nav_menus(
            array(
                'main-menu' => __( 'Main Menu', 'coblog' ),
                'topbar-menu' => __( 'Topbar Menu', 'coblog' )
            )
        );
        
        /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

        add_theme_support( 'custom-header', array(
            'default-image'    => get_parent_theme_file_uri( '/assets/images/placeholder/coblog-banner-1920-380.jpg' ),
            'width'            => 1920,
            'height'           => 380,
            'flex-height'      => true,
            'wp-head-callback' => 'coblog_header_style',
        ));

        # Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', array(
            'default-color' => 'ffffff',
        ));

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        
        # Enable support for custom logo.
        add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

        // Add custom styles for visual editor to resemble the theme style.
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'editor-styles' );
        add_editor_style( array( 'assets/css/editor-style.css' ) );
        // Gutenberg support
        add_theme_support( 'editor-color-palette', array(
            array(
            'name' => esc_html__( 'Tan', 'coblog' ),
            'slug' => 'tan',
            'color' => '#D2B48C',
            ),
            array(
                'name' => esc_html__( 'Yellow', 'coblog' ),
                'slug' => 'yellow',
                'color' => '#FDE64B',
            ),
            array(
                'name' => esc_html__( 'Orange', 'coblog' ),
                'slug' => 'orange',
                'color' => '#ED7014',
            ),
            array(
                'name' => esc_html__( 'Red', 'coblog' ),
                'slug' => 'red',
                'color' => '#D0312D',
            ),
            array(
                'name' => esc_html__( 'Pink', 'coblog' ),
                'slug' => 'pink',
                'color' => '#b565a7',
            ),
            array(
                'name' => esc_html__( 'Purple', 'coblog' ),
                'slug' => 'purple',
                'color' => '#A32CC4',
            ),
            array(
                'name' => esc_html__( 'Blue', 'coblog' ),
                'slug' => 'blue',
                'color' => '#4E97D8',
            ),
            array(
                'name' => esc_html__( 'Green', 'coblog' ),
                'slug' => 'green',
                'color' => '#00B294',
            ),
            array(
                'name' => esc_html__( 'Brown', 'coblog' ),
                'slug' => 'brown',
                'color' => '#231709',
            ),
            array(
                'name' => esc_html__( 'Grey', 'coblog' ),
                'slug' => 'grey',
                'color' => '#7D7D7D',
            ),
            array(
                'name' => esc_html__( 'Black', 'coblog' ),
                'slug' => 'black',
                'color' => '#000000',
            ),
        ));
        
        add_theme_support( 'editor-font-sizes', array(
            array(
                'name' => esc_html__( 'small', 'coblog' ),
                'shortName' => esc_html__( 'S', 'coblog' ),
                'size' => 12,
                'slug' => 'small'
            ),
            array(
                'name' => esc_html__( 'regular', 'coblog' ),
                'shortName' => esc_html__( 'M', 'coblog' ),
                'size' => 16,
                'slug' => 'regular'
            ),
            array(
                'name' => esc_html__( 'larger', 'coblog' ),
                'shortName' => esc_html__( 'L', 'coblog' ),
                'size' => 36,
                'slug' => 'larger'
            ),
            array(
                'name' => esc_html__( 'huge', 'coblog' ),
                'shortName' => esc_html__( 'XL', 'coblog' ),
                'size' => 48,
                'slug' => 'huge'
            )
        ));
        
        add_image_size( 'coblog-1140-600', 1140, 600, true );
	}
endif;
add_action( 'after_setup_theme', 'coblog_setup' );


//header style
if( ! function_exists( 'coblog_header_style' ) ):
    function coblog_header_style(){
        $header_text_color = get_header_textcolor();
        if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
            return;
        }
        ?>
        <style id="coblog-custom-header-styles" type="text/css">
            .wrap-inner-banner .page-header .page-title,
            body.home.page .wrap-inner-banner .page-header .page-title {
                color: #<?php echo esc_attr( $header_text_color ); ?>;
            }
        </style>
    <?php
    }
endif;

/**
* Register widget area.
*/
function coblog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'coblog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'coblog' ),
		'before_widget' => '<div id="%1$s" class="coblog-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="coblog-widget-title">',
		'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
		'name'          => esc_html__( 'Offcanvas', 'coblog' ),
		'id'            => 'offcanavs-1',
		'description'   => esc_html__( 'Add widgets here.', 'coblog' ),
		'before_widget' => '<div id="%1$s" class="coblog-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="coblog-widget-title">',
		'after_title'   => '</h2>',
    ) );
    
    for( $i = 1; $i <= 4; $i++ ){
		register_sidebar( array(
			'name'          => esc_html__( 'Footer', 'coblog' ) . $i,
			'id'            => 'coblog-footer-sidebar-' . $i,
			'description'   => esc_html__( 'Add widgets here.', 'coblog' ),
			'before_widget' => '<div id="%1$s" class="coblog-widget %2$s"><div class="footer-item">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h2 class="coblog-widget-title">',
			'after_title'   => '</h2>',
		) );
	}
}
add_action( 'widgets_init', 'coblog_widgets_init' );

/**
* Enqueue scripts and styles for Frontend.
*/
function coblog_scripts() {
    wp_enqueue_style( 'coblog-google-font-style', '//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900', false );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendors/bootstrap/css/bootstrap.min.css', null, 'all' );
    if ( is_rtl() ) {
        wp_enqueue_style( 'bootstrap-rtl', get_template_directory_uri() . '/assets/vendors/bootstrap/css/rtl/bootstrap.min.css', null, 'all' );
    }
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/vendors/fontawesome/css/fontawesome.min.css', null, 'all' );
    wp_enqueue_style( 'coblog-blocks-styles', get_template_directory_uri() . '/assets/css/blocks.css', null, 'all' );
    wp_enqueue_style( 'coblog-style', get_stylesheet_uri() );

    if ( has_nav_menu( 'main-menu' ) ) {
        wp_enqueue_script( 'coblog-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), COBLOG_VERSION, true );
		wp_enqueue_script( 'coblog-touch-navigation', get_template_directory_uri(). '/assets/js/touch-keyboard-navigation.js', array(), COBLOG_VERSION, true );
	}
    wp_enqueue_script( 'coblog-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), COBLOG_VERSION, true );
    wp_enqueue_script( 'coblog-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), COBLOG_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
    }
    wp_add_inline_style( 'coblog-style', coblog_css_generator() );
}
add_action( 'wp_enqueue_scripts', 'coblog_scripts' );

/**
* Enqueue scripts and styles for Editor.
*/
function coblog_scripts_editor() {
    wp_enqueue_style( 'coblog-google-font-style', '//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900', false ); 
}
add_action('enqueue_block_editor_assets', 'coblog_scripts_editor');

/**
* Add Body Class
*/
function coblog_body_classes( $classes ) {
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}
	return $classes;
}
add_filter( 'body_class', 'coblog_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function coblog_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'coblog_pingback_header' );

/**
 * footer widget active check
 */
function coblog_is_active_footer_sidebar(){
	for( $i = 1; $i <= 4; $i++ ){
		if ( is_active_sidebar( 'coblog-footer-sidebar-'.$i ) ) :
			return true;
		endif;
	}
	return false;
}

/**
 * Excerpt
 */
if(!function_exists('coblog_excerpt_max_charlength')):
	function coblog_excerpt_max_charlength($charlength) {
		$excerpt = get_the_excerpt();
		$charlength++;

		if ( mb_strlen( $excerpt ) > $charlength ) {
			$subex = mb_substr( $excerpt, 0, $charlength - 5 );
			$exwords = explode( ' ', $subex );
			$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
			if ( $excut < 0 ) {
				return mb_substr( $subex, 0, $excut );
			} else {
				return $subex;
			}
		} else {
			return $excerpt;
		}
	}
endif;

/**
 * Comment List
 */
function coblog_comments($comment, $args, $depth) { ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
        <div class="coblog-the-comment">	
            <div class="coblog-author-img">
                <?php echo get_avatar($comment,$args['avatar_size']); ?>
            </div>
            <div class="coblog-comment-text">
                <span class="reply">
                    <?php comment_reply_link(array_merge( $args, array('reply_text' => __('Reply', 'coblog'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?>
                    <?php edit_comment_link(__('Edit', 'coblog')); ?>
                </span>
                <h6 class="coblog-author"><?php echo get_comment_author_link(); ?></h6>
                <span class="coblog-date"><?php printf(__('%1$s at %2$s', 'coblog'), get_comment_date(),  get_comment_time()) ?></span>
                <?php if ($comment->comment_approved == '0') : ?>
                    <em><i class="fas fa-info-circle"></i><?php _e('Comment awaiting approval', 'coblog'); ?></em>
                    <br />
                <?php endif; ?>
                <?php comment_text(); ?>
            </div>	
        </div>	
    </li>
    <?php 
}