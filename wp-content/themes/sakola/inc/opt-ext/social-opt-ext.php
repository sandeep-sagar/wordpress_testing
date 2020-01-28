<?php

function sakola_social_link_ext_opt() {

	$sakola_social_link_opt = array(

		array(
			'id'=>'facebook_profile',
			'type' => 'text',
			'title' => esc_html__('Facebook Profile', 'sakola'),
			'validate' => 'url',
			'default' => 'http://facebook.com/#'
			),

		array(
			'id'=>'twitter_profile',
			'type' => 'text',
			'title' => esc_html__('twitter Profile', 'sakola'),
			'validate' => 'url',
			'default' => 'http://twitter.com/#'
			),


		array(
			'id'=>'google_profile',
			'type' => 'text',
			'title' => esc_html__('Google+ Profile', 'sakola'),
			'validate' => 'url',
			'default' => 'http://google.com/#'
			),


		array(
			'id'=>'linkedin_profile',
			'type' => 'text',
			'title' => esc_html__('linkedin Profile', 'sakola'),
			'validate' => 'url',
			'default' => 'http://linkedin.com/#'
			),


		array(
			'id'=>'pinterest_profile',
			'type' => 'text',
			'title' => esc_html__('Pinterest Profile', 'sakola'),
			'validate' => 'url',
			'default' => 'http://pinterest.com/#'
			),

		array(
			'id'=>'dribble_profile',
			'type' => 'text',
			'title' => esc_html__('Dribble Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'flickr_profile',
			'type' => 'text',
			'title' => esc_html__('Flickr Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'behance_profile',
			'type' => 'text',
			'title' => esc_html__('Behance Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'youtube_profile',
			'type' => 'text',
			'title' => esc_html__('Youtube Profile', 'sakola'),
			'validate' => 'url',
			'default' => 'https://www.youtube.com/'
			),

		array(
			'id'=>'soundcloud_profile',
			'type' => 'text',
			'title' => esc_html__('Soundcloud Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'codepen_profile',
			'type' => 'text',
			'title' => esc_html__('Codepen Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'deviantart_profile',
			'type' => 'text',
			'title' => esc_html__('Deviantart Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'digg_profile',
			'type' => 'text',
			'title' => esc_html__('Digg Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'dropbox_profile',
			'type' => 'text',
			'title' => esc_html__('Dropbox Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'github_profile',
			'type' => 'text',
			'title' => esc_html__('Github Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'instagram_profile',
			'type' => 'text',
			'title' => esc_html__('Instagram Profile', 'sakola'),
			'validate' => 'url',
			'default' => 'https://instagram.com/'
			),

		array(
			'id'=>'skype_profile',
			'type' => 'text',
			'title' => esc_html__('Skype Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'spotify_profile',
			'type' => 'text',
			'title' => esc_html__('Spotify Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'steam_profile',
			'type' => 'text',
			'title' => esc_html__('Steam Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'trello_profile',
			'type' => 'text',
			'title' => esc_html__('Trello Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'tumblr_profile',
			'type' => 'text',
			'title' => esc_html__('Tumblr Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'vimeo_profile',
			'type' => 'text',
			'title' => esc_html__('Vimeo Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'wechat_profile',
			'type' => 'text',
			'title' => esc_html__('Wechat Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'weibo_profile',
			'type' => 'text',
			'title' => esc_html__('Weibo Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'wordpress_profile',
			'type' => 'text',
			'title' => esc_html__('WordPress Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'xing_profile',
			'type' => 'text',
			'title' => esc_html__('Xing Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'yahoo_profile',
			'type' => 'text',
			'title' => esc_html__('Yahoo Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),

		array(
			'id'=>'yelp_profile',
			'type' => 'text',
			'title' => esc_html__('Yelp Profile', 'sakola'),
			'validate' => 'url',
			'default' => ''
			),
		/* end of single post padding */
	);

	return $sakola_social_link_opt;
}