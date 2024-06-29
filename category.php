<?php get_header(); ?>
<?php wp_head(); ?>

<?php get_template_part('template-parts/breadcrumb/breadcrumb-category', 'default') ?>


<section class="our-blog-section ptb-100 gray-light-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-heading text-center mb-5">
                    <strong class="color-secondary">Category Posts</strong>
                    <h2><?php single_cat_title(); ?></h2>
                    <span class="animate-border mr-auto ml-auto mb-4"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (have_posts()): ?>
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

            <?php else: ?>
                <p><?php _e('Sorry, no posts matched your criteria.', 'textdomain'); ?></p>
            <?php endif; ?>
        </div>

    </div>
</section>

<div id="primary" class="content-area">
    <main id="main" class="site-main">


    </main>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>