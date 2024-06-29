<?php
/*
  Template Name: Portfolio
*/

get_header();
wp_head();
?>

<?php get_template_part('template-parts/breadcrumb/breadcrumb', 'default') ?>

<!--our work or portfolio section start-->
<section class="our-portfolio-section ptb-100">
    <div class="container">
    <?php get_template_part('template-parts/header-top-section-text/section-top-text', 'default') ?>
        <div class="row">
            <div class="col-md-12">
                <div class="text-center pb-2">
                    <ul class="filt-btns">
                        <li>
                            <button type="button" class="filter-btn" data-mixitup-control data-filter="all">
                                All
                            </button>
                        </li>
                        <?php 
                            $categories = get_categories(array(
                                'taxonomy' => 'portfolio_category',
                                'hide_empty' => false,
                                'oderby'=> 'name',
                                'order'=> 'DESC'
                            ));
                            foreach ($categories as $category) :
                        ?>
                        
                            <li>
                                <button type="button" class="filter-btn" data-mixitup-control data-filter=".<?php  echo $category->slug; ?>">
                                    <?php echo $category->name; ?>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="portfolio-container" id="MixItUp">
                    <?php
                        $args = array(
                            'post_type' => 'portfolio',
                            'posts_per_page'=> -1,
                            'order'=> 'ASC',
                        );
                        $portfolio_query = new WP_Query($args);
                        while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                            $categories = get_the_terms(get_the_ID(), 'portfolio_category');
                                $category_class = '';
                            if ($categories) {
                                foreach ($categories as $category) {
                                    $category_class .= $category->slug . ' ';
                                }
                            }
                    ?>
                        <div class="mix portfolio-item <?php echo $category_class; ?>" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="<?php the_field('portfolio_link');?>" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url();?>" alt="portfolio" />
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1"><?php the_title();?></h5>
                                        <ph><?php the_field('technology_used');?></p>
                                    </div>
                                </a>
                                <div class="text-center p-4">
                                    <h5 class="mb-1"><?php the_title();?></h5>
                                    <span><?php the_field('technology_used');?></span>
                                </div>
                            </div>
                        </div>

                        <?php endwhile;
                            wp_reset_postdata();
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--our work or portfolio section end-->

<?php
wp_footer();
get_footer();
?>