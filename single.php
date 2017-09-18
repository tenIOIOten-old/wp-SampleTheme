<!-- Get header -->
<?php get_header(); ?>

<article class="single">
    <!-- header -->
    <header class="single-header is-content-header">
        <h2 class="single-title"><?php single_post_title(); ?></h1>
    </header>

<!-- posts -->
<?php
// Start the loop.
while ( have_posts() ) : the_post();
?>
    <section class="page">
    <?php the_content() ?>
    </section>
<?php endwhile;?>
</article>
<?php get_footer(); ?>