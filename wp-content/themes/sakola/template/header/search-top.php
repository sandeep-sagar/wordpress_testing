<div class="search-form default-search head-item">
	<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_html_e( 'Search...', 'sakola' ); ?>" />
		<button type="submit" class="submit search-button" value="<?php echo esc_attr_x( '', 'submit button', 'sakola' ); ?>"><i class="icon-simple-line-icons-143"></i></button>
	</form>
</div>