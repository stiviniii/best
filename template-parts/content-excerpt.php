<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package afro
 */

?>

<figure class="article-snippet article-snippet-collection">
	
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('articles'); ?></a>
	<figcaption>
		<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(), 9); ?>
		</a></h2>
		<p>
		<?php 
			if( has_excerpt() ) {
				echo get_the_excerpt();
			} else {
				echo wp_trim_words(get_the_excerpt(), 16);
			}?>
		</p>
		<a class="cta-secondary" href="<?php the_permalink(); ?>" class="read-more"><?php _e( 'Read More', 'afro' );?></a>
		<div class="article-snippet__footer">
			<span class="date"><?php the_time( ' F j, Y '); ?></span>
			<span class="comments">
				<span>
					<?php
                    echo get_comments_number($post->ID);
                    ?>
				</span>
				<span>
					<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 133.89 127.09"><title>comments</title><path d="M78.17,143.42a77.27,77.27,0,0,1-26.51-4.53,4.57,4.57,0,0,0-3.28.11c-11.09,5.71-22.94,8.93-35.17,10.93a3.19,3.19,0,0,1-2.6-1.1,2.75,2.75,0,0,1,.35-2.57c5.23-6.07,7.07-13.48,8.58-21,.21-1,.35-2.06.55-3.08a14,14,0,0,0-1.81-10.61C3.81,87.36,9.09,58.45,31.05,39.47c27.05-23.38,70.48-21.88,95.77,3.31,24.82,24.71,22.58,63.06-5,85.16A70.17,70.17,0,0,1,78.17,143.42ZM54.76,83.21A8.88,8.88,0,0,0,37,82.93,8.91,8.91,0,0,0,45.76,92,8.81,8.81,0,0,0,54.76,83.21Zm44.77-.39A8.79,8.79,0,0,0,107.92,92a8.85,8.85,0,1,0,.82-17.69A8.78,8.78,0,0,0,99.53,82.82ZM77.09,74.27A8.86,8.86,0,1,0,86,83.13,8.76,8.76,0,0,0,77.09,74.27Z" transform="translate(-10.17 -22.87)"/></svg>
				</span>
			</span>
		</div>
	</figcaption>
</figure>
