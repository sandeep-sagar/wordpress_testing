<?php global $post; $rand1 = rand(); ?>

<div  class="feature-slider-<?php echo $rand1; ?> carousel-post-slider-2 clearfix">
	<div class="owl-carousel owl-theme">

	<?php
	$order1 = array(
		'posts_per_page' => $post_per_page,
		'post_type' => 'post',
		'ignore_sticky_posts' => true,
		'cat' => $category,
		'offset' => $offset,
		'orderby' => $orderby
	);

	$sec_hook = new WP_Query( $order1 );

	if ($sec_hook->have_posts()) : while($sec_hook->have_posts()) : $sec_hook->the_post();

	if (has_post_thumbnail()) { 
		$img_url_blog = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
		if($choose_column != 'auto') {
			$image_blogblog = aq_resize($img_url_blog[0],  $width , $height_car, true);
		}
		else {
			$image_blogblog = aq_resize($img_url_blog[0],  $img_url_blog[1], $height_car, true);
		}
	} ?>

	<article class="item post-list-carousel">
		<div class="post-block">
			<div class="post-thumb">
				<div class="post-thumb-img" <?php if(has_post_thumbnail()) { ?> style="background-image:url(<?php echo esc_url( $image_blogblog ); ?>)" <?php } ?>>
					
					<div class="post-bg-color"></div>

					<div class="inner-post-content">
						<div class="post-content">
							<?php if($use_meta == 'on') { ?>
								<div class="category-name"><?php the_category(', '); ?></div>
							<?php } 
							if($use_title == 'on') { ?>
								<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php } ?>

							<?php if($use_read_more == 'on') { ?>
								<div class="read-more-button">
									<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'sakola' ); ?></a>
								</div>
							<?php } ?>
						</div>
						<!-- end of post-content -->
					</div>

				</div>
			</div>
		</div>
	</article>
	<!-- owl item end -->
		
	<?php endwhile; wp_reset_postdata(); endif;  ?>
	</div>

	<?php if($navigation != 'none') {
		if($navigation == 'dots') { ?>
		<!-- Add Pagination -->
		<div class="post-dot swiper-pagination"></div>
		<?php }
		elseif($navigation == 'arrows') { ?>
		<!-- Add Arrows -->
		<div class="post-page-car post-car-arrow-wrap on-bottom clearfix">
		</div>
		<?php }
		else { ?>
		<!-- Add Pagination -->
		<div class="post-dot swiper-pagination"></div>
		<!-- Add Arrows -->
		<div class="post-page-car post-car-arrow-wrap on-bottom clearfix">
		</div>
		<?php }
	} ?>

<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('.feature-slider-<?php echo $rand1; ?> .owl-carousel').owlCarousel({
    <?php if($auto_loop == 'use') { ?>
		loop: true,
	<?php } ?>
	<?php if($navigation == 'dots' || $navigation == 'arrows-dots') { ?>
		dots: true,
		dotsContainer: '.post-dot',
	<?php }
	if($navigation == 'arrows' || $navigation == 'arrows-dots') { ?>
		navContainer: '.post-page-car',
		nav:true,
		navText: [
              '<div class="swiper-button-next post-carousel-arrow"></div>',
              '<div class="swiper-button-prev post-carousel-arrow"></div>'
              ],
	<?php } ?>
    margin:<?php echo $column_gap; ?>,
    <?php if($autoplay == 'use') { ?>
		autoplay:true,
		autoplayTimeout:<?php echo $autoplay_ms; ?>,
	<?php } ?>
	<?php if($centered_slide == 'use') { ?>
    	center:true,
    <?php } ?>
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:<?php echo $choose_column_mobile; ?>
        },
        1000:{
            items:<?php echo $choose_column; ?>
        }
    }
})
});
</script>

</div>