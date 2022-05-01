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
                            echo wp_trim_words(get_the_excerpt(), 35);
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
                        <a href="https://twitter.com/intent/tweet?text=Want+to+stand+out+from+the+competition%3F+Learn+how+to+write+a+house+offer+letter&url=https%3A%2F%2Fblog-www.pods.com%2F2021%2F11%2Fhome-offer-letter%2F" rel="nofollow noreferrer noopener external" target="_blank" class="link">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 335 276">
                        <path d="m302 70a195 195 0 0 1 -299 175 142 142 0 0 0 97 -30 70 70 0 0 1 -58 -47 70 70 0 0 0 31 -2 70 70 0 0 1 -57 -66 70 70 0 0 0 28 5 70 70 0 0 1 -18 -90 195 195 0 0 0 141 72 67 67 0 0 1 116 -62 117 117 0 0 0 43 -17 65 65 0 0 1 -31 38 117 117 0 0 0 39 -11 65 65 0 0 1 -32 35"/>
                        </svg>
                        </a>
                        <a href="https://www.facebook.com/share.php?u=https%3A%2F%2Fblog-www.pods.com%2F2021%2F11%2Fhome-offer-letter%2F" rel="nofollow noreferrer noopener external" target="_blank" class="link">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.0" x="0px" y="0px" viewBox="0 0 50 50">    <path d="M40,0H10C4.486,0,0,4.486,0,10v30c0,5.514,4.486,10,10,10h30c5.514,0,10-4.486,10-10V10C50,4.486,45.514,0,40,0z M39,17h-3 c-2.145,0-3,0.504-3,2v3h6l-1,6h-5v20h-7V28h-3v-6h3v-3c0-4.677,1.581-8,7-8c2.902,0,6,1,6,1V17z"></path></svg>
                        </a>
                        <a href="mailto:?subject=I wanted you to see this." rel="nofollow noreferrer noopener external" target="_blank" class="link">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 250"><path d="M173.87,177.1a15,15,0,0,1-17.74,0L30,84.6,0,62.6V275a15,15,0,0,0,15,15H315a15,15,0,0,0,15-15V62.6l-30,22Z" transform="translate(0 -40)"/><polygon points="165 106.4 310.09 0 19.91 0 165 106.4"/></svg>
                        </a>
                        <a href="#" rel="nofollow noreferrer noopener external" target="_blank" class="link">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512.88"><path class="cls-1" d="M256.44,0C115.2,0,.44,114.76.44,256A255.56,255.56,0,0,0,154,490.81c-.88-17.65,0-39.72,4.42-59.14,5.29-21.19,32.66-139.48,32.66-139.48s-8-16.77-8-40.6c0-38,22.07-66.21,49.44-66.21,22.95,0,34.42,17.65,34.42,38.84,0,22.95-15,58.26-22.95,90.92-6.18,27.37,13.24,49.44,40.61,49.44,48.55,0,81.21-62.68,81.21-135.95,0-56.49-38-98-106.81-98-77.68,0-126.23,58.26-126.23,122.7,0,22.07,6.17,38,16.77,50.32,4.41,5.29,5.29,7.94,3.53,14.12-.88,4.41-4.42,15.89-5.3,20.3-1.76,6.18-7.06,8.83-13.24,6.18-36.19-15-52.08-53.85-52.08-98,0-72.39,60.91-159.78,182.73-159.78,98,0,162.43,70.62,162.43,146.54,0,100.63-55.62,175.66-137.71,175.66-27.37,0-53.85-15-62.68-31.77,0,0-15,59.14-17.65,70.62-5.3,19.42-15.89,39.72-25.6,54.73a247.64,247.64,0,0,0,72.38,10.59c141.24,0,256-114.76,256-256S397.68,0,256.44,0" transform="translate(-0.44)"/></svg>
                        </a>
                    </div>
                </div>
            </div>            
        </div><!-- .col-md-6 -->
    </div>
    <a class="full" href="<?php the_permalink(); ?>"></a>
</article>