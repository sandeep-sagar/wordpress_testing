<?php sakola_header_choice(); ?>

<?php 
if ( class_exists( 'Redux' ) ) {
$options = get_option('sakola_framework');
	$sakola_blog_type = $options['blog_type']; 
	$sakola_loop_nav_type = $options['loop_nav_type'];
	$sakola_blog_infinite_style = $options['blog_infinite_style'];

?>
<!-- CONTENT START
============================================= -->
<section id="content" class="blog-content-wrap clearfix">

	<!-- BLOG START
	============================================= -->
	<div class="blog right-sidebar clearfix">
        <div class="container clearfix">
        	<div class="row clearfix">
				<!-- BLOG LOOP START
				============================================= -->
				<div class="column column-2of3 clearfix">
	                <div class="blog-section main-blog-loop infinite-container content-section">

					<?php while ( have_posts() ) : the_post(); 
			
						get_template_part( 'inc/format/loop', get_post_format() );

					endwhile; // end of the loop. ?>

					<?php
					if($sakola_loop_nav_type == 'nav_default') {
						sakola_content_nav($pages = '', $range = 2);
					}
					elseif($sakola_loop_nav_type == 'nav_pagina') {
						sakola_pagination($pages = '', $range = 2);
					} ?>
				
					</div>

					<?php if($sakola_loop_nav_type == 'nav_infinite') { ?>

						<div class="navigation-paging infinite-wrap <?php echo esc_attr($sakola_blog_infinite_style); ?> clearfix">
							<div id="load-more-loop" class="infinite-button"><?php next_posts_link( '' ); ?></div>
							<button id="load-infinite-loop" class="btn"><?php esc_html_e( 'Load More', 'sakola' ); ?></button>
						</div>
						
					<?php } ?>
				</div>
				<!-- BLOG LOOP END -->

				<!-- SIDEBAR START
				============================================= -->

				<?php get_sidebar(); ?>

				<!-- SIDEBAR END -->
			</div>
		</div>
	</div>
	<!-- BLOOG END -->

</section>
<!-- CONTENT END -->
<?php }
else { ?>
<!-- CONTENT START
============================================= -->
<section id="content" class="blog-content-wrap clearfix">

	<!-- BLOG START
	============================================= -->
	<div class="blog right-sidebar wrapper-space clearfix">
        <div class="container clearfix">
        	<div class="row clearfix">
				<!-- BLOG LOOP START
				============================================= -->
				<div class="column column-2of3 clearfix">
	                <div class="blog-section content-section">

					<?php while ( have_posts() ) : the_post(); 
			
						get_template_part( 'inc/format/loop', get_post_format() );

					endwhile; // end of the loop. ?>

					<?php sakola_content_nav($pages = '', $range = 2); ?>
				
					</div>
				</div>
				<!-- BLOG LOOP END -->

				<!-- SIDEBAR START
				============================================= -->

				<?php get_sidebar(); ?>

				<!-- SIDEBAR END -->
			</div>
		</div>
	</div>
	<!-- BLOOG END -->

</section>
<!-- CONTENT END -->
<?php } ?>

<?php sakola_footer_choice(); ?>