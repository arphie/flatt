<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Flatt UI Theme
 */
?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
				<?php do_action( 'flatt_credits' ); ?>
				<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'flatt' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'flatt' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'flatt' ), 'Flatt UI Theme', '<a href="http://flatt.e3mark.com" rel="designer">Jonn Marc Vistal</a>' ); ?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
</div> <!-- #wrapper -->

<?php wp_footer(); ?>

<!-- Bootstrap core JavaScript - placed at the end of the document so the pages load faster -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/holder.js"></script>

</body>
</html>