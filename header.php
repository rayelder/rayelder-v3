<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


		<script type="text/javascript" src="//use.typekit.net/hhp6rtd.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/infra-140907/css/infra.css" />
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/infra-140907/js/modernizr.custom.18245.js" type="text/javascript"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/infra-140907/js/infra.js" type="text/javascript"></script>
		<link href="//cdn.symbolset.com/051719de2c11a3b59a165dc8c9f86ddff7309c88/symbolset.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php //wp_head(); ?>
</head>

<body>

	<?php

	$social = array(
		'theme_location'  => '',
		'menu'            => 'Social',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'ss-icon ss-social-cirlce',
		'menu_id'         => 'social',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);


	$primary = array(
		'theme_location'  => '',
		'menu'            => 'Primary',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => '',
		'menu_id'         => 'primary',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);

	?>

	<div class="centered">
		<div class="row margin-top-one">
			<div class="column6">
				<?php wp_nav_menu( $social ); ?>
			</div>
		</div>
		<div class="row">
			<div class="column6">
				<?php wp_nav_menu( $primary ); ?>
			</div>
		</div>
	
