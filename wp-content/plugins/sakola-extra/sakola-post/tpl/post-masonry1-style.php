<?php global $post;
?>
<?php
$screenWidth = '<script type="text/javascript">document.write(screen.width);</script>';
?>
<div class="blog-section masonry-post post-masonry-style masonry-style-1 clearfix">
	<ul class="grid <?php echo esc_attr($post_scroll_reveal); ?><?php if($post_pagination_type == 'post_pagination_infinite') { ?> masonry-wrap-<?php echo esc_attr($loop_infinite_class); } ?>" id="grid">
	
	<?php
		if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
		elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
		else { $paged = 1; }
		$post_masonry1_args = array(
			'posts_per_page' => $post_per_page,
			'ignore_sticky_posts' => true,
			'post_type' => 'post',
			'paged'	=> $paged,
			'cat' => $category,
			'offset' => $offset,
			'orderby' => $orderby 
		);

	$post_masonry1_loop = new WP_Query( $post_masonry1_args );
	if ($post_masonry1_loop->have_posts()) : while($post_masonry1_loop->have_posts()) : $post_masonry1_loop->the_post();
	?>

	<li id="post-<?php the_ID(); ?>" class="blog-item post selected-for-margin-bottom selector-padding <?php echo esc_attr($horizontal_col_select2); ?> <?php echo esc_attr($horizontal_col_select2_tablet); ?> <?php echo esc_attr($horizontal_col_select2_mobile); ?>">

		<div class="loop-content">
			
			<?php if ( has_post_thumbnail() ) { ?>
				<div class="thumbnail">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				</div><!-- thumbnail-->
			<?php } ?>    

			<div class="info">

				<?php if($use_category == 'on') { ?>
				<div class="top-info">
					<span class="category"><?php the_category(', '); ?></span>
				</div>
				<?php }
				if($use_title == 'on') { ?>
				<h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<?php } 
				if($use_date == 'on') {  ?>
				<div class="date"><?php echo get_the_date(); ?></div>
				<?php }
				if($use_excerpt == 'on') { ?>
				<div class="post-excerpt post-text"><p><?php echo sakola_excerpt($excerpt_word); ?></p></div>
				<?php } 
				if($use_read_more == 'on') { ?>
				<div class="more-button clearfix">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="more">
						<?php esc_html_e( 'VIEW', 'sakola' ); ?>	
					</a>
				</div>
				<?php } ?>
			</div>
		</div><!-- post-content -->

	</li><!-- #post-<?php the_ID(); ?> -->

	<?php endwhile;  endif;  ?>

	</ul>
	<?php
	$pages = '';
	$range = 2;
	$showitems = ($range * 2)+1;
	if($pages == '')
	{
		$pages = $post_masonry1_loop->max_num_pages;
		if(!$pages)
		{
			$pages = 1;
		}
	}
	if($post_pagination_type == 'post_pagination_number') {				 
		if(1 != $pages)
		{
			if($use_shadow_pagination != 'on') { 
			echo "<div class='navigation-paging pagination-num no-shadow clearfix'>";
			}
			else {
			echo "<div class='navigation-paging pagination-num clearfix'>";
			}
				echo "<div class='container'>";
					if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>First</a>";
					if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

					for ($i=1; $i <= $pages; $i++)
					{
						if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
						{
							echo ($paged == $i)? "<span class='btn current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='btn inactive' >".$i."</a>";
						}
					}

					if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
					if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last</a>";
				echo "</div>\n";
			echo "</div>\n";
		 }
	}
	elseif($post_pagination_type == 'post_pagination_nexprev') {
		if(1 != $pages) {  ?>
		<nav class="navigation-paging pagination pagination-page-template clearfix">
			<div class="container">
				<div class="post-navigation nav-previous pull-left">
					<?php next_posts_link( $pagination_prev_text, $post_masonry1_loop->max_num_pages ); ?>
				</div>
				<?php if ( get_previous_posts_link() ) : ?>
				<div class="post-navigation nav-next pull-right">
					<?php echo get_previous_posts_link( esc_html__( $pagination_next_text, 'sakola' ) ); ?>
				</div>
				<?php endif; ?>
			</div>
		</nav>
	<?php }
	}
	elseif ($post_pagination_type == 'post_pagination_none') {
	 	echo '';
	} ?>

	<?php if($post_pagination_type == 'post_pagination_infinite') {
	if($use_shadow_pagination != 'on') { ?>
	<div class="navigation-paging infinite-wrap no-shadow <?php echo esc_attr($load_style); ?> clearfix">
	<?php }
	else { ?>
	<div class="navigation-paging infinite-wrap <?php echo esc_attr($load_style); ?> clearfix">
	<?php } ?>
		<div id="load-more-post-masonry-1-<?php echo esc_attr( $loop_infinite_class ); ?>" class="infinite-button"><?php next_posts_link( '', $post_masonry1_loop->max_num_pages ); ?></div>
		<button id="load-infinite-man1" class="btn"><?php echo sanitize_text_field( $loop_infinite_text ); ?></button>
	</div>
	<?php } wp_reset_postdata(); ?>
</div>

<?php if($post_pagination_type == 'post_pagination_infinite') {
	if(!empty($loop_infinite_load_img['url'])) {
		$loader_img = esc_url( $loop_infinite_load_img['url'] );
	}
	else {
		$loader_img = get_template_directory_uri() . '/img/loader.gif';
	}
} ?>
<script type="text/javascript">
(function($) {
	'use strict';

	$(document).ready(function(){

		var $grid = jQuery('#grid').imagesLoaded( function() {
			// init Masonry after all images have loaded
			$grid.masonry({
				initLayout: true,
				columnWidth: '.blog-item',
				itemSelector: '.blog-item',
			});
		});

		new AnimOnScroll( document.getElementById( 'grid' ), {
			minDuration : 0.4,
			maxDuration : 0.7,
			viewportFactor : 0.2
		} );


		<?php if($post_pagination_type == 'post_pagination_infinite') { ?>
		var $container = $('.masonry-wrap-<?php echo esc_attr($loop_infinite_class); ?>');

		// Infinite Scroll
		$container.infinitescroll({
		loading: {
		finishedMsg: "There is no more",
		img: "<?php echo $loader_img; ?>",
		msgText: 'loading',
		speed: 'normal'
			},

		state: {
		isDone: false
		},
			navSelector  : '#load-more-post-masonry-1-<?php echo esc_attr( $loop_infinite_class ); ?>', 
			nextSelector : '#load-more-post-masonry-1-<?php echo esc_attr( $loop_infinite_class ); ?> a', 
			itemSelector : '.masonry-wrap-<?php echo esc_attr($loop_infinite_class); ?> .blog-item',

		},
		function( manpost1Block ) {
			var $newElems = $( manpost1Block ).css({ opacity: 0 });
				$newElems.imagesLoaded(function(){
					$newElems.animate({ opacity: 1 });
					$container.masonry( 'appended', $newElems, true );
				});
			$('.post-masonry-style .grid').css('margin-bottom', 0);
		});

		$container.infinitescroll('unbind');
		  $("#load-infinite-man1").click(function(){
			$container.infinitescroll('retrieve');
			$('.post-masonry-style .grid').css('margin-bottom', 120);

			$(window).resize(function() {
				$container.masonry('layout');
			});
			return false;
		});
		<?php } //if its masonry load more active ?>

	});
})( jQuery );
</script>