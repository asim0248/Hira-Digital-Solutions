<?php
/*
  Template Name: Pricing
*/
get_header();
wp_head();
?>

<?php get_template_part('template-parts/breadcrumb/breadcrumb', 'default') ?>

<section class="pricing-section ptb-100 ">
    <div class="container">
    <?php get_template_part('template-parts/header-top-section-text/section-top-text', 'default') ?>


        <div class="row">
        <div class="col-md-12 col-lg-12">
    <div class="feature-tabs-wrap">
        <ul class="nav nav-tabs border-bottom-0 feature-tabs feature-tabs-center d-flex justify-content-center" data-tabs="tabs">
            <?php
            $args = array(
                'taxonomy' => 'pricing_category',
                'hide_empty' => false,
                'orderby' => 'name',
                'order' => 'DESC',
            );
            $terms = get_terms($args);
            foreach ($terms as $index => $term): ?>
                <li class="nav-item">
                    <a class="nav-link text-center <?php if ($index === 0) echo 'active'; ?>" href="#<?php echo $term->slug; ?>" data-toggle="tab">
                        <h6 class="mb-0"><?php echo $term->name; ?></h6>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <div class="tab-content">
            <?php
            foreach ($terms as $index => $term): ?>
                <div class="tab-pane mt-5<?php if ($index === 0) echo ' active'; ?>" id="<?php echo $term->slug; ?>">
                    <div class="row">
                        <?php
                        $args = array(
                            'post_type' => 'pricing',
                            'posts_per_page'=> -1, 
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'pricing_category',
                                    'field' => 'slug',
                                    'terms' => $term->slug,
                                ),
                            ),
                            'orderby' => 'menu_order',
                            'order'=> 'ASC'
                        );
                        $pricing_query = new WP_Query($args);
                        if ($pricing_query->have_posts()):
                            while ($pricing_query->have_posts()):
                                $pricing_query->the_post(); ?>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card text-center single-pricing-pack">
                                        <div class="price-head">
                                            <h3><?php the_title(); ?></h3>
                                        </div>
                                        <div class="card-header py-4 border-0 pricing-header">
                                            <div class="price text-center mb-0 monthly-price">
                                                <?php echo get_field('card_price'); ?>
                                            </div>
                                            <p><?php echo get_field('card_duration'); ?></p>
                                        </div>
                                        <div class="price-name">
                                            <h5 class="mb-0"><?php echo get_field('card_tag_line'); ?></h5>
                                            <p><?php echo get_field('card_validity'); ?></p>
                                        </div>
                                        <div class="card-body">
                                            <?php if (have_rows('card_list')): ?>
                                                <ul class="list-unstyled mb-4 pricing-feature-list">
                                                    <?php while (have_rows('card_list')):
                                                        the_row(); ?>
                                                        <li><i class="fa fa-check"></i><?php echo the_sub_field('list_features'); ?></li>
                                                    <?php endwhile; ?>
                                                </ul>
                                            <?php endif; ?>
                                            <a href="<?php the_permalink(); ?>" class="btn outline-btn mb-3">Choose A Plan</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata();
                        endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>




        </div>
        <div class="col-12">
            <div class="support-cta text-center mt-5">
                <h5 class="mb-1"><span class="ti-headphone-alt color-primary mr-3"></span>We're Here to Help You
                </h5>
                <p>Have some questions? <a href="tel:+92 323 8883377">Chat with us now</a>, or <a
                        href="mailto:info@hiradigitalsolutions.com">send us an email</a> to
                    get in touch.</p>
            </div>
        </div>
    </div>
</section>

<?php
wp_footer();
get_footer();
?>