/*
*
*	Live Customiser Script
*	------------------------------------------------
	*	Themes Awesome Framework
	* 	Copyright Sakola 2017 - http://www.themesawesome.com
*
*/
( function( $ ){



	/* ======================== HEADER SECTION ======================== */
			
	// HEADER DEFAULT STYLING

	wp.customize('menu_header',function( value ) {
		value.bind(function(to) {
			$('.header-style-1-wrap .main-menu ul.sm-clean>li>a, .header-style-1-wrap .main-menu ul.sm-clean>li>a:active, .header-style-1-wrap .search-wrap #btn-search i, .header-style-1-wrap .main-menu ul.sm-clean>li.current-menu-item>a, .header-style-1-wrap .main-menu ul.sm-clean>li>a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('menu_header',function( value ) {
		value.bind(function(to) {
			$('.sm-clean a span.sub-arrow').css('border-top-color', to ? to : '' );
		});
	});

	wp.customize('menu_hover_header',function( value ) {
		value.bind(function(to) {
			$('.header-style-1-wrap .main-menu ul.sm-clean>li>a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('menu_border',function( value ) {
		value.bind(function(to) {
			$('.header-style-1-wrap .main-menu ul.sm-clean>li>a::before, .header-style-1-wrap .main-menu ul.sm-clean>li.current-menu-item>a::before').css('background-color', to ? to : '' );
		});
	});

	wp.customize('sub_bg',function( value ) {
		value.bind(function(to) {
			$('.header-style-1-wrap ul.sm-clean ul').css('background-color', to ? to : '' );
		});
	});

	wp.customize('sub_menu',function( value ) {
		value.bind(function(to) {
			$('.header-style-1-wrap ul.sm-clean ul li a').css('color', to ? to : '' );
		});
	});

	wp.customize('search_close',function( value ) {
		value.bind(function(to) {
			$('.header-style-1 .btn--search-close').css('color', to ? to : '' );
		});
	});

	wp.customize('search_bar_title',function( value ) {
		value.bind(function(to) {
			$('.header-style-1 .search__info').css('color', to ? to : '' );
		});
	});

	wp.customize('search_sugges',function( value ) {
		value.bind(function(to) {
			$('.header-style-1 .search__suggestion h4').css('color', to ? to : '' );
			$('.header-style-1 .search__suggestion h4::before').css('background-color', to ? to : '' );
		});
	});

	wp.customize('search_desc_sugges',function( value ) {
		value.bind(function(to) {
			$('.header-style-1 .search__suggestion p').css('color', to ? to : '' );
		});
	});

	wp.customize('search_bord',function( value ) {
		value.bind(function(to) {
			$('.header-style-1 .search__input').css('color', to ? to : '' );
		});
	});


	// HEADER ALTERNATIVE STYLING

	wp.customize('alt_menu_hover',function( value ) {
		value.bind(function(to) {
			$('body .alt-head .main-menu ul.sm-clean>li>a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('alt_menu_border',function( value ) {
		value.bind(function(to) {
			$('body .alt-head .main-menu ul.sm-clean>li>a::before, body .alt-head .main-menu ul.sm-clean>li.current-menu-item>a::before').css('background-color', to ? to : '' );
		});
	});


	// HEADER STYLE 2

	wp.customize('bg_header',function( value ) {
		value.bind(function(to) {
			$('.header-style-2-wrap header, .header-style-3-wrap header').css('background-color', to ? to : '' );
		});
	});

	wp.customize('bg_header_dalem',function( value ) {
		value.bind(function(to) {
			$('.cd-nav .cd-half-block').css('background-color', to ? to : '' );
		});
	});

	wp.customize('border_header_dalem',function( value ) {
		value.bind(function(to) {
			$('.cd-half-block .inner').css('border-right-color', to ? to : '' );
		});
	});

	wp.customize('burger_menu',function( value ) {
		value.bind(function(to) {
			$('.cd-nav-trigger .cd-nav-icon, .cd-nav-trigger .cd-nav-icon::before, .cd-nav-trigger .cd-nav-icon:after').css('background-color', to ? to : '' );
			$('#btn-search').css('color', to ? to : '' );
		});
	});

	wp.customize('menu_style_two',function( value ) {
		value.bind(function(to) {
			$('ul.sm-clean li a').css('color', to ? to : '' );
		});
	});

	wp.customize('menu_active_two',function( value ) {
		value.bind(function(to) {
			$('.sm-clean a:hover, .sm-clean a:focus, .sm-clean a:active, .sm-clean a.highlighted').css('color', to ? to : '' );
		});
	});

	wp.customize('info_web_title',function( value ) {
		value.bind(function(to) {
			$('.cd-half-block.contact-info .inner h1').css('color', to ? to : '' );
		});
	});

	wp.customize('info_web_desc',function( value ) {
		value.bind(function(to) {
			$('.header-info-text').css('color', to ? to : '' );
		});
	});

	wp.customize('search_title',function( value ) {
		value.bind(function(to) {
			$('.header-style-2 .search__info, .header-style-3 .search__info').css('color', to ? to : '' );
		});
	});

	wp.customize('sugges_search',function( value ) {
		value.bind(function(to) {
			$('.header-style-2 .search__suggestion h4, .header-style-3 .search__suggestion h4').css('color', to ? to : '' );
			$('.header-style-2 .search__suggestion h4::before, .header-style-3 .search__suggestion h4::before').css('background-color', to ? to : '' );
		});
	});

	wp.customize('sugges_desc_search',function( value ) {
		value.bind(function(to) {
			$('.header-style-2 .search__suggestion p, .header-style-3 .search__suggestion p').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_close',function( value ) {
		value.bind(function(to) {
			$('.header-style-2 .btn--search-close, .header-style-3 .btn--search-close').css('color', to ? to : '' );
		});
	});

	wp.customize('bg_search',function( value ) {
		value.bind(function(to) {
			$('.js .header-style-2 .search, .js .header-style-3 .search').css('background-color', to ? to : '' );
		});
	});

	wp.customize('border_search',function( value ) {
		value.bind(function(to) {
			$('.header-style-3 .search__input, .header-style-2 .search__input').css('color', to ? to : '' );
		});
	});




	/* ======================== CONTENT SECTION ======================== */

	// BLOG

	wp.customize('post_meta',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 .post-content-style-2, .blog-item .meta-wrapper .author a, .author-separator, .blog-item .meta-wrapper .date a, .date span, .blog-item .meta-wrapper .standard-post-categories a, .social-share-wrapper span').css('color', to ? to : '' );
		});
	});

	wp.customize('post_meta_hover',function( value ) {
		value.bind(function(to) {
			$('.blog-item .meta-wrapper .author a:hover, .blog-item .meta-wrapper .date a:hover, .blog-item .meta-wrapper .date span:hover, .blog-item .meta-wrapper .standard-post-categories a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('post_meta_border',function( value ) {
		value.bind(function(to) {
			$('.blog-item .meta-wrapper span.date:before, .blog-item .meta-wrapper span.standard-post-categories:before, .social-share-wrapper span:after').css('color', to ? to : '' );
		});
	});

	wp.customize('post_title',function( value ) {
		value.bind(function(to) {
			$('.post-content h2.post-title a, .post-content h1.post-title a').css('color', to ? to : '' );
		});
	});

	wp.customize('post_hover_title',function( value ) {
		value.bind(function(to) {
			$('.post-content h2.post-title a:hover, .post-content h1.post-title a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('post_desc',function( value ) {
		value.bind(function(to) {
			$('.post-content .post-text p, .comment-content p').css('color', to ? to : '' );
		});
	});

	wp.customize('read_more',function( value ) {
		value.bind(function(to) {
			$('.post-content a.read-more').css('color', to ? to : '' );
		});
	});

	wp.customize('read_hover_more',function( value ) {
		value.bind(function(to) {
			$('.post-content a.read-more:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('social_post',function( value ) {
		value.bind(function(to) {
			$('.share-section .social-share-wrapper .share-item a').css('color', to ? to : '' );
		});
	});

	wp.customize('social_hover_post',function( value ) {
		value.bind(function(to) {
			$('.share-section .social-share-wrapper .share-item a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('quote_border',function( value ) {
		value.bind(function(to) {
			$('blockquote').css('border-left-color', to ? to : '' );
		});
	});

	wp.customize('tag_icon',function( value ) {
		value.bind(function(to) {
			$('.tag-wrapper span').css('color', to ? to : '' );
		});
	});

	wp.customize('tag_text',function( value ) {
		value.bind(function(to) {
			$('.tag-wrapper a').css('color', to ? to : '' );
		});
	});

	wp.customize('tag_hover',function( value ) {
		value.bind(function(to) {
			$('.tag-wrapper a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('prev_bord',function( value ) {
		value.bind(function(to) {
			$('.blog-single .next-prev-post').css('border-top-color', to ? to : '' );
			$('.blog-single .next-prev-post, .comment-list, .magazine-1-post-style .post-content').css('border-bottom-color', to ? to : '' );
		});
	});

	wp.customize('prev_text',function( value ) {
		value.bind(function(to) {
			$('.next-prev-post .prev-post p, .next-prev-post .next-post p, .post-navigation .btn').css('color', to ? to : '' );
		});
	});

	wp.customize('prev_link',function( value ) {
		value.bind(function(to) {
			$('.next-prev-post h4.title a, .comments-title .leave-reply-link a').css('color', to ? to : '' );
		});
	});

	wp.customize('prev_hover_link',function( value ) {
		value.bind(function(to) {
			$('.next-prev-post h4.title a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('comment_title',function( value ) {
		value.bind(function(to) {
			$('.comment-respond h3.comment-reply-title, .comments-title h3').css('color', to ? to : '' );
		});
	});

	wp.customize('comment_link',function( value ) {
		value.bind(function(to) {
			$('.comment-respond form p.logged-in-as a, .comment-respond form p.logged-in-as, .comment-action a').css('color', to ? to : '' );
		});
	});

	wp.customize('comment_hover_link',function( value ) {
		value.bind(function(to) {
			$('.comment-respond form p.logged-in-as a:hover, .comment-action a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_comment_bg',function( value ) {
		value.bind(function(to) {
			$('.comment-respond form p.form-submit input').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_comment_text',function( value ) {
		value.bind(function(to) {
			$('.comment-respond form p.form-submit input').css('color', to ? to : '' );
		});
	});

	wp.customize('next_archive',function( value ) {
		value.bind(function(to) {
			$('.archive .post-navigation .btn, .search-page .post-navigation .btn').css('color', to ? to : '' );
		});
	});


	// BLOG STYLE 2

	wp.customize('title_black',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 article.blog-item .post-content-style-2 h2.post-title a').css('color', to ? to : '' );
		});
	});

	wp.customize('title_active',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 article.blog-item:hover .post-content-style-2 h2.post-title a').css('color', to ? to : '' );
		});
	});

	wp.customize('blog_meta',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 .post-content-style-2, .blog-item .meta-wrapper .author a, .author-separator, .blog-item .meta-wrapper .date a, .date span, .blog-item .meta-wrapper .standard-post-categories a, .social-share-wrapper span').css('color', to ? to : '' );
		});
	});

	wp.customize('border_meta',function( value ) {
		value.bind(function(to) {
			$('.blog-item .meta-wrapper span.date:before, .blog-item .meta-wrapper span.standard-post-categories:before, .social-share-wrapper span:after').css('color', to ? to : '' );
		});
	});

	wp.customize('hover_meta',function( value ) {
		value.bind(function(to) {
			$('.blog-item .meta-wrapper .author a:hover, .blog-item .meta-wrapper .date a:hover, .blog-item .meta-wrapper .date span:hover, .blog-item .meta-wrapper .standard-post-categories a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('hover_active',function( value ) {
		value.bind(function(to) {
			$('.blog-style-2 article.blog-item:hover span, .blog-style-2 article.blog-item:hover .meta-wrapper span.author a, .blog-style-2 article.blog-item:hover .meta-wrapper span.date a, .blog-style-2 article.blog-item:hover .meta-wrapper span.standard-post-categories a').css('color', to ? to : '' );
			$('.blog-style-2 article.blog-item:hover .meta-wrapper span.date::before, .blog-style-2 article.blog-item:hover .meta-wrapper span.standard-post-categories::before').css('background-color', to ? to : '' );
		});
	});


	// SINGLE POST STYLE 2

	wp.customize('title_post',function( value ) {
		value.bind(function(to) {
			$('.magazine-2-post-style .single-post-style-2-inner-content h1.post-title a').css('color', to ? to : '' );
		});
	});

	wp.customize('title_post_hover',function( value ) {
		value.bind(function(to) {
			$('.magazine-2-post-style .single-post-style-2-inner-content h1.post-title a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('category_text',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .standard-post-categories .post-categories a').css('color', to ? to : '' );
		});
	});

	wp.customize('category_text_hover',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .standard-post-categories .post-categories a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('category_bg',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .standard-post-categories .post-categories a').css('background-color', to ? to : '' );
		});
	});

	wp.customize('category_bg_hover',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .standard-post-categories .post-categories a:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('meta_post',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .post-meta span.author-separator, .blog-single .magazine-post-style p.date, .blog-single .magazine-post-style span.eta:before, .comment-author time').css('color', to ? to : '' );
		});
	});

	wp.customize('meta_post_style3',function( value ) {
		value.bind(function(to) {
			$('.single-post-style-3-inner-content .post-meta span.author-separator, .single-post-style-3-inner-content .post-meta a span.vcard, .blog-single .single-post-style-3-inner-content p.date, .blog-single .single-post-style-3-inner-content .post-meta i:before, .single-post-style-3-inner-content .love-it-wrapper a:before, .blog-single .single-post-style-3-inner-content .post-meta span.right-section span, .single-post-style-3-inner-content .post-meta span.eta:before').css('color', to ? to : '' );
		});
	});

	wp.customize('author_text',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .post-meta span.vcard, .comment-author cite').css('color', to ? to : '' );
		});
	});

	wp.customize('author_hover',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .post-meta span.vcard:hover, .magazine-post-style .post-meta a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('icon_comment',function( value ) {
		value.bind(function(to) {
			$('.blog-single .magazine-post-style .post-meta i').css('color', to ? to : '' );
		});
	});

	wp.customize('span_text',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .post-meta a, .love-count').css('color', to ? to : '' );
		});
	});

	wp.customize('icon_arrow',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .next-prev-post .column p i').css('color', to ? to : '' );
		});
	});

	wp.customize('icon_share',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .share-section .social-share-wrapper .share-item a').css('color', to ? to : '' );
		});
	});

	wp.customize('icon_share_hover',function( value ) {
		value.bind(function(to) {
			$('.magazine-post-style .share-section .social-share-wrapper .share-item a:hover').css('color', to ? to : '' );
		});
	});


	// SIDEBAR & WIDGET

	wp.customize('sidebar_search_bg',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget.widget_search input').css('background-color', to ? to : '' );
		});
	});

	wp.customize('sidebar_search_btn',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget.widget_search button').css('background-color', to ? to : '' );
		});
	});

	wp.customize('sidebar_search_icon',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget.widget_search button i').css('color', to ? to : '' );
		});
	});

	wp.customize('sidebar_bg',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget').css('background-color', to ? to : '' );
		});
	});

	wp.customize('sakola_widget_title',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget h4.widget-title').css('color', to ? to : '' );
		});
	});

	wp.customize('link_text_sidebar',function( value ) {
		value.bind(function(to) {
			$('.sidebar #recent-posts-2 ul li a, .sidebar .widget .recent-news .post-content h5 a, .sidebar #recent-comments-2 ul li a, li.recentcomments, .sidebar #archives-2 ul li a, .sidebar #categories-2 ul li a, .sidebar #meta-2 ul li a').css('color', to ? to : '' );
		});
	});

	wp.customize('link_hover_sidebar',function( value ) {
		value.bind(function(to) {
			$('.sidebar .widget .widget_recent_entries ul li a:hover, .sidebar .widget .recent-news .post-content h5 a:hover, .sidebar .widget .widget_recent_comments ul li a:hover, .sidebar #archives-2 ul li a:hover, .sidebar #categories-2 ul li a:hover, .sidebar #meta-2 ul li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('bg_tabs',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_sakola_news .nav-tabs li.active, .widget.widget_sakola_news .post-item:before').css('background-color', to ? to : '' );
		});
	});

	wp.customize('text_tabs',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_sakola_news .nav-tabs li.active a, .widget.widget_sakola_news .post-item:before').css('color', to ? to : '' );
		});
	});

	wp.customize('bg_tabs2',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_sakola_news .nav-tabs li').css('background-color', to ? to : '' );
		});
	});

	wp.customize('text_tabs2',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_sakola_news .nav-tabs li a').css('color', to ? to : '' );
		});
	});

	wp.customize('text_tabs2_hover',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_sakola_news .nav-tabs li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('border_tabs',function( value ) {
		value.bind(function(to) {
			$('.widget.widget_sakola_news .nav-tabs').css('border-bottom-color', to ? to : '' );
		});
	});


	// CONTACT

	wp.customize('form_bord',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-2 .contact-item2:before, .contact-ef .border-form-top, .contact-ef').css('background-color', to ? to : '' );
		});
	});

	wp.customize('form_bord_hover',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-2 .contact-item2:after').css('background-color', to ? to : '' );
		});
	});

	wp.customize('text_input',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-1 .contact-bordered input, .contact-form-style-2 .contact-item2 input, .contact-bordered.text-area textarea, .contact-form-style-2 .contact-item2 textarea').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_send',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-1 input.wpcf7-submit, .contact-form-style-2 input.wpcf7-submit').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_send_text',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-1 input.wpcf7-submit, .contact-form-style-2 input.wpcf7-submit').css('color', to ? to : '' );
		});
	});

	wp.customize('btn_send_hover',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-1 input.wpcf7-submit:hover, .contact-form-style-2 input.wpcf7-submit:hover').css('background-color', to ? to : '' );
		});
	});

	wp.customize('btn_send_text_hover',function( value ) {
		value.bind(function(to) {
			$('.contact-form-style-1 input.wpcf7-submit:hover, .contact-form-style-2 input.wpcf7-submit:hover').css('color', to ? to : '' );
		});
	});



	/* ======================== FOOTER SECTION ======================== */

	// FOOTER

	wp.customize('footer_text',function( value ) {
		value.bind(function(to) {
			$('.copyright-text, .footer-text-area').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_link',function( value ) {
		value.bind(function(to) {
			$('.copyright-text a, .footer-menu li a').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_hover_link',function( value ) {
		value.bind(function(to) {
			$('.copyright-text a:hover, .footer-menu li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_social',function( value ) {
		value.bind(function(to) {
			$('.footer-bottom .social-footer ul li a').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_hover_social',function( value ) {
		value.bind(function(to) {
			$('.footer-bottom .social-footer ul li a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('footer_widget_bg',function( value ) {
		value.bind(function(to) {
			$('.footer-widget-wrapper').css('background-color', to ? to : '' );
		});
	});

	wp.customize('footer_widget_title',function( value ) {
		value.bind(function(to) {
			$('.footer-widget .widget-footer h4.widget-title').css('color', to ? to : '' );
		});
	});

	wp.customize('link_text_widget',function( value ) {
		value.bind(function(to) {
			$('.footer-widget .widget-footer .latest-post-widget a, .latest-post-wrap h5, .footer-widget .widget_nav_menu ul li a, .footer-widget .widget-footer a').css('color', to ? to : '' );
		});
	});

	wp.customize('link_hover_widget',function( value ) {
		value.bind(function(to) {
			$('.footer-widget .widget-footer .latest-post-widget a:hover, .footer-widget .widget_nav_menu ul li a:hover, .footer-widget .widget-footer a:hover').css('color', to ? to : '' );
		});
	});

	wp.customize('text_widget',function( value ) {
		value.bind(function(to) {
			$('.footer-widget .textwidget').css('color', to ? to : '' );
		});
	});

	wp.customize('border_widget',function( value ) {
		value.bind(function(to) {
			$('.latest-post-wrap h5').css('border-bottom-color', to ? to : '' );
		});
	});




} )( jQuery );