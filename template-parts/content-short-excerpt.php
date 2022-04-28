<div class="col-lg-4 col-md-6">
<article class="postlist-short">
    <div class="entry-image">
    <?php best_post_thumbnail(); ?>
    </div>
    <div class="entry-information">
        <?php the_title( '<h2 class="entry-information__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>
        <div class="entry-information__meta">
        <?php
        best_posted_on();
        best_posted_by();
        ?>
        </div>
        <a class="btn-readmore" href="<?php the_permalink(); ?>">Read More</a>               
    </div>  
    <a class="full" href="<?php the_permalink(); ?>"></a>
</article>
</div>