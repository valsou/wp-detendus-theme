<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package detendus
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		global $query_string;
		query_posts("{$query_string}&posts_per_page=8");
		if ( have_posts() ) : ?>

			<div class="container-articles cat-videos">
			<?php
			/* Start the Loop */
			
			$iterateur = 1; // AFFICHAGE COMPLEXE DES CARDS
			
			while ( have_posts() ) : the_post();
				
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				set_query_var( 'iterateur', $iterateur );		
				
				get_template_part( 'template-parts/content-video' );
				$iterateur = $iterateur + 1;
				
			endwhile;

			wp_pagenavi();
			
		else :

			get_template_part( 'template-parts/content', 'none' );
		endif; ?>
		
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
