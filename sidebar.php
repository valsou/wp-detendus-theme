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
	
	<?php get_search_form(); ?>
	
	<section class="widget recent-posts-custom">
	<h2 class="widget-title">C'est tout frais</h2>
		<?php
		$args = array(
		'numberposts' => 5,
		'orderby' => 'post_date',
		'order' => 'DESC',
		'post_type' => 'post',
		'post_status' => 'draft, publish, future, pending, private',
		'suppress_filters' => true );
		
		$recent_posts = wp_get_recent_posts($args);
		
		foreach ( $recent_posts as $recent ) {
			
			// On récupère le nom de la catégorie
			$cat = get_the_category( $recent["ID"]);

			if ($cat[0]->category_parent != 0) {
				
				//// La page EST dans une sous-catégorie
				$cat_parent =  $cat[0]->category_parent;
				$cat = get_cat_name( $cat_parent );
				
			} else {
				
				//// La page n'est pas dans une sous-catégorie
				$cat = $cat[0]->cat_name;
				
			}
			
			$time_string = 'le <time class="entry-date published updated" datetime="%1$s">%2$s</time>';

			$time_string = sprintf( $time_string,
				esc_attr( get_the_date( 'c' , $recent["ID"]) ),
				esc_html( get_the_date( '', $recent["ID"]) ),
				esc_attr( get_the_modified_date( 'c' , $recent["ID"]) ),
				esc_html( get_the_modified_date( '', $recent["ID"]) )
			);

			$posted_on = sprintf(
				esc_html_x( '%s', 'post date', 'detendus' ),
				$time_string
			);
			
			// Affichage par liste
			echo '<article><div class="recent-cat cat-' . sanitize_title($cat) . '"><img title="' . $cat . '" src="' . get_template_directory_uri () . '/img/icons/' . sanitize_title($cat) . '.svg" /></div><div class="recent-wrap-info"><span class="recent-title"><a href="' . get_permalink($recent["ID"]). '" title="' . $recent["post_title"] . '">' . $recent["post_title"] . '</a></span><span class="recent-author">' . get_the_author_meta( 'display_name', $recent["post_author"] ) . ' ' . $posted_on . '</span></div></article>';
			
		} // end FOREACH
		
		
		?>
	</section>
		
		
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<iframe src="https://discordapp.com/widget?id=172498227407486976&theme=light" class="sidebar-discord" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
</aside><!-- #secondary -->
