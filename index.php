<!-- Get header -->
<?php get_header(); ?>

<!-- content wrap -->
<div class="wrap">
<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	<?php else : ?>
	<header class="page-header">
		<h2 class="page-title"><?php _e( 'Posts', 'twentyseventeen' ); ?></h2>
	</header>
	<?php endif; ?>
<!-- content -->
<!-- posts -->


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
    <? the_category( " ") ?>
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
<?php // get_template_part( "content", "page" ); ?>
<?php endwhile;?>
</div>

<!-- Get footer -->
<?php get_footer(); ?>