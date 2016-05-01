<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package detendus
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<iframe src="https://discordapp.com/widget?id=172498227407486976&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
</aside><!-- #secondary -->
