
<form role="search" method="get"action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default"><span><?php echo _x( 'Search', 'submit button'); ?></span></button>
		</span>
	</div>
</form>
