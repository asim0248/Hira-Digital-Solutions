<!--testimonial section start-->
<section class="testimonial-section ptb-100 gradient-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-5">
                <div class="testimonial-heading text-white">
                    <h2 class="text-white"><?php the_field('testi_head')?></h2>
                    <span class="animate-border mb-4"></span>
                    <p><?php the_field('testi_para')?></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="testimonial-content-wrap">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/testimonial-arrow-top.png"
                        class="img-fluid testimonial-tb-shape shape-top" alt="testimonial shape">
                    <div class="owl-carousel owl-theme client-testimonial-1 custom-dot testimonial-shape">
                        <?php $args = array(
                            'post_type' => 'testimonial',
                            'posts_per_page' => -1,
                        );
                        $testimonial_query = new WP_Query($args);
                        if ($testimonial_query->have_posts()):
                            while ($testimonial_query->have_posts()):
                                $testimonial_query->the_post();
                                ?>
                                <div class="item">
                                    <div class="testimonial-quote-wrap">
                                        <div class="media author-info mb-3">
                                            <div class="author-img mr-3">
                                                <?php if (has_post_thumbnail()) {
                                                    the_post_thumbnail('medium', array('class' => 'img-fluid')); // Change 'large' to the desired image size
                                                } ?>
                                            </div>
                                            <div class="media-body text-white">
                                                <h5 class="mb-0 text-white"><?php the_title(); ?></h5>
                                                <span><?php the_field('country_name'); ?></span>
                                            </div>
                                            <span class="fas fa-quote-right icon-md text-white"></span>
                                        </div>
                                        <div class="client-say text-white">
                                            <p>
                                                <?php the_excerpt(); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        else:
                            echo 'No testimonials found.';
                        endif;
                        ?>
                        <?php ?>
                    </div>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/testimonial-arrow-bottom.png"
                        class="img-fluid testimonial-tb-shape shape-bottom" alt="testimonial shape">
                </div>
            </div>
        </div>
    </div>
</section>
<!--testimonial section end-->