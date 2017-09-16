<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ufateplodom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="icon" href="http://ufateplodom.ru/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="http://ufateplodom.ru/favicon.ico" type="image/x-icon" />
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/fancybox/dist/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php	$options = get_option( 'site__settings' );?>
<div id="page" class="site">

	<header id="masthead" class="main-head">
	</header>

