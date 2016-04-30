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

<?php wp_head(); ?>
<link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700|Roboto+Slab:100,300,400,700" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'detendus' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container-inner">
			<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" id="banner-logo" />
		</div>
	<div id="menu-top">
		<div class="container-inner">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</div>
	</header><!-- #masthead -->
		
	<div id="content" class="site-content">
		<?php if ( is_single() ) :
		
		if (has_post_thumbnail( $post->ID ) ):
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$image = $image[0];
		$size = getimagesize($image);

			if ($size[1] > 1920 || $size[0] > 1080) :
				$image_url = 'url(' . $image . ')';
			else :
				$image_url = "#F37B49";
			endif;
		
		else :
			$image_url = "#F37B49";
		endif; ?>
			<div class="content-background" style="background: <?php echo $image_url; ?>;"></div>
		<?php endif; ?>
				<div class="container-inner">
