<!--footer section start-->
<footer class="footer-section">
    <!--footer top start-->
    <?php get_template_part('template-parts/footer/footer', 'default') ?>
    <!--footer top end-->

    <!--footer copyright start-->
    <div class="footer-bottom gray-light-bg py-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-lg-5">
                    <p class="copyright-text pb-0 mb-0">Copyrights © 20<?php the_time('y') ?> . All
                        rights reserved by
                        <a href="#"><?php bloginfo('name') ?></a>
                    </p>
                </div>
                <div class="col-md-7 col-lg-6 d-none d-md-block d-lg-block">
                    <?php

                    wp_nav_menu(
                        array(
                            'theme_location' => 'policy_menu',
                            'menu_class' => 'list-inline policy-nav text-right social-list',
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
<!--footer section end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->

<!--This template is Popup modal that is called when (Send my free proposal)
button that appear on hero section homepage -->
<?php get_template_part('template-parts/popup-modal/popup', 'default');?>


<?php wp_footer(); ?>

</body>

</html>