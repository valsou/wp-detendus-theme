<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package detendus
 */

$class_entry_thumbnail = "entry-thumbnail";
if ( has_post_thumbnail() ) {
	$post_thumb_videos = 'style="background: url(' . get_the_post_thumbnail_url() . ');"';
} else {
	$class_entry_thumbnail = "entry-thumbnail-defaut";
}
?>

<div class="article-container <?php echo $class_entry_thumbnail; ?>" <?php echo $post_thumb_videos; ?>>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
	</header>

</article><!-- #post-## -->
</div>