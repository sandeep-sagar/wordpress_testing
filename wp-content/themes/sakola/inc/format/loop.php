<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-item'); ?>>

	<?php if ( has_post_thumbnail()) { ?>
		<div class="post-thumb">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>

				<div class="sakola-overlay"></div>
			</a>
		</div><!-- thumbnail-->
	<?php } ?> 

	<div class="post-content-wrap">
		<div class="post-content">

			<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

			<div class="meta-wrapper clearfix">
				<span class="author">
					<span class="author-separator"><?php esc_html_e( 'by', 'sakola' ); ?></span>
					<span class="vcard"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"> <?php echo get_the_author_meta( 'display_name' ); ?></a></span>
				</span>
				<span class="date">
					<span><?php esc_html_e( 'posted on', 'sakola' ); ?></span>
					<a href="<?php the_permalink(); ?>">
						<span><?php echo get_the_date('F'); ?></span> <span><?php echo get_the_date('d'); ?></span><?php esc_html_e( ',', 'sakola' ); ?> <span><?php echo get_the_date('Y'); ?></span>
					</a>
				</span>
				<span class="standard-post-categories">
					<?php the_category(', '); ?>
				</span>
			</div>

			<div class="post-text">
				<?php the_excerpt(); ?>
			</div>

			<a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Continue Reading', 'sakola' ); ?></a>
		</div>
	</div>
</article>