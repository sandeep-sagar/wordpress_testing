<?php 
if(class_exists( 'Redux' )) {
$options 			= get_option('sakola_framework');
$search_bar_style	= $options['search_bar_style'];

	if($search_bar_style == 'expand')  { ?>
	<form method="get" class="searchform search__form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<input type="search" class="field search__input" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_html_e( 'Search', 'sakola' ); ?>" />
		<button type="submit" class="submit search-button" value="<?php echo esc_attr_x( '', 'submit button', 'sakola' ); ?>" ><i class="icon-simple-line-icons-143"></i></button>
	</form>
	<?php }
	
	else { ?>
	<form method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<input type="search" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_html_e( 'Search...', 'sakola' ); ?>" />
		<button type="submit" class="submit search-button" value="<?php echo esc_attr_x( '', 'submit button', 'sakola' ); ?>"><i class="icon-simple-line-icons-143"></i></button>
	</form>
	<?php }
}
else { ?>
	<form method="get" class="searchform search__form" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
		<input type="search" class="field search__input" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_html_e( 'Search', 'sakola' ); ?>" />
		<button type="submit" class="submit search-button" value="<?php echo esc_attr_x( '', 'submit button', 'sakola' ); ?>" ><i class="icon-simple-line-icons-143"></i></button>
	</form>
<?php }