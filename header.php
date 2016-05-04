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
				<a class="menu-toggle" title="Dérouler menu"><i class="menu-icon-toggle fa fa-bars" aria-hidden="true"></i></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->

	</div>
	
	</header><!-- #masthead -->
		
	<div id="content" class="site-content">
		<?php if ( is_single() ) :
		
		if (has_post_thumbnail( $post->ID ) ):
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$image = $image[0];
		$size = getimagesize($image);
		$classContentBg = "content-background";
		$imageDefaut = 'style="background: #006B99 url(/wordpress/wp-content/themes/wp-detendus-theme/img/bg-article.png);"';

			if ($size[1] > 1920 || $size[0] > 1080) :
				$image_url = 'style="background: url(' . $image . ') no-repeat center;"';
			else :
				$classContentBg = "content-bg-defaut";
			endif;
		
		else :
			$classContentBg = "content-bg-defaut";
		endif; ?>
			<div class="<?php echo $classContentBg; ?>" <?php echo $image_url; ?>></div>
		<?php endif; ?>
				<div class="container-inner">
