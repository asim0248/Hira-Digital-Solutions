<?php get_header() ?>
<?php wp_head() ?>

<?php get_template_part('template-parts/breadcrumb/breadcrumb', 'default') ?>



<!--blog section start-->
<section class="our-blog-section ptb-100 gray-light-bg">
    <div class="container">
    <?php get_template_part('template-parts/header-top-section-text/section-top-text', 'default') ?>

        <div class="row">

        <?php
            // Get the current page number
            $current_page = max(1, get_query_var('paged'));
            // Setup the query to retrieve posts
            $args = array(
                'post_type' => 'post', // Post type
                'posts_per_page' => 6, // Number of posts per page
                'paged' => $current_page // Current page number
            );
            $query = new WP_Query($args);

            // Output posts
            if ($query->have_posts()):?>
                <?php while ($query->have_posts()):
                    $query->the_post();?>
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
                                        <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span><?php echo get_comments_number(); ?></span>
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
                <?php endwhile;?>

                <?php
                // Restore original post data
                wp_reset_postdata();
                else:
                // No posts found
                echo 'No posts found';
                endif;
        ?>

        </div>
        <?php echo wp_pagenavi()?>
    </div>
</section>
<!--blog section end-->




<?php get_footer() ?>
<?php wp_footer() ?>