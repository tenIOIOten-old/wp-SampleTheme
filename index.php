<!-- Get header -->
<?php get_header(); ?>

<section class="index">
    <!-- header -->
<?php if ( is_home() && ! is_front_page() ) : ?>
    <header class="index-header is-content-header">
        <h2 class="index-title"><?php single_post_title(); ?></h1>
    </header>
	<?php else : ?>
	<header class="index-header is-content-header">
		<h2 class="index-title"><?php _e( 'Posts' ); ?></h2>
	</header>
<?php endif; ?>
<!-- posts -->

<div class="index-posts is-posts-container">
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();
    ?>
<?php get_template_part( "content", "page" ); ?>
<?php endwhile;?>
</div>
</section>

<!-- Get footer -->
<?php get_footer(); ?>