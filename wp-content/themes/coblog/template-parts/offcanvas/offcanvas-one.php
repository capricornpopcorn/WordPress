<div class="coblog-close-canvas"></div>
<div class="coblog-offcanvas-wrap"> 
    <div class="coblog-offcanvas-header">
        <div class="coblog-offcanvas-logo">
            <?php $coblog_logoimg   = get_theme_mod( 'logo_img', get_template_directory_uri().'/assets/images/logo.png' ); ?>
            <img class="coblog-offcanavs-logo" src="<?php echo esc_url( $coblog_logoimg ); ?>" alt="<?php esc_attr_e( 'Logo', 'coblog' ); ?>">
        </div>
        <a id="coblog-header-trigger" class="coblog-trigger" href="#">
            <span class="coblog-icon-bar"></span>
            <span class="coblog-icon-bar"></span>
        </a>
    </div><!--/.coblog-offcanvas-header-->
    <div class="coblog-offcanvas-sidebar">     
        <div class="coblog-offcanvas-menu">     
            <?php if ( has_nav_menu( 'main-menu' ) ) : ?>
                <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'coblog' ); ?>">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'menu_class'     => 'main-menu',
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        )
                    );
                    ?>
                </nav><!-- #site-navigation -->
            <?php endif; ?>
        </div><!--/.coblog-offcanvas-menu-->
        <?php
        if ( is_active_sidebar( 'offcanavs-1' ) ) { ?>
            <div class="coblog-offcanvas-widget">  
                <?php dynamic_sidebar( 'offcanavs-1' ); ?>
            </div><!--/.coblog-offcanvas-widget-->
        <?php } ?>
    </div><!--/.coblog-offcanvas-sidebar-->
</div><!--/.coblog-offcanvas-wrap-->
