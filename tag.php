<?php get_header(); ?>

<?php get_template_part('template-parts/breadcrumb/breadcrumb-tag', 'default') ?>


<section class="tag-archive ptb-100">
    <div class="container">
    <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">
                <div class="section-heading text-center mb-5">
                    <strong class="color-secondary">Tag Posts</strong>
                    <h2><?php single_cat_title(); ?></h2>
                    <span class="animate-border mr-auto ml-auto mb-4"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <h1><?php single_tag_title(); ?></h1>

                <div class="row">
                    <?php if (have_posts()):
                        while (have_posts()):
                            the_post(); ?>
                            <div class="col-md-6">
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
                                                <li class="list-inline-item"><i
                                                        class="fas fa-share-alt mr-2"></i><span>10</span>
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
            <div class="col-lg-3 col-md-12">
                <div class="widget-title">
                    <h6>Tags</h6>
                </div>
                <div class="tag-cloud">
                    <?php
                    $post_type = get_post_type(); // Get the post type of the current post
                    
                    // Check if the post type matches your desired post type
                    if ($post_type === 'post') {
                        $tags = get_the_tags(); // Retrieve tags associated with the current post
                    
                        if ($tags): ?>
                            <?php foreach ($tags as $tag): ?>
                                <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                            <?php endforeach; ?>
                        <?php endif;
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>