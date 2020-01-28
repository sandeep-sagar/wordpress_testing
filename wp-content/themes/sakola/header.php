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
$logo_id        	= get_theme_mod( 'custom_logo' );
$logo_image     	= wp_get_attachment_image_src( $logo_id, 'full' );

if(class_exists( 'Redux' )) {
$options 			= get_option('sakola_framework');
$sakola_wrap_opt 	= $options['wrap_opt'];

$sakola_header_scheme 		= $options['header_scheme'];
$sakola_header_alt_logo 	= '';
	if (isset($options['header_alt_logo'])) {
		$sakola_header_alt_logo 	= $options['header_alt_logo'];
		$sakola_alt_logo 			= $sakola_header_alt_logo['url'];
	}
$sakola_head_layout  	= $options['header_1_layout'];

$sakola_right    		= $options['header_customize_right']['enabled'];
$sakola_center    		= $options['header_customize_center']['enabled'];
$sakola_left     		= $options['header_customize_left']['enabled'];

$sakola_left_display    	= $options['header_left_display'];
$sakola_center_display    	= $options['header_center_display'];
$sakola_right_display     	= $options['header_right_display'];

$sakola_header_animated		= $options['header_animated'];
$fixed_header						= $options['fixed_header'];
$header_fixed_type					= $options['header_fixed_type'];
$space_fixed_alt					= $options['space_fixed_alt'];

$search_bar_style		= $options['search_bar_style'];
$header_left_float		= $options['header_left_float'];
$header_center_float	= $options['header_center_float'];
$header_right_float		= $options['header_right_float'];

$header_left_align		= $options['header_left_align'];
$header_center_align	= $options['header_center_align'];
$header_right_align		= $options['header_right_align'];

if($sakola_head_layout == '3column-header') {
	$header_3_centered		= $options['header_3_centered'];
}
else {
	$header_3_centered		= '';
}

$header_boxed = $options['header_boxed'];
if($header_boxed == true ) {
	$head_box_class = 'boxed-head-in';
}
else  {
	$head_box_class = '';
}


if(class_exists( 'acf' )) {
	$sakola_header_style_choice = get_field('header_style_choice');
}
?>
	<?php if(class_exists( 'Redux' ) && $sakola_wrap_opt == 'bordered'){ ?>
	<div class="bordered top-border"></div>
	<div class="bordered bottom-border"></div>
	<div class="bordered left-border"></div>
	<div class="bordered right-border"></div>
	<?php } ?>

	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	
	<div id="main-wrapper" class="main-wrapper<?php if(class_exists( 'Redux' ) && $sakola_wrap_opt == 'bordered'){ ?> bordered-main-wrap<?php } ?> clearfix">

		<?php if($fixed_header == true) {
			echo '<div id="sticky-wrap-head" class="sticky-header-wrap ' . $header_fixed_type . ' clearfix">';
		} ?>
		<?php sakola_top_menu_condition(); ?>

		<!-- Header
		============================================= -->
		<header id="header" class="header-style-1-wrap inner-head-wrap <?php if(class_exists( 'acf' ) && !is_search() && $sakola_header_style_choice == 'alternative'){ ?>alt-head<?php } ?><?php if($sakola_header_animated == '1') { ?> animated<?php } ?>  <?php echo esc_attr($head_box_class); ?> clearfix">

			<div class="container clearfix">

			<div class="header-clear <?php echo esc_attr( $header_3_centered ); ?> clearfix">
				<?php if($sakola_head_layout == '3column-header') { ?>
				<div class="fl <?php echo esc_attr( $sakola_left_display ); ?> <?php echo esc_attr( $header_left_float ); ?> <?php echo esc_attr( $header_left_align ); ?> clearfix">
					<?php sakola_header_part('header/header-customize-left' ); ?>
				</div>

				<div class="fc <?php echo esc_attr( $sakola_center_display ); ?> <?php echo esc_attr( $header_center_float ); ?> <?php echo esc_attr( $header_center_align ); ?> clearfix">
					<?php sakola_header_part('header/header-customize-center' ); ?>
				</div>

				<div class="fr <?php echo esc_attr( $sakola_right_display ); ?> <?php echo esc_attr( $header_right_float ); ?> <?php echo esc_attr( $header_right_align ); ?> clearfix">
					<?php sakola_header_part('header/header-customize-right' ); ?>
				</div>
				<?php }
				if($sakola_head_layout == '2column-header') { ?>
				<div class="fl header1-2 <?php echo esc_attr( $sakola_left_display ); ?> <?php echo esc_attr( $header_left_float ); ?> clearfix">
					<?php sakola_header_part('header/header-customize-left' ); ?>
				</div>

				<div class="fr header1-2 <?php echo esc_attr( $sakola_right_display ); ?> <?php echo esc_attr( $header_right_float ); ?> clearfix">
					<?php sakola_header_part('header/header-customize-right' ); ?>
				</div>
				<?php }
				if($sakola_head_layout == '1column-header') { ?>
				<div class="fc <?php echo esc_attr( $sakola_center_display ); ?> clearfix">
					<?php sakola_header_part('header/header-customize-center' ); ?>
				</div>
				<?php } ?>
			</div>

			</div>

		</header>

		<?php if($fixed_header == true) {
			echo '</div>';
			if($sakola_header_style_choice == 'alternative' && $space_fixed_alt == 'on') {
			echo '<div class="sticky-header-gap ' . $header_fixed_type . ' clearfix"></div>';
			}
			elseif($sakola_header_style_choice != 'alternative') {
			echo '<div class="sticky-header-gap ' . $header_fixed_type . ' clearfix"></div>';
			}
		} ?>

		<?php
		if($search_bar_style == 'expand') {
			if($sakola_right || $sakola_center || $sakola_left ) {
				if( isset($sakola_right['sakola-search']) || isset($sakola_center['sakola-search']) || isset($sakola_left['sakola-search']) ) {
					get_template_part('/inc/part/search-big', '');
				}
			}
		}
}
else {

if(class_exists( 'acf' )) {
	$sakola_header_style_choice = get_field('header_style_choice');
}
?>

	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	
	<div id="main-wrapper" class="main-wrapper clearfix">
	<!-- Header
	============================================= -->
	<header id="header" class="header-style-1-wrap inner-head-wrap <?php if(class_exists( 'acf' ) && $sakola_header_style_choice == 'alternative'){ ?>alt-head<?php } ?> animated clearfix no-redux">

		<div class="container">

			<div class="fl">
				<div class="logo head-item">
					<?php if ( ! empty( $logo_image ) ) { ?>
					<div class="logo-image">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo esc_url( $logo_image[0] ); ?>" alt="<?php esc_html_e( 'logo', 'sakola' ); ?>" />
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

			<div class="fr">
				<!-- Mobile menu toggle button (hamburger/x icon) -->
				<input id="main-menu-state" type="checkbox" />
				<label class="main-menu-btn sub-menu-triger" for="main-menu-state">
				  <span class="main-menu-btn-icon"></span>
				</label>

				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="menu main-menu head-item">
					<?php sakola_main_nav_menu(); ?>
				</nav>
				<!-- end primary menu -->

				<div class="search-wrap">
					<button id="btn-search"><i class="icon-simple-line-icons-143"></i></button>
				</div>
			</div>

			<?php get_template_part('/inc/part/search-big', ''); ?>

		</div>

	</header>
<?php } ?>
<!-- HEADER END -->