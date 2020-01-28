<?php 

function sakola_social_profile() {

	$options = get_option('sakola_framework');
	$twitter = $options['twitter_profile'];
	$facebook = $options['facebook_profile'];
	$linkedin = $options['linkedin_profile'];
	$google = $options['google_profile'];
	$pinterest = $options['pinterest_profile'];
	$dribble = $options['dribble_profile'];
	$flickr = $options['flickr_profile'];
	$behance = $options['behance_profile'];
	$youtube = $options['youtube_profile'];
	$soundcloud = $options['soundcloud_profile'];
	$codepen = $options['codepen_profile'];
	$deviantart = $options['deviantart_profile'];
	$digg = $options['digg_profile'];
	$dropbox = $options['dropbox_profile'];
	$github = $options['github_profile'];
	$instagram = $options['instagram_profile'];
	$skype = $options['skype_profile'];
	$spotify = $options['spotify_profile'];
	$steam = $options['steam_profile'];
	$trello = $options['trello_profile'];
	$tumblr = $options['tumblr_profile'];
	$vimeo = $options['vimeo_profile'];
	$wechat = $options['wechat_profile'];
	$weibo = $options['weibo_profile'];
	$wordpress = $options['wordpress_profile'];
	$xing = $options['xing_profile'];
	$yahoo = $options['yahoo_profile'];
	$yelp = $options['yelp_profile'];

	if (!empty($twitter)) { ?>
		<li class="twitter soc-icon"><a target="_blank" href="<?php echo esc_url( $twitter ); ?>" title="<?php esc_html_e( 'Twitter', 'sakola' ); ?>" class="icon icon-themify-13"></a></li>
	<?php 
	} 

	if (!empty($facebook)) { ?>
		<li class="facebook soc-icon"><a target="_blank" href="<?php echo esc_url( $facebook ); ?>" title="<?php esc_html_e( 'Facebook', 'sakola' ); ?>" class="icon icon-themify-17"></a></li>
	<?php 
	} 

	if (!empty($linkedin)) { ?>
		<li class="linkedin soc-icon"><a target="_blank" href="<?php echo esc_url( $linkedin ); ?>" title="<?php esc_html_e( 'Linkedin', 'sakola' ); ?>" class="icon icon-themify-8"></a></li>
	<?php 
	} 

	if (!empty($google)) { ?>
		<li class="google soc-icon"><a target="_blank" href="<?php echo esc_url( $google ); ?>" title="<?php esc_html_e( 'Google', 'sakola' ); ?>" class="icon icon-themify-11"></a></li>
	<?php 
	} 

	if (!empty($pinterest)) { ?>
		<li class="pinterest soc-icon"><a target="_blank" href="<?php echo esc_url( $pinterest ); ?>" title="<?php esc_html_e( 'Pinterest', 'sakola' ); ?>" class="icon icon-themify-9"></a></li>
	<?php 
	} 

	if (!empty($dribble)) { ?>
		<li class="dribble soc-icon"><a target="_blank" href="<?php echo esc_url( $dribble ); ?>" title="<?php esc_html_e( 'Dribbble', 'sakola' ); ?>" class="icon icon-social-dribbble"></a></li>
	<?php 
	}

	if (!empty($flickr)) { ?>
		<li class="flickr soc-icon"><a target="_blank" href="<?php echo esc_url( $flickr ); ?>" title="<?php esc_html_e( 'Flickr', 'sakola' ); ?>" class="icon icon-themify-16"></a></li>
	<?php 
	}

	if (!empty($behance)) { ?>
		<li class="behance soc-icon"><a target="_blank" href="<?php echo esc_url( $behance ); ?>" title="<?php esc_html_e( 'Behance', 'sakola' ); ?>" class="icon icon-behance-2"></a></li>
	<?php 
	}

	if (!empty($youtube)) { ?>
		<li class="youtube soc-icon"><a target="_blank" href="<?php echo esc_url( $youtube ); ?>" title="<?php esc_html_e( 'Youtube', 'sakola' ); ?>" class="icon icon-themify-7"></a></li>
	<?php 
	}

	if (!empty($soundcloud)) { ?>
		<li class="soundcloud soc-icon"><a target="_blank" href="<?php echo esc_url( $soundcloud ); ?>" title="<?php esc_html_e( 'Soundcloud', 'sakola' ); ?>" class="icon icon-themify-19"></a></li>
	<?php 
	}

	if (!empty($codepen)) { ?>
		<li class="codepen soc-icon"><a target="_blank" href="<?php echo esc_url( $codepen ); ?>" title="<?php esc_html_e( 'Codepen', 'sakola' ); ?>" class="icon icon-social-codepen"></a></li>
	<?php 
	}

	if (!empty($deviantart)) { ?>
		<li class="deviantart soc-icon"><a target="_blank" href="<?php echo esc_url( $deviantart ); ?>" title="<?php esc_html_e( 'Deviantart', 'sakola' ); ?>" class="icon icon-deviantart"></a></li>
	<?php 
	}

	if (!empty($digg)) { ?>
		<li class="digg soc-icon"><a target="_blank" href="<?php echo esc_url( $digg ); ?>" title="<?php esc_html_e( 'Digg', 'sakola' ); ?>" class="icon icon-digg"></a></li>
	<?php 
	}

	if (!empty($dropbox)) { ?>
		<li class="dropbox soc-icon"><a target="_blank" href="<?php echo esc_url( $dropbox ); ?>" title="<?php esc_html_e( 'Dropbox', 'sakola' ); ?>" class="icon icon-themify-23"></a></li>
	<?php 
	}

	if (!empty($github)) { ?>
		<li class="github soc-icon"><a target="_blank" href="<?php echo esc_url( $github ); ?>" title="<?php esc_html_e( 'Github', 'sakola' ); ?>" class="icon icon-social-github"></a></li>
	<?php 
	}

	if (!empty($instagram)) { ?>
		<li class="instagram soc-icon"><a target="_blank" href="<?php echo esc_url( $instagram ); ?>" title="<?php esc_html_e( 'Instagram', 'sakola' ); ?>" class="icon icon-social-instagram-outline"></a></li>
	<?php 
	}

	if (!empty($skype)) { ?>
		<li class="skype soc-icon"><a target="_blank" href="<?php echo esc_url( $skype ); ?>" title="<?php esc_html_e( 'Skype', 'sakola' ); ?>" class="icon icon-skype"></a></li>
	<?php 
	}

	if (!empty($spotify)) { ?>
		<li class="spotify soc-icon"><a target="_blank" href="<?php echo esc_url( $spotify ); ?>" title="<?php esc_html_e( 'Spotify', 'sakola' ); ?>" class="icon icon-spotify"></a></li>
	<?php 
	}

	if (!empty($steam)) { ?>
		<li class="steam soc-icon"><a target="_blank" href="<?php echo esc_url( $steam ); ?>" title="<?php esc_html_e( 'Steam', 'sakola' ); ?>" class="icon icon-steam-square"></a></li>
	<?php 
	}

	if (!empty($trello)) { ?>
		<li class="trello soc-icon"><a target="_blank" href="<?php echo esc_url( $trello ); ?>" title="<?php esc_html_e( 'Trello', 'sakola' ); ?>" class="icon icon-trello"></a></li>
	<?php 
	}

	if (!empty($tumblr)) { ?>
		<li class="tumblr soc-icon"><a target="_blank" href="<?php echo esc_url( $tumblr ); ?>" title="<?php esc_html_e( 'Tumblr', 'sakola' ); ?>" class="icon icon-themify-10"></a></li>
	<?php 
	}

	if (!empty($vimeo)) { ?>
		<li class="vimeo soc-icon"><a target="_blank" href="<?php echo esc_url( $vimeo ); ?>" title="<?php esc_html_e( 'Vimeo', 'sakola' ); ?>" class="fa fa-vimeo-square"></a></li>
	<?php 
	}

	if (!empty($wechat)) { ?>
		<li class="wechat soc-icon"><a target="_blank" href="<?php echo esc_url( $wechat ); ?>" title="<?php esc_html_e( 'Wechat', 'sakola' ); ?>" class="icon icon-weixin"></a></li>
	<?php 
	}

	if (!empty($weibo)) { ?>
		<li class="weibo soc-icon"><a target="_blank" href="<?php echo esc_url( $weibo ); ?>" title="<?php esc_html_e( 'Weibo', 'sakola' ); ?>" class="icon icon-weibo"></a></li>
	<?php 
	}

	if (!empty($wordpress)) { ?>
		<li class="wordpress soc-icon"><a target="_blank" href="<?php echo esc_url( $wordpress ); ?>" title="<?php esc_html_e( 'WordPress', 'sakola' ); ?>" class="icon icon-themify-10"></a></li>
	<?php 
	}

	if (!empty($xing)) { ?>
		<li class="xing soc-icon"><a target="_blank" href="<?php echo esc_url( $xing ); ?>" title="<?php esc_html_e( 'Xing', 'sakola' ); ?>" class="icon icon-xing"></a></li>
	<?php 
	}

	if (!empty($yahoo)) { ?>
		<li class="yahoo soc-icon"><a target="_blank" href="<?php echo esc_url( $yahoo ); ?>" title="<?php esc_html_e( 'Yahoo', 'sakola' ); ?>" class="icon icon-yahoo"></a></li>
	<?php 
	}

	if (!empty($yelp)) { ?>
		<li class="yelp soc-icon"><a target="_blank" href="<?php echo esc_url( $yelp ); ?>" title="<?php esc_html_e( 'Yelp', 'sakola' ); ?>" class="icon icon-yelp"></a></li>
	<?php 
	} 
}

