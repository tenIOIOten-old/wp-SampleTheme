<section >
	<header >
		<h2 ><?php _e( 'Nothing Found', 'twentyfifteen' ); ?></h1>
	</header>

	<div >

		<?php if ( is_home() ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'twentyfifteen' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyfifteen' ); ?></p>
				<div class="col-7">
					<?php get_search_form(); ?>
				</div>

				
		<?php else : ?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentyfifteen' ); ?></p>
			<div class="col-7">
			<?php get_search_form(); ?>
		</div>

		<?php endif; ?>

	</div>
</section>
