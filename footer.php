<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package detendus
 */

?>

	</div><!-- #content-inner -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container-inner">
			<div class="site-info">
				<p>Site réalisé avec amour <3.</p>
				<p>Détendus du pad (c) depuis 2003.</p>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	jQuery(document).ready(function() {
		
   	jQuery('.sidebar-toggle').click(function() {
   		jQuery('#secondary').toggle();
		jQuery('#primary').toggle();
		jQuery('.sidebar-icon-toggle.fa-angle-double-left').toggleClass('fa-angle-double-right');
   		return false;
   	});
	
	jQuery('.menu-toggle').click(function() {
   		jQuery('.menu-menu-top-container').slideToggle(400);
   		return false;
   	});
});
	</script>
</body>
</html>
