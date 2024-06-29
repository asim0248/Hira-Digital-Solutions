<?php
/*
  Template Name: About Us
*/
?>
<?php wp_head() ?>
<?php get_header() ?>


<?php get_template_part('template-parts/breadcrumb/breadcrumb', 'default') ?>

<!--About Section Start-->
<?php get_template_part('template-parts/about-sections/about-page-section', 'default') ?>
<!--About Section End-->

<!--About Section Why Choose Start-->
<?php get_template_part('template-parts/about-sections/about-page-whychoose', 'default') ?>

<!--About Section Why Choose End-->

<!--About Section Goal Start-->
<?php get_template_part('template-parts/about-sections/about-page-goal-section', 'default') ?>
<!--About Section Goal End-->


<?php get_footer() ?>
<?php wp_footer() ?>