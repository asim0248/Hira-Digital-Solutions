<?php
/*
    Template Name: Home
*/
?>

<?php wp_head(); ?>
<?php get_header(); ?>

<!--body content wrap start-->
<div class="main">

    <!--hero section start-->
    <?php get_template_part('template-parts/home-sections/hero-section', 'default') ?>

    <!--hero section end-->

    <!--about section with promo start-->
    <?php get_template_part('template-parts/home-sections/about-section', 'default') ?>
    <!--about section with promo end-->

    <!--services section start-->
    <section class="services-section ptb-100 gray-light-bg">
        <div class="container">
            <!--Header Top Section Text Start-->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <strong class="color-secondary"><?php echo get_field('head_span', 10); ?></strong>
                        <h2><?php echo get_field('main_heading', 10); ?></h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead">
                            <?php echo get_field('section_paragraph', 10); ?>
                        </p>
                    </div>
                </div>
            </div>
            <!--Header Top Section Text End-->
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

    <!--why choose us section start-->
    <?php get_template_part('template-parts/home-sections/home-why-choose', 'default') ?>
    <!--why choose us section end-->

    <!--testimonial section start-->
    <?php get_template_part('template-parts/home-sections/testimonial-section', 'default') ?>
    <!--testimonial section end-->

    <!--blog section start-->
    <section class="our-blog-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <strong class="color-secondary"><?php echo get_field('head_span', 157); ?></strong>
                        <h2><?php echo get_field('main_heading', 157); ?></h2>
                        <span class="animate-border mr-auto ml-auto mb-4"></span>
                        <p class="lead">
                            <?php echo get_field('section_paragraph', 157); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                );

                $custom_query = new WP_Query($args); ?>

                <?php if ($custom_query->have_posts()):
                    while ($custom_query->have_posts()):
                        $custom_query->the_post(); ?>
                        <div class="col-md-4">
                            <div class="single-blog-card card border-0 shadow-sm">
                                <div class="blog-img position-relative">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail('medium', array('class' => 'card-img-top')); // Change 'large' to the desired image size
                                    } ?>
                                    <!-- <img src="img/blog/1.jpg" class="" alt="blog"> -->
                                    <?php $post_date_day = get_the_date('j'); ?>
                                    <?php $post_date_month = get_the_date('F'); ?>
                                    <div class="meta-date">
                                        <strong><?php echo $post_date_day ?></strong>
                                        <small><?php echo $post_date_month ?></small>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="post-meta mb-2">
                                        <ul class="list-inline meta-list">
                                            <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span>
                                                Comments
                                            </li>
                                            <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span>
                                                Share
                                            </li>
                                        </ul>
                                    </div>
                                    <?php
                                    $permalink = get_permalink();
                                    ?>
                                    <h3 class="h5 mb-2 card-title"><a
                                            href="<?php echo esc_url($permalink) ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                    <a href="<?php echo esc_url($permalink) ?>" class="detail-link">Read more <span
                                            class="ti-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else: ?>
                    <?php echo 'No posts found.'; ?>
                <?php endif; ?>

            </div>
        </div>
    </section>
    <!--blog section end-->

    <!--call to action section start-->
    <?php get_template_part('template-parts/call-to-action/call-to-action', 'default') ?>
    <!--call to action section end-->

</div>
<!--body content wrap end-->

<?php get_footer(); ?>
<?php wp_footer(); ?>