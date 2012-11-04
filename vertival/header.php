<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>

	<meta name="viewport" content="height=device-height , user-scalable=no">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title><?php if ( function_exists('optimal_title') ) { optimal_title('|'); bloginfo('name'); } else { bloginfo('name'); wp_title('|'); } ?></title>

	
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	

	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	

	<?php wp_head(); ?>

 

</head>

<body <?php body_class(); ?> ontouchmove="blockMove()">