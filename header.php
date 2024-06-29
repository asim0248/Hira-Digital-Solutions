<!doctype html>
<html <?php language_attributes()?> >

<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--title-->

    <?php
    // Check if it's the blog page
    if (is_home() && !is_front_page()) {
        // Get the blog page title
        $blog_page_title = get_the_title(get_option('page_for_posts'));
        ?>
        <title><?php echo $blog_page_title; ?> - Digital Marketing Agency In Pakistan</title>
        <?php
    } else {
        ?>
        <title><?php the_title() ?> - Digital Marketing Agency In Pakistan</title>
        <?php
    }
    ?>

    

    <?php wp_head(); ?>



</head>

<body>

    <!--header section start-->
    <?php get_template_part('template-parts/header/header', 'default') ?>
    <!--header section end-->