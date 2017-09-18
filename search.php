<?php
get_header(); ?>

<?php if ( have_posts() ) : ?>

<header class="is-content-header">
	<h2 ><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
</header><!-- .page-header -->

<section class="is-posts-container" >
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span>' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );
		// If no content, include the "No posts found" template.
        else :
			get_template_part( 'content', 'none' );

		endif;
		?>
	</section>
<?php get_footer(); ?>
