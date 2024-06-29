<?php
/*
    Template Name: Privacy Policy
*/
?>



<?php get_header() ?>
<?php wp_head() ?>

<?php get_template_part('template-parts/breadcrumb/breadcrumb', 'default') ?>

<section class="about-us-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="about-us-content-wrap">
                    <strong class="color-secondary"></strong>
                    <h2><?php the_title();?></h2>
                    <span class="animate-border mb-4"></span>
                    <div class="privacy-cont">
                        <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php wp_footer() ?>
<?php get_footer() ?>