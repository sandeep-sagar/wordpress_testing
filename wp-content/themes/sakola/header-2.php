<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> > <!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php wp_head(); ?>

</head>

<body id="body" <?php body_class() ;?>>
<?php
$options = get_option('sakola_framework');
$logo = '';
if (isset($options['logo_upload'])) {
$logo = $options['logo_upload'];
$upload_logo = $logo['url'];
}
$sakola_wrap_opt 				= $options['wrap_opt'];
$sakola_header2_content_boxed 	= $options['header2_content_boxed'];
?>

	<?php if($sakola_wrap_opt == 'bordered'){ ?>
	<div class="bordered top-border"></div>
	<div class="bordered bottom-border"></div>
	<div class="bordered left-border"></div>
	<div class="bordered right-border"></div>
	<?php } ?>

	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>

	<!-- Main Wrapper -->
	<div id="main-wrapper" class="header-style-2-wrap<?php if($sakola_header2_content_boxed == true){ ?> boxed-wrap<?php } ?> clearfix<?php if(class_exists( 'Redux' ) && $sakola_wrap_opt == 'bordered'){ ?> bordered-main-wrap<?php } ?>">

		<div id="cd-nav" class="cd-nav">
			<div class="cd-navigation-wrapper">
				<div class="cd-half-block primary-menu">
					<div class="outer">
						<div class="inner">
							<nav id="primary-menu" class="menu main-menu">
								<?php sakola_main_nav_menu(); ?>
							</nav>
						</div>
					</div>
				</div><!-- .cd-half-block -->
				
				<div class="cd-half-block contact-info">
					<div class="outer">
						<div class="inner">
							<?php
							$sakola_header_2_title = $options['header_2_title'];
							$sakola_header_2_text 	= $options['header_2_text']; ?>

							<?php if(!empty($sakola_header_2_title)) { ?>
								<h1><?php echo sanitize_text_field( $sakola_header_2_title ); ?></h1>
							<?php }
							else {
								echo '<h1>'. esc_attr( get_bloginfo( 'name' ) ). '</h1>';
							}
							if(!empty($sakola_header_2_text)) { ?>
								<div class="header-info-text"><?php echo htmlspecialchars_decode( esc_html( $sakola_header_2_text )); ?></div>
							<?php } ?>
						</div>
					</div>
				</div> <!-- .cd-half-block -->
			</div> <!-- .cd-navigation-wrapper -->
		</div>

		<!-- Header
		============================================= -->
		<header id="header" class="clearfix">
			<div class="header-style-2-inner-content">

				<!-- Logo
				============================================= -->
				<div class="logo">
					<?php if ( ! empty( $upload_logo ) ) { ?>
					<div class="logo-image">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_url( $upload_logo ); ?>" alt="<?php esc_html_e( 'logo', 'sakola' ); ?>" />
						</a>
					</div>
					<?php }
					else { ?>
					<div class="logo-title">
						<h2 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="header-logo"><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></a>
						</h2>
					</div>
					<?php } ?>
				</div>
				<!-- end logo -->

			</div>

			<a href="#cd-nav" class="cd-nav-trigger sub-menu-triger"><span class="cd-nav-icon"></span></a>

			<!-- Search -->
			<div class="search-wrap">
				<button id="btn-search"><i class="icon-simple-line-icons-143"></i></button>
			</div>
		</header>

		<div class="search">
			<button id="btn-search-close" class="btn--hidden btn--search-close" ><i class="icon-themify-1"></i></button>

			<?php get_search_form() ?>

			<?php 
			$sakola_search_bar_title 	= $options['search_bar_title'];
			$sakola_search_sug_title 	= $options['search_sug_title']; 
			$sakola_search_sug_text 	= $options['search_sug_text']; ?>

			<?php if(!empty($sakola_search_bar_title)) { ?>
			<span class="search__info"><?php echo sanitize_text_field( $sakola_search_bar_title ); ?></span>
			<?php }
			else { ?>
				<span class="search__info"><?php esc_html_e( 'Hit enter to search or ESC to close', 'sakola' ); ?></span>
			<?php } ?>

			<div class="search__related">
				<div class="search__suggestion">
				<?php if(!empty($sakola_search_sug_title)) { ?>
					<h4><?php echo sanitize_text_field( $sakola_search_sug_title ); ?></h4>
				<?php }
				if(!empty($sakola_search_sug_text)) { ?>
					<p><?php echo sanitize_text_field( $sakola_search_sug_text ); ?></p>
				<?php } ?>
				</div>
			</div>
			
		</div>
		<!-- HEADER END -->