<div class="client-wrap clearfix">
	<div class="client-inner-content">

	<?php foreach ( $clients as $client ) : ?>

	<div class="client-content column <?php echo esc_attr( $column_choose_column ); ?> <?php echo esc_attr($mobile_choose_column); ?> <?php echo esc_attr($tablet_choose_column); ?>">
		<a href="<?php echo esc_url($client['client_link']['url']); ?>">
			<img src="<?php echo esc_url($client['client_img']['url']); ?>" alt="<?php echo sanitize_text_field($client['client_author']); ?>">
		</a>
	</div>

	<?php endforeach; ?>

	</div>
</div>