//EXCERPT

function sakola_excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	} 
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}
 
function sakola_content($limit) {
	$content = explode(' ', get_the_content(), $limit);
	if (count($content)>=$limit) {
		array_pop($content);
		$content = implode(" ",$content).'...';
	} else {
		$content = implode(" ",$content);
	} 
	$content = preg_replace('/\[.+\]/','', $content);
	$content = apply_filters('the_content', $content); 
	$content = str_replace(']]>', ']]&gt;', $content);
	return $content;
}


function sakola_custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'sakola_custom_excerpt_length', 999 );

function sakola_new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'sakola_new_excerpt_more');


/* ======== porfo get avatar ======= */
function sakola_get_author_50() {
	echo get_avatar( get_the_author_meta('ID'), '60' );
}

function sakola_get_author_30() {
	echo get_avatar( get_the_author_meta('ID'), '30' );
}

/*=========*   HEADER TYPE   *=========*/

function sakola_header_choice() {

if ( class_exists( 'Redux' ) ) {
	$options = get_option('sakola_framework');
	$sakola_header_type = $options['header_type'];

	if( $sakola_header_type == 'default' ) {
		get_header();
	}
	elseif( $sakola_header_type == 'style-2' ) {
		get_header('2');
	}
}
else {
	get_header();
}

}


