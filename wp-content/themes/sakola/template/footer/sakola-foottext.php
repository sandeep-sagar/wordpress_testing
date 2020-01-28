<div class="foot-col-item clearfix">
<?php 
$options = get_option('sakola_framework');
$sakola_foot_address = $options['foot_address'];

echo htmlspecialchars_decode( esc_html( $sakola_foot_address )); ?>
</div>