<?php
if ( $username != '' ) {

	$media_array = scrape_instagram( $username );

	if ( is_wp_error( $media_array ) ) {

		echo wp_kses_post( $media_array->get_error_message() );

	} else {

		// filter for images only?
		if ( $images_only = apply_filters( 'wpiw_images_only', FALSE ) ) {
			$media_array = array_filter( $media_array, array( $this, 'images_only' ) );
		}

		// slice list down to required limit
		$media_array = array_slice( $media_array, 0, $limit );
		//var_dump($media_array);

		// filters for custom classes

		?>

		<div class="instagram-builder column-<?php echo sanitize_text_field($choose_column); ?> clearfix">
		<?php foreach ( $media_array as $item ) { ?>
			<?php //var_dump($item); ?>
			<div class="instagram-item <?php echo esc_attr($mobile_choose_column); ?> <?php echo esc_attr($tablet_choose_column); ?>">
				<div class="space-selector">
					<div class="instagram-item-wrap item-wrap">
						<a href="<?php echo esc_url( $item['link'] ); ?>" target="_blank">
							<img src="<?php echo esc_url( $item[$size] ); ?>" alt="<?php echo esc_attr( $item['description'] ); ?>" title="<?php echo esc_attr( $item['description'] ); ?>">
							<div class="overlay"></div>
							<div class="instagram-meta">
								<?php if($use_love_inst == 'use') { ?>
								<div class="like meta-icon"><i class="icon-heart-o"></i><?php echo balancetags( $item['likes'] ); ?></div>
								<?php }
								if($use_comment_inst == 'use') { ?>
								<div class="comment meta-icon"><i class="icon-simple-line-icons-124"></i><?php echo balancetags( $item['comments'] ); ?></div>
								<?php } ?>
							</div>
						</a>
					</div>
				</div>
			</div>
			
		<?php } ?>
		</div>
	<?php }
} ?>

	<script type="text/javascript">
	(function($) {
	'use strict';

		$(document).ready(function(){

			var $grid = $('.instagram-builder').imagesLoaded( function() {
				// init Masonry after all images have loaded
				$grid.isotope({
					initLayout: true,
					columnWidth: '.instagram-item',
					itemSelector: '.instagram-item',
					percentPosition: true,
					fitWidth: true,
					stagger: 30,
				});
			});

			$(window).resize(function() {
				$grid.isotope('layout');
			});
		
		});

	})( jQuery );
	</script><!-- Portfolio Script End -->