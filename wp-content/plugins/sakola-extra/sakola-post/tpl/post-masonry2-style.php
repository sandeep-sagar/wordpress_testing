<div class="masonry-post post-masonry-style masonry-style-2">
	<ul class="grid effect-3" id="grid">
	
	<?php global $post;
	   
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
	?>

		<li  id="post-<?php the_ID(); ?>" class="post selected-for-margin-bottom selector-padding <?php echo sanitize_text_field($horizontal_col_select2); ?>">

			<div class="post-style-9 clearfix">
				<div class="post-list">
					<div class="post-block">
						<div class="post-block-inner">
							<?php if ( has_post_thumbnail() ) { ?>
								<div class="thumbnail">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>
									</a>
								</div><!-- thumbnail-->
							<?php } ?> 

							<div class="post-content">
								<?php if($use_meta == 'on') { ?>
									<div class="category-name"><?php the_category(', '); ?></div>
								<?php } 

								if($use_title == 'on') { ?>
									<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<?php } 
								
								if($use_excerpt == 'on') { ?>
								<div class="post-excerpt post-text">
									<p><?php echo sakola_excerpt($excerpt_word); ?></p>
								</div>
								<?php } ?>
							</div>
						</div>

						<div class="post-action">
							<?php if($use_meta == 'on') { ?>
							<div class="comments">
								<a href="<?php the_permalink(); ?>" class="comments">
									<i class="icon-themify-72"></i>
									<?php comments_number( '0', '1', '%' ); ?>
									<?php esc_html_e( 'Comments', 'sakola' ); ?>
								</a>
							</div>
							<?php } 
								
							if($use_read_more == 'on') { ?>
							<div class="read-more-button">
								<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Read More', 'sakola' ); ?></a>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>

		</li><!-- #post-<?php the_ID(); ?> -->

		<?php endwhile; wp_reset_postdata(); endif;  ?>

	</ul>
 </div>

<script type="text/javascript">
	jQuery(window).load(function(){
		new AnimOnScroll( document.getElementById( 'grid' ), {
			minDuration : 0.4,
			maxDuration : 0.7,
			viewportFactor : 0.2
		} );
	});
</script>