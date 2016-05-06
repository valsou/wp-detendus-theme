<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package detendus
 */

?>

<div class="container-post-videos">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
			<?php
				if ( is_single() ) {
					the_title( '<h1 class="entry-title">', '</h1>' );
				} else {
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				}
		
				if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php detendus_posted_videos(); ?>
					</div><!-- .entry-meta -->
				<?php
				endif;
				?>
		</header><!-- .entry-header -->
		<div class="entry-excerpt">
			<?php
				the_excerpt();
			?>
		</div>
		<div class="entry-content">
			<?php
				if ( in_category('articles') ) {
					the_post_thumbnail();
				}
			
			
			
				the_content();
			?>
		</div><!-- .entry-content -->
		<?php if (has_tag()) { ?>
		<footer class="entry-footer">
			<?php echo '<span>Mots-clés:</span><span class="tags">' . get_the_tag_list() . '</span>'; ?>
		</footer><!-- .entry-footer -->
		<?php } ?>
	</article><!-- #post-## -->
</div>
