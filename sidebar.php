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
<a class="sidebar-toggle sidebar-arrow-left" title="Dérouler sidebar"></a>
<aside id="secondary" class="widget-area" role="complementary">
	<!-- SEARCH BAR -->
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<label>
			<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
		</label>
		<button type="submit" class="search-submit"><img class="icon-open" src="/wordpress/wp-content/themes/wp-detendus-theme/img/icons/magnifying-glass-w.svg" /></span></button>
	</form>

	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<iframe src="https://discordapp.com/widget?id=172498227407486976&theme=dark" class="sidebar-discord" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
</aside><!-- #secondary -->
