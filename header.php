<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package detendus
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800,400italic,600italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo get_template_directory_uri (); ?>/js/konami.js"></script>
</head>

<body <?php body_class(); ?>>



<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'detendus' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container-inner">
			<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" id="banner-logo" />
		</div>
	<div id="menu-top">
	
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div id="menu-top-toggle">
					<a class="menu-toggle" title="Dérouler menu"><img src="<?php echo get_template_directory_uri (); ?>/img/icons/menu.svg" /></a>
					<a class="search-toggle" title="Dérouler recherche"><img src="<?php echo get_template_directory_uri (); ?>/img/icons/magnifying-glass.svg" /></a>
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				<div id="search-top-toggle"><?php get_search_form(); ?></div>
			</nav><!-- #site-navigation -->

	</div>
	
	</header><!-- #masthead -->
		
	<div id="content" class="site-content">
				<div class="container-inner">
