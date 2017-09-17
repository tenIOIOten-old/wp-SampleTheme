<!-- Get header -->
<?php get_header(); ?>

<!-- content wrap -->
<div class="wrap">
<!-- content -->
<!-- posts -->

    <ul>

        <?php  
wp_get_archives(array("type"=>"daily"))

?>
</ul>
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();
    ?>
    <!-- post -->
    <div>
    <header>
        <?php the_title( '<h1 class="title"><a href="'.get_permalink().'">', '</a></h1>' ); ?>
        <div class="thumbnail"><?php the_post_thumbnail(array(300,200)); ?></div>
    </header>
    <div>
        <?php the_content(); ?>
    </div>
    <footer>
    <!-- catogory link -->
    <?= the_category( " ") ?>
    <!-- date link -->
    <?php 
    // Get post date
    $archive_year  = get_the_time( 'Y' ); 
    $archive_month = get_the_time( 'm' ); 
    $archive_day   = get_the_time( 'd' ); 
    ?>
    <a href="<?= get_day_link( $archive_year, $archive_month, $archive_day ); ?>"><?php the_time("Y/m/d") ?></a>
    </footer>
    </div>
<?php endwhile;?>
</div>

<!-- Get footer -->
<?php get_footer(); ?>