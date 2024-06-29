<!--header section start-->
<section class="hero-section ptb-100 gradient-overlay"
    style="background: url('<?php the_field('breadcrumb_image') ?>')no-repeat center center / cover">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0"><?php single_cat_title(); ?></h1>
                    <div class="custom-breadcrumb">
                        <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                            <li class="list-inline-item breadcrumb-item"><a
                                    href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                            <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="list-inline-item breadcrumb-item active"><?php single_cat_title(); ?></li>
                                    
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--header section end-->