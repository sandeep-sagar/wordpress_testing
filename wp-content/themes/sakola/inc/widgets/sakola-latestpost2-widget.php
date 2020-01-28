<?php
class sakola_recentpost_Widget extends WP_Widget {
	
	function __construct()
	{
		$widget_ops = array('classname' => 'widget_sakola_latest_news', 'description' => '');

		$control_ops = array('id_base' => 'sakola_recentpost-widget');

		parent::__construct('sakola_recentpost-widget', 'Sakola Latest News', $widget_ops, $control_ops);
	}

	public function sakola_recentpost_Widget()
    {
        self::__construct();
    }
	
	function widget($args, $instance)
	{
		extract($args, EXTR_SKIP);
		$title = apply_filters('widget_title', $instance['title']);

		echo htmlspecialchars_decode( esc_html(  $before_widget ));

		if($title) {
			echo htmlspecialchars_decode( esc_html(  $before_title )) . sanitize_text_field( $title ) . htmlspecialchars_decode( esc_html(  $after_title ));
		} ?>

			<div class="latest-post-widget clearfix">
				<div class="latest-post-wrap">
					<?php
						$latest_post2_wid = array(
							'post_type'         => 'post',
							'posts_per_page'	=> $instance['amount'],
							'ignore_sticky_posts' => 1,
							'order'	=> 'DESC',
						);
						
						$latest_post_wid = new WP_Query($latest_post2_wid); 
						if ($latest_post_wid->have_posts()) : while($latest_post_wid->have_posts()) : $latest_post_wid->the_post();
						$img_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); 
					?>
					
						<!-- widget-news -->
						<div class="post-item clearfix">
							<div class="post-content">
								<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php the_time( get_option( 'date_format' ) ); ?></h5>
							</div>
						</div>
						<!-- widget-news end -->

					<?php 
						endwhile; wp_reset_postdata(); endif;
					?>
				</div>
			</div>

			<?php wp_reset_query(); ?>
		
		<?php echo htmlspecialchars_decode( esc_html(  $after_widget ));
	}
	
	function update($new_instance, $old_instance)
	{
		$instance = $old_instance;

		$instance['title'] = strip_tags($new_instance['title']);
		if( is_numeric($new_instance['amount']) ){
			$instance['amount'] = $new_instance['amount'];
		} else {
			$new_instance['amount'] = '3';
		}

		return $instance;
	}

	function form($instance)
	{
		$instance = wp_parse_args( (array) $instance, array( 'title' => 'Sakola News', 'amount' => '3', 'sort_type' => 'post_views_count' ) );
		$title      = !empty($instance['title']) ? $instance['title'] : 'Sakola News';
		$amount      = !empty($instance['amount']) ? $instance['amount'] : '3';?>
		
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('title') ); ?>"><?php esc_html_e( 'Title', 'sakola' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo esc_attr( $this->get_field_id('title') ); ?>" name="<?php echo esc_attr( $this->get_field_name('title') ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id('amount') ); ?>"><?php esc_html_e( 'Amount of Posts', 'sakola' ); ?>:</label>
			<input class="widefat" style="width: 216px;" id="<?php echo esc_attr( $this->get_field_id('amount') ); ?>" name="<?php echo esc_attr( $this->get_field_name('amount') ); ?>" value="<?php echo esc_attr( $instance['amount'] ); ?>" />
		</p>
	<?php
	}
}

add_action( 'widgets_init', create_function('', 'return register_widget("sakola_recentpost_Widget");') );