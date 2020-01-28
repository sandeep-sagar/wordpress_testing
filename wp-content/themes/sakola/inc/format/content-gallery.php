<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-item hentry magazine-post-style magazine-1-post-style clearfix'); ?>>

	<div class="post-content-wrap clearfix">
		<div class="post-content">
			<div class="standard-post-categories">
				<?php the_category(''); ?>
			</div>

			<h1 class="post-title entry-title"><?php the_title(); ?></h1>
			
			<div class="post-meta metadata clearfix">
				<span class="author">
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
						<span class="author-name">
							<?php sakola_get_author_50(); ?>
							<span class="author-separator"><?php esc_html_e( 'by', 'sakola' ); ?></span><span class="vcard"> <?php echo get_the_author_meta( 'display_name' ); ?></span>
						</span>
					</a>
					<p class="date">
						<time class="entry-date" datetime="<?php the_modified_date('Y-m-j'); ?>">
							<?php the_time( get_option( 'date_format' ) ); ?>
						</time>
					</p>
				</span>
				<span class="right-section">

					<div class="meta meta-comments">
						<a href="<?php comments_link(); ?>" class="comments"><i class="icon-simple-line-icons-124"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
					</div>
					
				</span>
			</div>

			<?php
			if ( class_exists( 'acf' ) ) {
			$images = get_field('sakola_gallery');
			if( $images){ ?>

			<div class="slider-wrapper">
				<div class="standard-carousel-slider post-gallery carousel-container">
					<div class="carousel-wrapper owl-carousel owl-theme">
						<?php foreach( $images as $image ): ?>
						<div class="carousel-slide item">
							<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />  
						</div>
						<?php endforeach; ?>
					</div>

					<div class="post-car-arrow-wrap on-bottom clearfix">
					</div>
				</div>
			</div>
			<?php }
			} ?>

			<div class="post-text entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
				<div class="meta-bottom clearfix">
					<div class="tag-wrapper"><?php the_tags('','',''); ?></div>
				</div>
			</div>
		</div>
	</div>

	<!-- pagination start -->
	<div class="next-prev-post clearfix">
		<?php $next_post = get_next_post();
		$previous_post = get_previous_post(); ?>
		
		<?php if ( get_previous_post() ) : ?>
		<div class="prev-post column column-2">
			<p><i class="icon-arrow-left"></i><?php esc_html_e( 'Previous Post', 'sakola' ); ?></p>
			<h4 class="title">
				<a href="<?php echo get_permalink( $previous_post->ID ); ?>"><?php echo get_the_title( $previous_post->ID ); ?></a>
			</h4>
		</div>
		<?php endif; ?>
		
		<?php if ( get_next_post() ) : ?>
		<div class="next-post column column-2">
			<p><?php esc_html_e( 'Next Post', 'sakola' ); ?><i class="icon-arrow-right"></i></p>
			<h4 class="title">
				<a href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo get_the_title( $next_post->ID ); ?></a>
			</h4>
		</div>
		<?php endif; ?>
	</div>
	<!-- pagination end -->

	<!-- Author Info -->
	<?php $author_desc = get_the_author_meta('description'); 
	if(!empty($author_desc)) { ?>
	<div class="post-author clearfix">
		<div class="author-wrap clearfix">
		
			<figure class="author-ava">
				<?php echo get_avatar( get_the_author_meta('ID'), '100' ); ?>
			</figure>

			<div class="author-desc">
				<div class="author-name">
					<span><?php esc_html_e( 'Written by', 'sakola' ); ?></span> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" title="<?php echo get_the_author_meta( 'display_name' ); ?>" rel="author"><?php echo get_the_author_meta( 'display_name' ); ?></a>
				</div>
				<p><?php the_author_meta('description'); ?></p>
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- end of author -->

	<?php get_template_part( 'inc/part/related', 'post' ); ?>

</article><!-- #post-<?php the_ID(); ?> -->

<?php 
	if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
	if ( comments_open() || '0' != get_comments_number() ) comments_template(); 
?>