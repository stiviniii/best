<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Best_Blog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<header class="entry-header">
						<div class="entry-header__text">
						<?php
						if ( is_singular() ) :
							the_title( '<h1 class="entry-title">', '</h1>' );
						else :
							the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
						endif;

						if ( 'post' === get_post_type() ) :
							?>
							<div class="entry-meta">
								<?php
								best_posted_on();
								best_posted_by();
								?>
							</div><!-- .entry-meta -->
						<?php endif; ?>
						</div>
						<?php best_post_thumbnail(); ?>
						
					</header><!-- .entry-header -->
				</div>
			</div>
		</div>
		


	<div class="entry-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-1">

				</div>
				<div class="col-lg-9">
				<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'best' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					)
				);

				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'best' ),
						'after'  => '</div>',
					)
				);
				?>
				</div>
				<div class="col-lg-9">

				</div>
			</div>
		</div>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php best_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
