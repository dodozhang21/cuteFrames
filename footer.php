<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package cuteFrames
 * @since cuteFrames 1.0.0
 */
?>

	</div><!-- #main -->
	
	<?php get_sidebar('colophon'); ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'cuteFrames_credits' ); ?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'cute-frames' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'cute-frames' ), 'WordPress' ); ?></a> | <?php printf( __( 'Theme %1$s by %2$s', 'cute-frames' ), 'Cute Frames', '<a href="https://regretless.com/" rel="designer">Ying Zhang</a>' ); ?>
		</div><!-- .site-info -->
		<?php printf( __( '%1$s', 'cute-frames' ), '<a id="top" href="#top">Back to top</a>' ); ?>
	</footer><!-- .site-footer .site-footer -->
	<div class="footer-bottom"></div>
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>