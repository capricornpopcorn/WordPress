	</div><!-- #content -->
    <?php get_template_part('template-parts/footer/footer', 'top'); ?>
    <?php get_template_part('template-parts/footer/footer', 'info'); ?>
</div><!-- #page -->
    <?php get_template_part( 'template-parts/offcanvas/offcanvas', 'one' );?>
    <?php $coblog_enable_search = get_theme_mod( 'enable_search', 1 );?>
    <?php if($coblog_enable_search) { ?>
        <div class="coblog-header-search" style="display: none;">
            <div class="coblog-header-search-wrap">
                <?php echo get_search_form();?>
            </div><!-- Site search end -->
        </div><!-- Site search end -->
    <?php } ?>
<?php wp_footer(); ?>

</body>
</html>
