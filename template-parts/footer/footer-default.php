<!--footer top start-->
<div class="footer-top gradient-bg">
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-nav-wrap text-white">
                        <?php
                        $footer_logo = get_theme_mod('digimark_footer_about_logo');
                        $footer_para = get_theme_mod('digimark_footer_about_para');
                        ?>
                        <img src="<?php echo esc_url($footer_logo); ?>" alt="footer-logo" class="mb-2">
                        <p>
                            <?php echo esc_html($footer_para) ?>
                        </p>
                        <div class="social-nav mt-4">
                            <?php
                            $facebook = get_theme_mod('facebook_link');
                            $twitter = get_theme_mod('twitter_link');
                            $linkedin = get_theme_mod('linkedin_link');
                            $instagram = get_theme_mod('instagram_link');
                            ?>
                            <ul class="list-unstyled social-list mb-0">
                                <li class="list-inline-item tooltip-hover">
                                    <a href="<?php echo esc_html($facebook) ?>" class="rounded"><span
                                            class="ti-facebook"></span></a>
                                    <div class="tooltip-item">Facebook</div>
                                </li>
                                <li class="list-inline-item tooltip-hover"><a href="<?php echo esc_html($twitter) ?>"
                                        class="rounded"><span class="ti-twitter"></span></a>
                                    <div class="tooltip-item">Twitter</div>
                                </li>
                                <li class="list-inline-item tooltip-hover"><a href="<?php echo esc_html($linkedin) ?>"
                                        class="rounded"><span class="ti-linkedin"></span></a>
                                    <div class="tooltip-item">Linkedin</div>
                                </li>
                                <li class="list-inline-item tooltip-hover"><a href="<?php echo esc_html($instagram) ?>"
                                        class="rounded"><span class="ti-instagram"></span></a>
                                    <div class="tooltip-item">Instagram</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer-nav-wrap text-white">
                        <?php $quick_head = get_theme_mod('digimark_footer_quick_head') ?>
                        <h4 class="text-white"><?php echo esc_html($quick_head) ?></h4>
                        <div class="quick-main">
                            <?php
                            $footer_menu = get_theme_mod('digimark_footer_menu_setting');
                            if ($footer_menu) {
                                wp_nav_menu(
                                    array(
                                        'theme_location' => 'footer_menu',
                                        'menu_class' => 'nav flex-column',
                                    )
                                );
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <div class="footer-nav-wrap text-white">
                        <?php $service_head = get_theme_mod('digimark_footer_service_head') ?>
                        <h4 class="text-white"><?php echo esc_html($service_head) ?></h4>
                        <?php
                        $footer_menu = get_theme_mod('digimark_footer_service_setting');
                        if ($footer_menu) {
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'service_menu',
                                    'menu_class' => 'nav flex-column',
                                )
                            );
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-nav-wrap text-white">
                        <?php $touch_head = get_theme_mod('digimark_footer_touch_head') ?>
                        <h4 class="text-white"><?php echo esc_html($touch_head); ?></h4>
                        <ul class="get-in-touch-list">
                            <?php $touch_phone = get_theme_mod('digimark_footer_touch_phone') ?>
                            <li class="d-flex align-items-center py-2"><span class="fas fa-phone-alt mr-2"></span>
                                <?php echo esc_html($touch_phone); ?>
                            </li>
                            <?php $touch_mail = get_theme_mod('digimark_footer_touch_mail') ?>
                            <li class="d-flex align-items-center py-2"><span class="fas fa-envelope mr-2"></span>
                                <?php echo esc_html($touch_mail); ?>
                            </li>
                        </ul>
                        <form class="newsletter-form mt-3">
                            <input type="text" class="input-newsletter" placeholder="Enter your email" name="EMAIL"
                                required="" autocomplete="off">
                            <button type="submit" class="disabled" style="pointer-events: all; cursor: pointer;"><i
                                    class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12">
                    <?php
                    $find_head = get_theme_mod('digimark_footer_find_head');
                    $find_map = get_theme_mod('digimark_footer_find_map');
                        ?>
                    <div class="footer-nav-wrap text-white">
                        <h4 class="text-white"><?php echo esc_html($find_head) ?></h4>
                        <div class="foot-map">
                            <iframe src="<?php echo esc_html($find_map) ?>" style="border:0;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer top end-->