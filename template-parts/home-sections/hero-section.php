<!--hero section start-->
<section class="hero-equal-height ptb-70"
        style="background: url('<?php echo get_template_directory_uri() ?>/assets/img/hero-bg-1.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-5">
                    <div class="hero-slider-content text-white pt-4">
                        <span><?php the_field('hero_span') ?></span>
                        <h1 class="text-white"><?php the_field('hero_heading'); ?></h1>
                        <p class="lead"><?php the_field('hero_para') ?></p>

                        <div class="action-btns mt-3">
                            <button href="#" type="button" class="btn secondary-solid-btn hero-btn-1" data-toggle="modal" data-target="#exampleModal">Send My free Proposal</button>
                            <a href="#" class="btn secondary-solid-btn  hero-btn-2">Book Free Consultation</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-7">
                    <div class="image-wrap">
                        <img src="<?php echo get_field('hero_image') ?>" alt="hero" class="img-fluid custom-width">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->