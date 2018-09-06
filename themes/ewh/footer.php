<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
<?php endif;?>

			<footer id="colophon" class="site-footer" role="contentinfo">
			<?php dynamic_sidebar('sidebar-1'); ?>

				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
				<div class="phone-button container">
				<a href="tel:6043226692" >
				<img class="phone-icon" src="<?php echo get_template_directory_uri() . '/images/phone button.svg' ?>" class="logo" alt="phone-button" />
				</a>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
