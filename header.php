<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<meta name="keywords" content="荆门电脑维修,荆门电脑上门维修,荆门上门维修电脑,荆门修电脑,荆门电脑急救中心,荆门电脑故障维修 ,荆门台式机维修,荆门笔记本维修,荆门打印机维修" />
<meta name="description" content="本公司专业从事于个人、家庭电脑维修（15827829320 小崔）及家庭网络维护和保养，系统安装，软、硬件维修，电脑配件零售业务，企业电脑、企业服务器维护、网络维护，综合布线，欢迎各个人、网吧以及企业来电咨询！" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
	<div id="header-top">
		<div id="logo-wrapper">
      			<div class="logo-img">
        			<a href="/" title="" rel="home" id="logo">
          			<img src="http://orewh4k1s.bkt.clouddn.com/image/logo5050.png" alt="荆门电脑维修">
        			</a>
      				</div>
			<div id="logo-txt-wrapper"><div id="txttopdiv"><a class="logotxttop">小崔电脑维修</a></div><div><a  class="logotxt">www.jmpc789.com</a></div></div>
    			</div>
			<div id="branding-wrapper">
			<a class="site-slogan">上门维修电话:</a><a class="site-slogan" href="tel:15827829320">15827829320</a>
        		</div>
		</div>
        <div class="nav-pad-e">
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		</div>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="http://orewh4k1s.bkt.clouddn.com/image/front.jpg" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">