/*=========*   FOOTER TYPE   *=========*/
function sakola_footer_choice() {

if ( class_exists( 'Redux' ) ) {
	$options = get_option('sakola_framework');
	$sakola_footer_type = $options['footer_type'];

	if( $sakola_footer_type == 'default' ) {

		get_footer();
	}
	elseif( $sakola_footer_type == 'no-footer' ) {

		get_footer('no-footer');
	}
}
else {
	get_footer();
}

}


/*=========*   HEADER TOP CONDITIONAL   *=========*/
function sakola_top_menu_condition() {

	if ( class_exists( 'Redux' ) ) {
	$options = get_option('sakola_framework');
	$header_top_opt = $options['header_top_opt'];

	$header_top_layout				= $options['header_top_layout'];

	$header_top_first_display		= $options['header_top_first_display'];
	$header_top_second_display		= $options['header_top_second_display'];
	$header_top_third_display		= $options['header_top_third_display'];

	$header_top_first_align			= $options['header_top_first_align'];
	$header_top_second_align		= $options['header_top_second_align'];
	$header_top_third_align			= $options['header_top_third_align'];

		if( $header_top_opt == true ) { ?>
		<!-- Top Bar
		============================================= -->
		<div class="top-bar clearfix">
			<div class="container clearfix">
			
				<div class="row">
				<?php switch ($header_top_layout) { 

					case '1column-header' : ?>
					<div class="top-bar-col column column-1 item-col-1 <?php echo esc_attr($header_top_first_display).' '.esc_attr($header_top_first_align); ?> clearfix">
						<?php sakola_header_part('header/header-top-customize-left' ); ?>
					</div>
					<?php break;

					case '2column-header' : ?>
					<div class="top-bar-col column column-2 item-col-1 <?php echo esc_attr($header_top_first_display).' '.esc_attr($header_top_first_align); ?> clearfix">
						<?php sakola_header_part('header/header-top-customize-left' ); ?>
					</div>
					<div class="top-bar-col column column-2 item-col-2 <?php echo esc_attr($header_top_second_display).' '.esc_attr($header_top_second_align); ?> clearfix">
						<?php sakola_header_part('header/header-top-customize-center' ); ?>
					</div>
					<?php break;

					case '3column-header' : ?>
					<div class="top-bar-col column column-3 item-col-1 <?php echo esc_attr($header_top_first_display).' '.esc_attr($header_top_first_align); ?> clearfix">
						<?php sakola_header_part('header/header-top-customize-left' ); ?>
					</div>
					<div class="top-bar-col column column-3 item-col-2 <?php echo esc_attr($header_top_second_display).' '.esc_attr($header_top_second_align); ?> clearfix">
						<?php sakola_header_part('header/header-top-customize-center' ); ?>
					</div>
					<div class="top-bar-col column column-3 item-col-3 <?php echo esc_attr($header_top_customize_third).' '.esc_attr($header_top_third_align); ?> clearfix">
						<?php sakola_header_part('header/header-top-customize-right' ); ?>
					</div>
					<?php break;

				} ?>
				</div>

			</div>
		</div><!-- #top-bar end -->
		<?php }
		else {
			echo '';
		}
	}
	else {
		echo '';
	}
}


function wp_get_attachment( $attachment_id ) {

    $attachment = get_post( $attachment_id );
    return array(
        'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink( $attachment->ID ),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}