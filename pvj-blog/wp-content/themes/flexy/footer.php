<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package Flexy
 
 * @since Flexy 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'flexy_credits' ); ?>
			  <p><?php bloginfo(); ?> &copy; <?php echo date( 'Y' ); ?>. <?php _e( 'All Rights Reserved.', 'flexy' ); ?></p>
		      <p><?php _e('Powered by','flexy'); ?> <a href="http://wordpress.org" rel="nofollow">WordPress </a>| <?php _e('Theme:','flexy'); ?> <a href="http://hit-hut.com/flexy/" rel="nofollow">Flexy</a> <?php _e( 'by Shahin raj.', 'flexy'); ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>