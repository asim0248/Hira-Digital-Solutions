<?php get_header() ?>
<?php wp_head() ?>

<?php get_template_part('template-parts/breadcrumb/breadcrumb', 'default') ?>


<!--blog section start-->
<div class="module ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <!-- Post-->
                <article class="post">
                    <div class="post-preview">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full', array('class' => 'img-fluid')); // Change 'large' to the desired image size
                        } ?>
                    </div>
                    <div class="post-wrapper">
                        <div class="post-header">
                            <h2 class="post-title"><?php the_title(); ?>
                            </h2>
                            <ul class="post-meta">
                                <li><?php echo get_the_date();?></li>
                                <li>In <a href="#">Branding</a>, <a href="#">Design</a></li>
                                <li><a href="#"><?php echo get_comments_number(); ?> Comments</a></li>
                            </ul>
                        </div>
                        <div class="post-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article>
                <!-- Post end-->

                <?php
                // Inside single.php or page.php
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
                ?>


            </div>
            <div class="col-lg-4 col-md-4">
                <div class="sidebar-right pl-4">

                    <!-- Search widget-->
                    <aside class="widget widget-search">
                        <form>
                            <input class="form-control" type="search" placeholder="Type Search Words">
                            <button class="search-button" type="submit"><span class="ti-search"></span></button>
                        </form>
                    </aside>


                    <!-- Categories widget-->
                    <aside class="widget widget-categories">
                        <div class="widget-title">
                            <h6>Categories</h6>
                        </div>

                        <ul>
                            <?php wp_list_categories(
                                array(
                                    'title_li' => '', // Removes the "Categories" title
                                )
                            ); ?>
                        </ul>
                    </aside>

                    <!-- Recent entries widget-->
                    <aside class="widget widget-recent-entries-custom">
                        <div class="widget-title">
                            <h6>Recent Posts</h6>
                        </div>
                        <ul>
                            <?php
                            $recent_posts = wp_get_recent_posts(
                                array(
                                    'numberposts' => 3, // Number of recent posts to display
                                    'post_status' => 'publish', // Display only published posts
                                )
                            );
                            foreach ($recent_posts as $post):
                                setup_postdata($post); ?>
                                <li class="clearfix">
                                    <div class="wi">
                                        <a href="<?php echo get_permalink($post['ID']); ?>">
                                            <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail', array('class' => 'img-fluid rounded')); ?>
                                        </a>
                                    </div>
                                    <div class="wb">
                                        <a href="<?php echo get_permalink($post['ID']); ?>">
                                            <?php echo $post['post_title']; ?>
                                        </a>
                                        <span class="post-date"><?php echo get_the_date(); ?></span>
                                    </div>
                                </li>
                            <?php endforeach;
                            wp_reset_postdata(); ?>

                        </ul>
                    </aside>

                    <!-- Tags widget-->
                    <aside class="widget widget-tag-cloud">
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
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!--blog section end-->
<?php wp_footer() ?>
<?php get_footer() ?>