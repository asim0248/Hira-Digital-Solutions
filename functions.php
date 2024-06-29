<?php
/*
    Theme Function
*/

//For Widgets block editor
add_theme_support('widgets-block-editor');

//For Feature Image
add_theme_support('post-thumbnails');

//support for logo
add_theme_support('custom-logo', array(
    'height' => 55,
    'width' => 200,
    'flex-height' => true,
    'flex-width' => true,

));

//register Nav menu
function menu_register(){
    register_nav_menus(
        array(
            'primary-menu' => __('Primary')
        )
    );
}
add_action('init','menu_register');

//Enqueue All Style Sheet files
function digi_theme_style(){
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/all.min.css', array(), null);
    wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.min.css', array(), null);
    wp_enqueue_style('jquery player', get_template_directory_uri().'/assets/css/jquery.mb.YTPlayer.min.css', array(), null);
    wp_enqueue_style('popup', get_template_directory_uri().'/assets/css/magnific-popup.css', array(), null);
    wp_enqueue_style('owl', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), null);
    wp_enqueue_style('owl theme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css', array(), null);
    wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), null);
    wp_enqueue_style('stylesheet', get_template_directory_uri().'/assets/css/style.css', array(), null);
    wp_enqueue_style('themify icons', get_template_directory_uri().'/assets/css/themify-icons.css', array(), null);
    wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&amp;display=swap');
}
add_action('wp_enqueue_scripts', 'digi_theme_style');

//Enqueue All Js Files
function digi_theme_scripts(){
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), null, true);
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery-3.5.0.min.js', array(), null, true);
    wp_enqueue_script('countdown', get_template_directory_uri().'/assets/js/jquery.countdown.min.js', array(), null, true);
    wp_enqueue_script('easing', get_template_directory_uri().'/assets/js/jquery.easing.min.js', array(), null, true);
    wp_enqueue_script('pie chart', get_template_directory_uri().'/assets/js/jquery.easy-pie-chart.js', array(), null, true);
    wp_enqueue_script('popup', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array(), null, true);
    wp_enqueue_script('mixit', get_template_directory_uri().'/assets/js/mixitup.min.js', array(), null, true);
    wp_enqueue_script('jquery player', get_template_directory_uri().'/assets/js/jquery.mb.YTPlayer.min.js', array(), null, true);
    wp_enqueue_script('owl carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(), null, true);
    wp_enqueue_script('popper', get_template_directory_uri().'/assets/js/popper.min.js', array(), null, true);
    wp_enqueue_script('main js', get_template_directory_uri().'/assets/js/scripts.js', array(), null, true);
    wp_enqueue_script('validator', get_template_directory_uri().'/assets/js/validator.min.js', array(), null, true);
    wp_enqueue_script('wow', get_template_directory_uri().'/assets/js/wow.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'digi_theme_scripts');

//This file is used for service custom post type 
require get_template_directory().'/inc/service-post.php';

//This file is used for WordPress Customizer API
require get_template_directory().'/inc/customizer.php';

//This file is used for portfolio custom post type 
require get_template_directory().'/inc/portfolio.php';

//This file is used for pricing custom post type 
require get_template_directory().'/inc/pricing.php';

//This file is used for testimonial custom post type 
require get_template_directory().'/inc/testimonial.php';

//Footer Quick Links Menu
function digimark_register_menus() {
    register_nav_menus(
        array(
            'footer_menu' => __('Footer Menu'),
        )
    );
}
add_action('init', 'digimark_register_menus');

//Footer Services Menu
function digimark_service_register_menus() {
    register_nav_menus(
        array(
            'service_menu' => __('Service Menu'),
        )
    );
}
add_action('init', 'digimark_service_register_menus');

// Footer Policy Menu
function digimark_policy_register_menus() {
    register_nav_menus(
        array(
            'policy_menu' => __('Policy Menu'),
        )
    );
}
add_action('init', 'digimark_policy_register_menus');

//This function is used for getting nav menus 
function digimark_get_menus() {
    $menus = array();
    $registered_menus = wp_get_nav_menus();
    foreach ($registered_menus as $menu) {
        $menus[$menu->term_id] = $menu->name;
    }
    return $menus;
}

function remove_category_base() {
    global $wp_rewrite;
    $wp_rewrite->category_base = '';
}
add_action('init', 'remove_category_base');

// Add support for widgets
add_theme_support('widgets');

// Register widget area

//This function is used for Single Services page, means that services details page
function custom_service_template($single_template) {
    global $post;

    if ($post->post_type == 'service') {
        $single_template = dirname(__FILE__) . '/single-services.php';
    }

    return $single_template;
}
add_filter('single_template', 'custom_service_template');

//This function is used for service custom post type, where i seprate the taxonomy of service post type
//This function i used because it get all categories that is added in by default posts type that why is it is used 
function digimark_service_category_taxonomy() {
    register_taxonomy(
        'service_category',
        'service',    
        array(
            'label' => __( 'Categories' ),
        )
    );
}
add_action( 'init', 'digimark_service_category_taxonomy', 0 );

//This function is used for pricing custom post type, where i seprate the taxonomy of pricing post type
//This function i used because it get all categories that is added in by default posts type that why is it is used 
function digimark_pricing_category_taxonomy() {
    register_taxonomy(
        'pricing_category', 
        'pricing',          
        array(
            'label' => __( 'Categories' ),
            // Add more arguments as needed
        )
    );
}
add_action( 'init', 'digimark_pricing_category_taxonomy', 0 );

//This function is used for portfolio custom post type, where i seprate the taxonomy of portfolio post type
//This function i used because it get all categories that is added in by default posts type that why is it is used 
function digimark_portfolio_category_taxonomy() {
    register_taxonomy(
        'portfolio_category', 
        'portfolio',          
        array(
            'label' => __( 'Categories' ),
            // Add more arguments as needed
        )
    );
}
add_action( 'init', 'digimark_portfolio_category_taxonomy', 0 );
