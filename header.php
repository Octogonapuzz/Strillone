<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<title><?php bloginfo('name','display'); ?><?php wp_title( '&#124;', true, 'left' ); ?></title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.custom.67180.js"></script>
	<style type="text/css">
		/* Fase di testing */
		
		}

	</style>
	<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
	
	<div class="firstNavbar">

		<aside id="searchTop"><?php get_search_form(); ?> </aside>
	</div>
	<div class="mainBox" role="main">
	<header>
	<a href="<?php bloginfo('url') ?>">
		<h1><?php bloginfo('title', 'display') ?></h1>
		<h4><?php bloginfo('description') ?></h4>
	</a>
	</header>

	<div class="secondNavbar">
		<nav id="nav2"><?php wp_nav_menu(array('theme_location' => 'title-menu')) ?></nav>
	</div>
	<aside class="searchBar">
		<?php if (is_front_page()) : ?>
	<?php endif; ?>
		
	</aside>