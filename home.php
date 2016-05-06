<?php
/**
 * HOME
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		global $query_string;
		query_posts("{$query_string}&posts_per_page=6");
		if ( have_posts() ) : ?>

			<div class="container-home">
			<?php
			/* Start the Loop */
			
			while ( have_posts() ) : the_post();
				
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */	
				
				get_template_part( 'template-parts/content-home' );

				
			endwhile;

			
			
		else :

			get_template_part( 'template-parts/content', 'none' );
		endif; ?>
		
		</div>
		<?php wp_pagenavi(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
