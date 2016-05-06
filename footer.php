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
			<p>Site réalisé avec amour et tendresse. <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/heart-r.svg" /></p>
			<p>Détendus du pad (c) depuis 2003.</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	jQuery(document).ready(function() {
		
	var is_detached = false;
	
   	jQuery('.sidebar-toggle').click(function() {
   		jQuery('#secondary').toggle();
		if (is_detached) {
			jQuery(".sidebar-toggle").detach().insertAfter('#primary');
			jQuery(".sidebar-toggle").removeClass("detached");
			is_detached = false;
		} else {
			jQuery(".sidebar-toggle").detach().prependTo('#secondary');
			jQuery(".sidebar-toggle").addClass("detached");
			is_detached = true;
		}
		// jQuery('#primary').toggle();
		jQuery('.sidebar-arrow-left').toggleClass('sidebar-arrow-right');
   		return false;
   	});
	
	jQuery('.menu-toggle').click(function() {
   		jQuery('.menu-menu-container').slideToggle(400);
   		return false;
   	});
	
	jQuery('.search-toggle').click(function() {
   		jQuery('#search-top-toggle').slideToggle(400);
   		return false;
   	});
	
	// jQuery(window).bind('scroll', function () {
    // if (jQuery(window).scrollTop() > 50) {
        // jQuery('.menu').addClass('fixed');
    // } else {
        // jQuery('.menu').removeClass('fixed');
    // }
	// });

	
	
});


	var easter_egg = new Konami();
	easter_egg.code = function() { 
		alert('Tu as gagné une boîte de paté ! Bravo. Bientôt il y aura un easter egg vraiment cool.'); }
	easter_egg.load();
	</script>
</body>
</html>
