<?php
/*
    Template Name: Services Details
*/
get_header();
wp_head();
?>

<?php get_template_part('template-parts/breadcrumb/service-breadcrumb', 'default'); ?>

<section class="service-details-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="service-details-wrap">
                    <img src="https://www.hiradigitalsolutions.com/public/upload/services/45308_80955_digital-marketing-solution.jpeg"
                        alt="services" class="img-fluid rounded shadow-sm">
                    <div class="services-detail-content mt-4">
                        <h2><?php the_title(); ?></h2>
                        <div style="text-align: justify;">
                            <?php the_content(); ?>
                            <?php
                            if (have_rows('service_detail_row')): {
                                } 
                                while (have_rows('service_detail_row')):
                                        the_row(); ?>
                                    <div class="icon-detail-row">
                                        <div>
                                            <h4 style="font-weight: bold;"><?php the_sub_field('row_main_head') ?></h4>
                                            <p><?php the_sub_field('row_main_text') ?></p>
                                        </div>
                                        <div class="servDet-iconMian">
                                            <?php if(have_rows('icon_row')) :
                                                while (have_rows('icon_row')) : the_row();?>
                                                    <div class="serDet-row">
                                                            <div class="icon-main">
                                                                <img src="<?php echo get_sub_field('icon_detail_image')?>" alt="">
                                                            </div>
                                                            <div class="text-main">
                                                                <h6><?php the_sub_field('icon_detail_head')?></h6>
                                                                <p>
                                                                    <?php the_sub_field('icon_detail_text');?>
                                                                </p>
                                                            </div>
                                                    </div>
                                                <?php endwhile;?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endwhile;?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="sidebar-right">
                    <aside class="widget widget-categories">
                        <?php
                        // Assuming this code is within your single-services.php or equivalent template file
                        
                        // Check if the current page is a parent service page
                        $parent_service_id = get_the_ID();
                        $is_parent_service_page = !empty($parent_service_id) && count(get_post_ancestors($parent_service_id)) === 0;

                        // Only execute the code if it's a parent service page
                        if ($is_parent_service_page) {
                            // Query child services of the parent service
                            $child_services_args = array(
                                'post_type' => 'service',
                                'posts_per_page' => -1,
                                'post_parent' => $parent_service_id,
                            );

                            $child_services_query = new WP_Query($child_services_args);

                            // Check if child services were found
                            if ($child_services_query->have_posts()) { ?>
                                <div class="widget-title">
                                    <h5>All Services</h5>
                                </div>
                                <?php echo '<ul class="all-service-list">';
                                // Loop through each child service
                                while ($child_services_query->have_posts()) {
                                    $child_services_query->the_post(); ?>
                                    <?php echo '<li><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
                                }
                                echo '</ul>';
                                // Restore original post data
                                wp_reset_postdata();
                            } else {
                                echo '<p>No child services found for this parent service.</p>';
                            }
                        }
                        ?>
                    </aside>
                    <!--need help-->
                    <?php
                    $card_phone = get_theme_mod('digimark_contact_card_phone');
                    $card_visit = get_theme_mod('digimark_contact_card_visit');
                    $card_mail = get_theme_mod('digimark_contact_card_mail');
                    ?>
                    <aside class="widget widget-categories ">
                        <div class="widget-title">
                            <h5>Need Help?</h5>
                        </div>
                        <p>We are available in 24/7 hours for dedicated support</p>
                        <ul class="primary-list mt-25">
                            <li><span
                                    class="ti-location-pin mr-2 color-primary"></span><?php echo esc_html($card_visit) ?>
                            </li>
                            <li><span class="ti-mobile mr-2 color-primary"></span>
                                <?php echo esc_html($card_phone) ?></li>
                            <li><span class="ti-email mr-2 color-primary"></span>
                                <?php echo esc_html($card_mail) ?></li>
                        </ul>
                    </aside>

                    <!-- Subscribe widget-->
                    <aside class="widget widget-categories exp-form-widget" style="display:block;">
                        <div class="widget-title" style="margin-bottom: 10px;">
                            <h5 style="margin-bottom: 0px;">Experience Real Results</h5>
                        </div>
                        <p>Partner with Thrive Internet Marketing Agency and scale your business.</p>

                        <?php echo apply_shortcodes( '[contact-form-7 id="beae335" title="Proposal Form"]' ); ?>
                    </aside>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();
wp_footer();
?>