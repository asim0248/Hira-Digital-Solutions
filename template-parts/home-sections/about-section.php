<!--about section with promo start-->
<section class="about-with-promo pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content-wrap">
                        <strong class="color-secondary"><?php the_field('head_small')?></strong>
                        <h2><?php the_field('about_head')?></h2>
                        <span class="animate-border mb-4"></span>
                        <p>
                            <?php the_field('about_para')?>
                        </p>
                        <?php if( have_rows('about_list')): ?>
                            <ul class="check-list-info">
                                <?php while(have_rows('about_list')) : the_row(); ?>
                                    <li>
                                        <strong>
                                            <?php the_sub_field('list_text')?>
                                        </strong>
                                    </li>
                                <?php endwhile; ?>
                            </ul>
                            <?php else:?>
                                <p>No todos found.</p>
                        <?php endif;?>
                            <div class="download-btn mt-4">
                                <a href="<?php echo esc_attr(get_field('about_btn'))?>" class="btn secondary-solid-btn mr-3"> More About Us</a>
                            </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-img">
                        <img src="<?php echo get_field('about_image')?>" alt="about us" class="img-fluid about-single-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about section with promo end-->