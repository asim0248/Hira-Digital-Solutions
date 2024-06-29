<header class="header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="<?php echo home_url() ?>">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                    bloginfo('name');
                }
                ?>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto nav-end" id="navbarSupportedContent">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary-menu',
                        'menu_class' => 'navbar-nav ml-auto menu',
                        'container' => false
                    )
                );
                ?>
            </div>
        </div>
    </nav>
</header>