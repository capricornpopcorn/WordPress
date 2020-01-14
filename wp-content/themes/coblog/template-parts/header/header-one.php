<?php 
$coblog_topber = get_theme_mod( 'enable_topbar', 0 );
if($coblog_topber) {
    get_template_part('template-parts/topbar/topbar', 'one'); 
}
?>
<header id="masthead" class="site-header">
    <div class="coblog-header-wrap d-none d-lg-block">
        <div class="container">
            <div class="coblog-flex-wrap">
                <?php $coblog_header_share = get_theme_mod( 'enable_header_share', 1 );	?>
               <?php if($coblog_header_share==1) { ?>
                <div class="coblog-social-icon coblog-flex-col">
                    <ul>
                        <li><a href="<?php echo esc_url(get_theme_mod( 'share_facebook', '#' ));?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo esc_url(get_theme_mod( 'share_twitter', '#' ));?>"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="<?php echo esc_url(get_theme_mod( 'share_linkdin', '#' ));?>"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
               <?php } ?>
                <div class="coblog-site-branding coblog-flex-col">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <?php
                    $coblog_logoimg   = get_theme_mod( 'logo_img', get_template_directory_uri().'/assets/images/logo.png' );
                    $coblog_logotext  = get_theme_mod( 'logo_text', 'Coblog' );
                    $coblog_logotype  = get_theme_mod( 'logo_type', 'logo_img' );
                    switch ($coblog_logotype) {
                        case 'logo_img':
                        if( !empty($coblog_logoimg) ) { ?>
                            <img class="coblog-logo" src="<?php echo esc_url( $coblog_logoimg ); ?>" alt="<?php esc_attr_e( 'Logo', 'coblog' ); ?>" title="<?php esc_attr_e( 'Logo', 'coblog' ); ?>">
                        <?php } else { ?>
                            <h1> <?php echo esc_html(get_bloginfo('name'));?> </h1>
                        <?php }
                        break;
                        default:
                        if( $coblog_logotext ) { ?>
                            <h1> <?php echo esc_html( $coblog_logotext ); ?> </h1>
                        <?php } else { ?>
                            <h1><?php echo esc_html(get_bloginfo('name'));?> </h1>
                        <?php }
                        break;
                    } ?>
                    </a>
                </div><!-- .site-branding -->
                <div class="coblog-social-icon coblog-flex-col">
                    <?php $enable_subscribe = get_theme_mod( 'enable_subscribe', 1 );?>
                    <?php if($enable_subscribe) { ?>
                        <a class="coblog-btn-common coblog-btn-dark" href="<?php echo esc_html(get_theme_mod( 'subscribe_url', '#' ));?>"><?php echo esc_html(get_theme_mod( 'subscribe_text', 'Subscribe' ));?></a>
                    <?php } ?>
                </div>
            </div><!-- .coblog-flex-wrap -->
        </div><!-- .container -->
    </div><!--/.coblog-header-wrap-->
    
    <div class="main-navigation-wrap site-branding d-none d-lg-block">       
        <div class="container">    
            <div class="coblog-flex-wrap coblog-menu-wrap"> 
                <div class="coblog-flex-col">   
                    <?php $coblog_enable_offcanavs = get_theme_mod( 'enable_offcanavs', 1 );?>
                    <?php if($coblog_enable_offcanavs) { ?>
                        <a id="coblog-header-trigger" class="coblog-trigger" href="#">
                            <span class="coblog-icon-bar"></span>
                            <span class="coblog-icon-bar"></span>
                            <span class="coblog-icon-bar"></span>
                            <span class="coblog-icon-bar"></span>
                        </a>
                    <?php } ?>
                </div>   
                <div class="coblog-flex-col">  
                    <?php if ( has_nav_menu( 'main-menu' ) ) : ?>
                        <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'coblog' ); ?>">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-menu',
                                    'menu_class'     => 'main-menu',
                                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                )
                            );
                            ?>
                            <span></span>
                        </nav><!-- #site-navigation -->
                    <?php endif; ?>
                </div> 
                <div class="coblog-flex-col">   
                    <?php $coblog_enable_search = get_theme_mod( 'enable_search', 1 );?>
                    <?php if($coblog_enable_search) { ?>
                        <div class="coblog-search">
                            <button class="search-button" type="submit"<?php esc_attr( 'search-submit' ); ?>>
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    <?php } ?>
                </div>   
            </div>   
        </div><!-- .container --> 
    </div><!-- .main-navigation-wrap --> 

    <div class="header-responsive-wrap d-lg-none">
        <div class="container">  
            <div class="coblog-flex-wrap"> 
                <div class="coblog-flex-col">   
                    <a id="coblog-header-trigger" class="coblog-trigger" href="#">
                        <span class="coblog-icon-bar"></span>
                        <span class="coblog-icon-bar"></span>
                        <span class="coblog-icon-bar"></span>
                        <span class="coblog-icon-bar"></span>
                    </a>
                </div> 
                <div class="site-branding coblog-flex-col">
                    <a href="<?php echo esc_url(home_url()); ?>">
                    <?php
                        $coblog_logoimg   = get_theme_mod( 'logo_img', get_template_directory_uri().'/assets/images/logo.png' );
                        $coblog_logotext  = get_theme_mod( 'logo_text', 'Coblog' );
                        $coblog_logotype  = get_theme_mod( 'logo_type', 'logo_img' );
                        switch ($coblog_logotype) {
                            case 'logo_img':
                            if( !empty($coblog_logoimg) ) { ?>
                                <img class="coblog-logo" src="<?php echo esc_url( $coblog_logoimg ); ?>" alt="<?php esc_attr_e( 'Logo', 'coblog' ); ?>" title="<?php esc_attr_e( 'Logo', 'coblog' ); ?>">
                            <?php } else { ?>
                                <h1> <?php echo esc_html(get_bloginfo('name'));?> </h1>
                            <?php }
                            break;
                            default:
                            if( $coblog_logotext ) { ?>
                                <h1> <?php echo esc_html( $coblog_logotext ); ?> </h1>
                            <?php } else { ?>
                                <h1><?php echo esc_html(get_bloginfo('name'));?> </h1>
                            <?php }
                            break;
                        } ?>
                    </a>
                </div><!-- .site-branding -->
                <div class="coblog-flex-col">   
                    <?php $coblog_enable_search = get_theme_mod( 'enable_search', 1 );?>
                        <?php if($coblog_enable_search) { ?>
                        <div class="coblog-search">
                            <i class="fas fa-search"></i>
                        </div>
                    <?php } ?>
                </div> 
            </div><!--/.coblog-flex-wrap--> 
        </div><!--/.container--> 
    </div><!--/.header-responsive-wrap-->
</header><!-- #masthead -->        