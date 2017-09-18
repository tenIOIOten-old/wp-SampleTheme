<?php get_header( ); ?>
<?php if ( have_posts() ) :?>
<?php
    // Start the loop.
    while ( have_posts() ) : the_post();
    ?>
<section class="page">
  <header class="page-header is-content-header">
    <?php the_title( '<h2 class="page-title">', '</h2>' ); ?>
  </header>
  <article class="page-content row">
    <?php the_content() ?>
  </article>
</section>
<?php endwhile;endif;?>

<?php
get_footer( );
