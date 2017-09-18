        </div> <!-- col-9 -->
        <div class="l-sidebar col-3">
            <?php get_sidebar() ?>
        </div>
    </div> <!-- row -->
</div> <!-- container -->
<footer class="l-footer">
<span>
Copyright © 2017 <?php print_name(); ?> All Rights Reserved.
</span>
<?php if ( is_active_sidebar( 'footer-left-widget' ) ) : ?>
        <div class="footer-widget">
            <?php dynamic_sidebar( 'footer-left-widget' ); ?>
        </div>
        <?php endif; ?>
</footer>
<?php wp_footer(); ?>     
</body>
</html>