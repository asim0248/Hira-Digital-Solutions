<?php 
/*
  Template Name: Service
*/
?>

<?php get_header()?>
<?php wp_head()?>

<?php get_template_part('template-parts/breadcrumb/breadcrumb', 'default')?>

    <!--services section start-->
    <section class="services-section ptb-100 gray-light-bg">
        <div class="container">
        <?php get_template_part('template-parts/header-top-section-text/section-top-text', 'default') ?>
        <div class="row justify-content-center">
            </div>
            <?php
            $args = array(
                'post_type' => 'service',
                'posts_per_page' => -1,
                'order' => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category', // Use 'category' taxonomy
                        'field' => 'id',
                        'terms' => get_terms('category', array('fields' => 'ids')), // Get all category IDs
                        'operator' => 'NOT IN',
                    ),
                ),
            );

            $custom_query = new WP_Query($args); ?>
            <div class="row">
                <?php if ($custom_query->have_posts()):
                    while ($custom_query->have_posts()):
                        $custom_query->the_post(); ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
                                <img src="<?php echo get_field('services_icon') ?>" alt="">
                                <h5><?php the_title(); ?></h5>
                                <p class="mb-0">
                                    <?php the_excerpt(); ?>
                                </p>
                                <?php
                                $permalink = get_permalink();
                                ?>
                                <a href="<?php echo esc_url($permalink) ?>" class="detail-link mt-4">Read more
                                    <span class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                    echo 'No posts found.';
                endif;
                ?>
            </div>

        </div>
    </section>
    <!--services section end-->

<?php wp_footer()?>
<?php get_footer()?>