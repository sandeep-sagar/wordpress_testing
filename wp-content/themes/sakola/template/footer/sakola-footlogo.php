<div class="logo-footer foot-col-item">
	<?php $sakola_foot_logo = '';
	$options = get_option('sakola_framework');
	if (isset($options['foot_logo'])) {
	$sakola_foot_logo = $options['foot_logo']; ?>
		<img src="<?php echo esc_url( $sakola_foot_logo['url'] ); ?>" alt="">
	<?php } ?>
</div>