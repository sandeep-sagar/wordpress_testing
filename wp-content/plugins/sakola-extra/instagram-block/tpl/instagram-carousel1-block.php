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

<div class="instagram-builder carousel-container carousel-instagram-slider clearfix">
	<div class="owl-carousel owl-theme">
		<?php foreach ( $media_array as $item ) { ?>
			<?php //var_dump($item); ?>
			<div class="item instagram-item">
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

	<?php if($navigation != 'none') {
		if($navigation == 'dots') { ?>
		<!-- Add Pagination -->
		<div class="insta-dot owl-dots clearfix"></div>
		<?php }
		elseif($navigation == 'arrows') { ?>
		<!-- Add Arrows -->
		<div class="insta-page insta-arrow-nav post-car-arrow-wrap on-bottom clearfix">
		</div>
		<?php }
		else { ?>
		<!-- Add Pagination -->
		<div class="insta-dot owl-dots clearfix"></div>
		<!-- Add Arrows -->
		<div class="insta-page insta-arrow-nav car-arrow-wrap post-car-arrow-wrap on-bottom both-nav clearfix">
		</div>
		<?php }
	} ?>
</div>
<?php }
} ?>

<script type="text/javascript">
(function($) {
'use strict';
$(document).ready(function() {
	$('.carousel-instagram-slider .owl-carousel').owlCarousel({
		<?php if($navigation == 'dots') { ?>
			dots: true,
			nav:false,
			dotsContainer: '.insta-dot',
			dotsClass: 'owl-dots',
		<?php }
		if($navigation == 'arrows') { ?>
			navContainer: '.insta-arrow-nav',
			nav:true,
			dots: false,
			navText: [
				'<div class="carousel-button-prev car-page-arrow"><i class="post-carousel-arrow icon-themify-4"></i></div>',
				'<div class="carousel-button-next car-page-arrow"><i class="post-carousel-arrow icon-themify-3"></i></div>'
				  ],
		<?php }
		if( $navigation == 'arrows-dots') { ?>
			dots: true,
			dotsContainer: '.insta-dot',
			dotsClass: 'owl-dots',
			navContainer: '.insta-arrow-nav',
			nav:true,
			navText: [
				'<div class="carousel-button-prev car-page-arrow"><i class="post-carousel-arrow icon-themify-4"></i></div>',
				'<div class="carousel-button-next car-page-arrow"><i class="post-carousel-arrow icon-themify-3"></i></div>'
				  ],
		<?php }
		if($navigation == 'none') { ?>
			nav:false,
			dots: false,
		<?php } ?>
			margin: <?php echo $column_gap; ?>,
		<?php if($autoplay == 'use') { ?>
			autoplay: true,
			autoplaySpeed: <?php echo $autoplay_ms; ?>,
			autoplayHoverPause: true,
		<?php } ?>
		<?php if($auto_loop == 'use') { ?>
			loop: true,
		<?php } ?>
			responsive:{
			0:{
				items:<?php echo $choose_column_mobile; ?>
			},
			768:{
				items:<?php echo $choose_column_tablet; ?>
			},
			1025:{
				items:<?php echo $choose_column; ?>
			}
		},
		<?php if($centered_slide == 'use') { ?>
			center: true,
		<?php } ?>
	});
});
})( jQuery );
</script>