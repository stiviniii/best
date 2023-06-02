<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Best_Blog
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="site-info">
						<span class="copyinfo">Copyright &copy; <?php echo date("Y"); ?></span>
						<span class="sep"> | </span>							
						<?php
						/* translators: 1: Theme name, 2: Theme author. */
						printf( esc_html__( 'Designed by %1$s.', 'best' ), '<a href="https://steveayo.com/">Steve Ayo</a>' );
						?>
					</div><!-- .site-info -->
				</div>
			</div>
		</div>		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
