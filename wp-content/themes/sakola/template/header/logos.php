<!-- Logo
============================================= -->
<div class="logo head-item">

<?php
$options = get_option('sakola_framework');
$upload_logo = '';
if (isset($options['logo_upload'])) {
$logo = $options['logo_upload'];
$upload_logo = $logo['url'];
}

if(class_exists( 'Redux' )) {
$options 			= get_option('sakola_framework');
$sakola_alt_logo 	= '';
	if (isset($options['header_alt_logo'])) {
		$sakola_header_alt_logo 	= $options['header_alt_logo'];
		$sakola_alt_logo 			= $sakola_header_alt_logo['url'];
	}
}

 if(class_exists( 'acf' )) {
	$sakola_header_style_choice = get_field('header_style_choice');
	
	if($sakola_header_style_choice == 'alternative' && !empty( $sakola_alt_logo ))  { ?>
	<div class="logo-image">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo esc_url( $sakola_alt_logo ); ?>" alt="<?php esc_html_e( 'logo-alt', 'sakola' ); ?>" />
		</a>
	</div>
	<?php }
	elseif($sakola_header_style_choice == 'alternative' && empty( $sakola_alt_logo ) && !empty( $upload_logo )){ ?>
	<div class="logo-image">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo esc_url( $upload_logo ); ?>" alt="<?php esc_html_e( 'logo', 'sakola' ); ?>" />
		</a>
	</div>
	<?php }
	elseif($sakola_header_style_choice == 'default' && !empty( $upload_logo )){ ?>
	<div class="logo-image">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo esc_url( $upload_logo ); ?>" alt="<?php esc_html_e( 'logo', 'sakola' ); ?>" />
		</a>
	</div>
	<?php }
	elseif( $upload_logo == '' && $sakola_alt_logo == ''){ ?>
	<div class="logo-title">
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></a>
		</h1>
	</div>
	<?php }
	elseif( is_single() && !empty( $upload_logo ) ) { ?>
	<div class="logo-title">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo esc_url( $upload_logo ); ?>" alt="<?php esc_html_e( 'logo', 'sakola' ); ?>" />
		</a>
	</div>
	<?php }
	else { ?>
	<div class="logo-title">
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></a>
		</h1>
	</div>
	<?php } ?>
<?php }
else { ?>

	<?php if ( ! empty( $upload_logo ) ) { ?>
	<div class="logo-image">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img src="<?php echo esc_url( $upload_logo ); ?>" alt="<?php esc_html_e( 'logo', 'sakola' ); ?>" />
		</a>
	</div>
	<?php }
	else { ?>
	<div class="logo-title">
		<h1 class="site-title">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></a>
		</h1>
	</div>
	<?php } ?>

<?php } ?>
</div>
<!-- end logo -->