 <!--why choose us section start-->
 <section class="why-choose-us ptb-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="image-wrap">
                        <img src="<?php echo get_field('why_choose_image')?>" alt="why choose us" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="why-choose-us-wrap">
                        <strong class="color-secondary"><?php the_field('why_small_head')?></strong>
                        <h3><?php the_field('why_choose_head')?></h3>
                        <span class="animate-border mb-4"></span>
                        <p>
                            <?php the_field('why_choose_para')?>
                        </p>

                        <?php if(have_rows('why_choose_list')) :?>

                            <ul class="check-list-info">
                                <?php while(have_rows('why_choose_list')) : the_row();?>
                                    <li>
                                        <strong><?php the_sub_field('why_list')?>
                                        </strong>
                                    </li>
                                <?php endwhile;?>
                            </ul>
                            <?php else: ?>
                            <p>No todos found.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--why choose us section end-->