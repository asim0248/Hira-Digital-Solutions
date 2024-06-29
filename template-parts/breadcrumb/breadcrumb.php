<!--header section start-->
<section class="hero-section ptb-100 gradient-overlay"
    style="background: url('<?php echo is_home() ? get_field('breadcrumb_image', get_option('page_for_posts')) : get_field('breadcrumb_image') ?>')no-repeat center center / cover">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <?php
                    // Check if it's the blog page
                    if (is_home() && !is_front_page()) {
                        // Get the blog page title
                        $blog_page_title = get_the_title(get_option('page_for_posts'));
                        ?>
                        <h1 class="text-white mb-0"><?php echo $blog_page_title; ?></h1>
                        <?php
                    } else {
                        ?>
                        <h1 class="text-white mb-0"><?php the_title(); ?></h1>
                        <?php
                    }
                    ?>
                    <div class="custom-breadcrumb">
                        <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                            <li class="list-inline-item breadcrumb-item"><a
                                    href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                            <?php
                                // Check if it's the blog page
                                if (is_home() && !is_front_page()) {
                                    // Get the blog page title
                                    $blog_page_title = get_the_title(get_option('page_for_posts'));
                                    ?>
                                    <li class="list-inline-item breadcrumb-item active"><?php echo $blog_page_title; ?></li>
                                    <?php
                                } else {
                                    ?>
                                    <li class="list-inline-item breadcrumb-item active"><?php the_title(); ?></li>
                                    <?php
                                }
                            ?>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--header section end-->
