<?php
/**
 * The template for displaying front page (Home)
 *
 * @package afro
 */

get_header();
?>

<main class="wrapper">


    <!--------------------------------------- 
    Recent posted articles
     ---------------------------------------->


     <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="section-title">Most Recent Articles</h2>
                            </div>
                            <div class="col-md-6">                            
                                <a href="#" class="cta-secondary">See More</a>
                            </div>
                        </div>

                    </div>

                    <?php 
                        $homepagePosts = new WP_Query(array(
                            'post_type'   => $post_type,
                            'numberposts' => '5',
                            'orderby' => 'publish_date',
                        ));
                        
                        echo '<div class="owl-carousel three-col ">';
                        while ($homepagePosts->have_posts()) {
                            $homepagePosts->the_post();
                            get_template_part( 'template-parts/content', 'full-excerpt' );
                        } 
                        
                        wp_reset_postdata();
                        echo "</div>";
                        ?>
                </div> <!-- .col -->
            </div>  <!-- .row -->          
        </div><!-- .container -->
    </section>


</main>
<?php
get_footer();