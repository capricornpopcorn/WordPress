<footer class="coblog-footer">
    <div class="container">
        <div class="coblog-footer-info">
            <div class="row">
            <div class="col-md-12 text-center">
                    <div class="coblog-copyrhigt">
                        <?php $coblog_footer_logo = get_theme_mod( 'footer_logo', get_template_directory_uri().'/assets/images/footer-logo.png' );?>
                        <?php $coblog_copyright = get_theme_mod( 'copyright', 'Created by <strong>WPesta</strong>. Powered by <strong>WordPress</strong><br> All rights reserved' );?>
                        <?php $coblog_footer_share = get_theme_mod( 'enable_footer_share', 1 );?>
                        <div class="coblog-copyrhigt-img">    
                            <img src="<?php echo esc_url($coblog_footer_logo);?>" alt="<?php esc_attr_e('Footer Logo','coblog') ?>"> 
                        </div>
                        <div class="coblog-copyrhigt-text"><?php echo wp_kses_post($coblog_copyright);?></div>
                        <?php if( $coblog_footer_share == 0 ) { ?>
                            <div class="coblog-social-icon coblog-footer-social-icon">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div><!--/.coblog-social-icon--> 
                        <?php } ?>
                    </div><!--/.coblog-copyrhigt-->  
                </div><!--/.col-sm-5-->         
            </div><!--/.row-->
        </div><!-- .container -->
    </div><!-- .container -->
</footer>