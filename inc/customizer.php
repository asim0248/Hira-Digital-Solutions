<?php
/*
* Digimark Customizer
*/

function digimark_customize_register( $wp_customize ) {
    //This panel For Digimark Call To Action
    $wp_customize->add_panel('call_action_settings', array(
        'title' =>__('Call To Action Setting'),
        'priority'=> 10,
    ));
    $wp_customize->add_section('digimark_call_action', array(
        'title' =>'Call To Action Content',
        'panel'=> 'call_action_settings',
    ));

    //For Call To Action Heading
    $wp_customize->add_setting('call_action_head', array(
        'default'=> '',
        'sanitize_callback'=> 'sanitize_text_field',
    ));
    $wp_customize->add_control('call_action_head', array(
        'label' => __('Enter Call To Action Heading','digimark'),
        'section' => 'digimark_call_action',
        'type' => 'text',
    ));

    //For Call To Action Para
    $wp_customize->add_setting('call_action_para', array(
        'default'=> '',
        'sanitize_callback'=> 'sanitize_text_field',
    ));
    $wp_customize->add_control('call_action_para', array(
        'label' => __('Enter Call To Action Paragraph','digimark'),
        'section' => 'digimark_call_action',
        'type' => 'text',
    ));
    //For Call To Action Button text
    $wp_customize->add_setting('call_action_button_text', array(
        'default'=> '',
        'sanitize_callback'=> 'sanitize_text_field',
    ));
    $wp_customize->add_control('call_action_button_text', array(
        'label' => __('Enter Call To Action Button Text','digimark'),
        'section' => 'digimark_call_action',
        'type' => 'text',
    ));
    //For Call To Action Button Link
    $wp_customize->add_setting('call_action_button_link', array(
        'default'=> '#',
        'sanitize_callback'=> 'esc_url_raw',
    ));
    $wp_customize->add_control('call_action_button_link', array(
        'label' => __('Enter Call To Action Button Link','digimark'),
        'section' => 'digimark_call_action',
        'type' => 'text',
    ));

    //This panel For Digimark Media Links
    $wp_customize->add_panel('social_media_links', array(
        'title' =>__('Social Media'),
        'priority'=> 10,
    ));
    $wp_customize->add_section('digimark_social_media', array(
        'title' =>'Social Media Links',
        'panel'=> 'social_media_links',
    ));

    //For Facebook Link
    $wp_customize->add_setting('facebook_link', array(
        'default'=> '#',
        'sanitize_callback'=> 'esc_url_raw',
    ));
    $wp_customize->add_control('facebook_link', array(
        'label' => __('Facebook Link'),
        'section' => 'digimark_social_media',
        'type' => 'text',
    ));
    //For Twitter Link
    $wp_customize->add_setting('twitter_link', array(
        'default'=> '#',
        'sanitize_callback'=> 'esc_url_raw',
    ));
    $wp_customize->add_control('twitter_link', array(
        'label' => __('Twitter Link'),
        'section' => 'digimark_social_media',
        'type' => 'text',
    ));
    //For linkedIn Link
    $wp_customize->add_setting('linkedin_link', array(
        'default'=> '#',
        'sanitize_callback'=> 'esc_url_raw',
    ));
    $wp_customize->add_control('linkedin_link', array(
        'label' => __('LinkedIn Link'),
        'section' => 'digimark_social_media',
        'type' => 'text',
    ));
    //For Instagram Link
    $wp_customize->add_setting('instagram_link', array(
        'default'=> '#',
        'sanitize_callback'=> 'esc_url_raw',
    ));
    $wp_customize->add_control('instagram_link', array(
        'label' => __('Instagram Link'),
        'section' => 'digimark_social_media',
        
        'type' => 'text',
    ));

    //This Panel For Footer Settings
    $wp_customize->add_panel('digimark_footer_panel', array(
        'title' => __('Footer Settings', 'digimark'),
        'priority' => 20,
    ));

    //This Section For Footer About
    $wp_customize->add_section('digimark_footer_about_sec', array(
        'title' =>'Footer About Section',
        'panel'=> 'digimark_footer_panel',
    ));
    $wp_customize->add_setting('digimark_footer_about_logo', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'digimark_footer_logo_control', array(
        'label' => __('Footer Logo', 'digimark'),
        'section' => 'digimark_footer_about_sec',
        'settings' => 'digimark_footer_about_logo',
    )));
    $wp_customize->add_setting('digimark_footer_about_para', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('digimark_footer_about_para', array(
        'label' => __('About Paragraph'),
        'section' => 'digimark_footer_about_sec',
        'type' => 'text',
    ));

    //This Section For Footer Quick Links
    $wp_customize->add_section('digimark_footer_quick_sec', array(
        'title' =>'Quick Links',
        'panel'=> 'digimark_footer_panel',
    ));
    $wp_customize->add_setting('digimark_footer_quick_head', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('digimark_footer_quick_head', array(
        'label' => __('Heading'),
        'section' => 'digimark_footer_quick_sec',
        'type' => 'text',
    ));
    $wp_customize->add_setting('digimark_footer_menu_setting', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('digimark_footer_menu_control', array(
        'label' => __('Select Footer Menu', 'digimark'),
        'section' => 'digimark_footer_quick_sec',
        'settings' => 'digimark_footer_menu_setting',
        'type' => 'select',
        'choices' => digimark_get_menus(),
    ));

    //This Section For Footer Services 
    $wp_customize->add_section('digimark_footer_service_sec', array(
        'title' =>'Services',
        'panel'=> 'digimark_footer_panel',
    ));
    $wp_customize->add_setting('digimark_footer_service_head', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('digimark_footer_service_head', array(
        'label' => __('Heading'),
        'section' => 'digimark_footer_service_sec',
        'type' => 'text',
    ));
    $wp_customize->add_setting('digimark_footer_service_setting', array(
        'default' => '',
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('digimark_footer_service_control', array(
        'label' => __('Select service Menu', 'digimark'),
        'section' => 'digimark_footer_service_sec',
        'settings' => 'digimark_footer_service_setting',
        'type' => 'select',
        'choices' => digimark_get_menus(),
    ));

    //This Section For Footer Get In Touch
    $wp_customize->add_section('digimark_footer_gTouch_sec', array(
        'title' =>'Get In Touch',
        'panel'=> 'digimark_footer_panel',
    ));
    $wp_customize->add_setting('digimark_footer_touch_head', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('digimark_footer_touch_head', array(
        'label' => __('Heading'),
        'section' => 'digimark_footer_gTouch_sec',
        'type' => 'text',
    ));
    $wp_customize->add_setting('digimark_footer_touch_phone', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('digimark_footer_touch_phone', array(
        'label' => __('Phone Number'),
        'section' => 'digimark_footer_gTouch_sec',
        'type' => 'text',
    ));
    $wp_customize->add_setting('digimark_footer_touch_mail', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('digimark_footer_touch_mail', array(
        'label' => __('Email'),
        'section' => 'digimark_footer_gTouch_sec',
        'type' => 'text',
    ));

    //This Section For Footer Find Us
    $wp_customize->add_section('digimark_footer_find_sec', array(
        'title' =>'Find Us',
        'panel'=> 'digimark_footer_panel',
    ));
    $wp_customize->add_setting('digimark_footer_find_head', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('digimark_footer_find_head', array(
        'label' => __('Heading'),
        'section' => 'digimark_footer_find_sec',
        'type' => 'text',
    ));
    $wp_customize->add_setting('digimark_footer_find_map', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('digimark_footer_find_map', array(
        'label' => __('Map Link'),
        'section' => 'digimark_footer_find_sec',
        'type' => 'text',
    ));

    //This Panel For Page Not Found Content
    $wp_customize->add_panel('digimark_page_not_found', array(
        'title' => __('Page Not Found', 'digimark'),
        'priority' => 10,
    ));

    //This Section For Footer About
    $wp_customize->add_section('digimark_page_not_sec', array(
        'title' =>'Page Not Found Section',
        'panel'=> 'digimark_page_not_found',
    ));
    $wp_customize->add_setting('digimark_page_notFound_h1', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'digimark_page_notFound_h1', array(
        'label' => __('Heading H1', 'digimark'),
        'section' => 'digimark_page_not_sec',
        'type' => 'text',
    ));
    $wp_customize->add_setting('digimark_page_notFound_h2', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'digimark_page_notFound_h2', array(
        'label' => __('Heading H2', 'digimark'),
        'section' => 'digimark_page_not_sec',
        'type' => 'text',
    ));
    $wp_customize->add_setting('digimark_page_notFound_para', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'digimark_page_notFound_para', array(
        'label' => __('Heading Paragraph', 'digimark'),
        'section' => 'digimark_page_not_sec',
        'type' => 'text',
    ));

    //Contact Us Page Panel

    $wp_customize->add_panel('digimark_contact_page_panel', array(
        'title'=> 'Contact Page Settings',
        'priority'=> 10,
    ));

    //Contact Card Section
    $wp_customize->add_section('digimark_contact_top_card', array(
        'title' =>'Contact Card Section',
        'panel'=> 'digimark_contact_page_panel',
    ));
    //Card Phone
    $wp_customize->add_setting('digimark_contact_card_phone', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'digimark_contact_card_phone', array(
        'label' => __('Call Us', 'digimark'),
        'section' => 'digimark_contact_top_card',
        'type' => 'text',
    ));
    //Card Visit Us
    $wp_customize->add_setting('digimark_contact_card_visit', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'digimark_contact_card_visit', array(
        'label' => __('Visit Us', 'digimark'),
        'section' => 'digimark_contact_top_card',
        'type' => 'text',
    ));
    //Card Mail Us
    $wp_customize->add_setting('digimark_contact_card_mail', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'digimark_contact_card_mail', array(
        'label' => __('Mail Us', 'digimark'),
        'section' => 'digimark_contact_top_card',
        'type' => 'text',
    ));
    //Card Chat Us
    $wp_customize->add_setting('digimark_contact_card_chat', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'digimark_contact_card_chat', array(
        'label' => __('Live Chat', 'digimark'),
        'section' => 'digimark_contact_top_card',
        'type' => 'text',
    ));

    //Contact Form Content Section
    $wp_customize->add_section('digimark_contact_form_cont', array(
        'title' =>'Contact Form Content Section',
        'panel'=> 'digimark_contact_page_panel',
    ));
    //Contact Form Heading
    $wp_customize->add_setting('digimark_contact_form_head', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'digimark_contact_form_head', array(
        'label' => __('Heading', 'digimark'),
        'section' => 'digimark_contact_form_cont',
        'type' => 'text',
    ));
    //Contact Form Para
    $wp_customize->add_setting('digimark_contact_form_para', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( 'digimark_contact_form_para', array(
        'label' => __('Para', 'digimark'),
        'section' => 'digimark_contact_form_cont',
        'type' => 'text',
    ));
    //Contact Form Social Media
    $wp_customize->add_setting('digimark_contact_form_facebook', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'digimark_contact_form_facebook', array(
        'label' => __('Facebook', 'digimark'),
        'section' => 'digimark_contact_form_cont',
        'type' => 'text',
    ));
    //Contact Form Social Media

    //Contact Form Social Media Facebook
    $wp_customize->add_setting('digimark_contact_form_facebook', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'digimark_contact_form_facebook', array(
        'label' => __('Facebook', 'digimark'),
        'section' => 'digimark_contact_form_cont',
        'type' => 'text',
    ));
    //Contact Form Social Media Instagram
    $wp_customize->add_setting('digimark_contact_form_instagram', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'digimark_contact_form_instagram', array(
        'label' => __('Instagram', 'digimark'),
        'section' => 'digimark_contact_form_cont',
        'type' => 'text',
    ));
    //Contact Form Social Media Linkedin
    $wp_customize->add_setting('digimark_contact_form_linkedin', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'digimark_contact_form_linkedin', array(
        'label' => __('LinkedIn', 'digimark'),
        'section' => 'digimark_contact_form_cont',
        'type' => 'text',
    ));
    //Contact Form Social Media Twitter
    $wp_customize->add_setting('digimark_contact_form_twitter', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control( 'digimark_contact_form_twitter', array(
        'label' => __('Twitter', 'digimark'),
        'section' => 'digimark_contact_form_cont',
        'type' => 'text',
    ));



}
add_action('customize_register', 'digimark_customize_register');


?>