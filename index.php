<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *s
 *
 * @package WordPress
 * @subpackage WP-Sample
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

<div class="wrap">
    <ul>

        <?php  
wp_get_archives(array("type"=>"daily"))

?>
</ul>
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();
    ?>
    <div class="one-post">
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->
    <div class="entry-content">
        <?php the_content(); ?>
    </div>
    <footer>
    <?php 
$archive_year  = get_the_time( 'Y' ); 
$archive_month = get_the_time( 'm' ); 
$archive_day   = get_the_time( 'd' ); 
?>
<a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day ); ?>">この日の投稿一覧</a>
    </footer>
    </div>
<?php endwhile;?>
</div>
<?php get_footer(); ?>