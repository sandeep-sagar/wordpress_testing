<!-- Logo
============================================= -->
<div class="logo head-item">

<?php
$options = get_option('sakola_framework');
$upload_logo = '';
if (isset($options['logo_upload'])) {
$logo = $options['logo_upload'];
$upload_logo = $logo['url'];
} ?>

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

</div>
<!-- end logo -->