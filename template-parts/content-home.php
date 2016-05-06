<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package detendus
 */

$num_cards = array(2,4); // numéros de positions des cards sans excerpt

$iterateur = get_query_var('iterateur');

?>

<div class="article-container">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php
		$class_entry_thumbnail = "entry-thumbnail";
		if ( has_post_thumbnail() ) {
			$post_thumb_videos = 'style="background: url(' . get_the_post_thumbnail_url() . ');"';
		} else {
			// $post_thumb_videos = "/wordpress/wp-content/themes/wp-detendus-theme/img/bg-article.png";
			$class_entry_thumbnail = "entry-thumbnail-defaut";
		}
	
	
		/*** ON affiche l'icone de lecture que SI l'article est de la catégorie VIDEOS ***/
		$img_thumb = "";
	
		$category = get_the_category(); 
		$category_parent_id = $category[0]->category_parent;
		if ( $category_parent_id != 0 ) {
			$category_parent = get_term( $category_parent_id, 'category' );
			$css_slug = $category_parent->slug;
		} else {
			$css_slug = $category[0]->slug;
		}
	
		if ($css_slug == "videos") { $img_thumb = '<img src="/wordpress/wp-content/themes/wp-detendus-theme/img/icons/play-circle-w.svg" />'; }
	
	?>


	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="<?php echo $class_entry_thumbnail; ?>" <?php echo $post_thumb_videos; ?>><?php echo $img_thumb; ?></a>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<?php 
		endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php if ( has_excerpt( $post->ID ) && !in_array($iterateur, $num_cards)) {
			excerpt();
		}
		?>
	</div>
	<div class="entry-meta">
		<?php detendus_posted_videos(); ?>
	</div><!-- .entry-meta -->
</article><!-- #post-## -->
</div>