<!--hero section start-->
<?php wp_head()?>
<?php 
    $page_head_h1 = get_theme_mod("digimark_page_notFound_h1");
    $page_head_h2 = get_theme_mod("digimark_page_notFound_h2");
    $page_head_para = get_theme_mod("digimark_page_notFound_para");
?>
<section class="hero-section ptb-100 gradient-overlay full-screen"
             style="background: url('<?php echo get_template_directory_uri()?>/assets/img/slider-img-2.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="error-content text-center text-white">
                        <div class="notfound-404"><h1 class="text-white"><?php echo esc_html($page_head_h1)?></h1></div>
                        <h2 class="text-white"><?php echo esc_html($page_head_h2)?></h2>
                        <p class="lead"><?php echo esc_html($page_head_para)?></p><a class="btn outline-white-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">Go to Homepage</a></div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->