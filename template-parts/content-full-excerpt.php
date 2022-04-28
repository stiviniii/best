<article class="postlist-item">
    <div class="row">
        <div class="col-md-6">
            <div class="entry-image">
            <?php best_post_thumbnail(); ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="entry-information">
                <?php the_title( '<h2 class="entry-information__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );?>
                <div class="entry-information__meta">
                <?php
                best_posted_on();
                best_posted_by();
                ?>
                </div>
                <div class="entry-information__excerpt">
                    <p>
                    <?php 
                        if( has_excerpt() ) {
                            echo get_the_excerpt();
                        } else {
                            echo wp_trim_words(get_the_excerpt(), 40);
                        }?>
                    </p>
                </div>
                <a class="btn-readmore" href="<?php the_permalink(); ?>">Read More</a>
                <div class="entry-information__tags">
                <?php
                $before = '';
                $seperator = ''; // blank instead of comma
                $after = '';

                the_tags( $before, $seperator, $after );
                ?>
                </div>
                <div class="social-sharing-panel">
                    <h3>Share Article</h3>
                    <div class="social-sharing-panel__horizontal">
                        <a href="#" rel="nofollow noreferrer noopener external" target="_blank" class="link">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 335 276">
                        <path d="m302 70a195 195 0 0 1 -299 175 142 142 0 0 0 97 -30 70 70 0 0 1 -58 -47 70 70 0 0 0 31 -2 70 70 0 0 1 -57 -66 70 70 0 0 0 28 5 70 70 0 0 1 -18 -90 195 195 0 0 0 141 72 67 67 0 0 1 116 -62 117 117 0 0 0 43 -17 65 65 0 0 1 -31 38 117 117 0 0 0 39 -11 65 65 0 0 1 -32 35"/>
                        </svg>
                        </a>
                        <a href="#" rel="nofollow noreferrer noopener external" target="_blank" class="link">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" viewBox="0 0 50 50">    <path d="M40,0H10C4.486,0,0,4.486,0,10v30c0,5.514,4.486,10,10,10h30c5.514,0,10-4.486,10-10V10C50,4.486,45.514,0,40,0z M39,17h-3 c-2.145,0-3,0.504-3,2v3h6l-1,6h-5v20h-7V28h-3v-6h3v-3c0-4.677,1.581-8,7-8c2.902,0,6,1,6,1V17z"></path></svg>
                        </a>
                        <a href="#" rel="nofollow noreferrer noopener external" target="_blank" class="link">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 250"><path d="M173.87,177.1a15,15,0,0,1-17.74,0L30,84.6,0,62.6V275a15,15,0,0,0,15,15H315a15,15,0,0,0,15-15V62.6l-30,22Z" transform="translate(0 -40)"/><polygon points="165 106.4 310.09 0 19.91 0 165 106.4"/></svg>
                        </a>
                    </div>
                </div>
            </div>            
        </div><!-- .col-md-6 -->
    </div>
</article>