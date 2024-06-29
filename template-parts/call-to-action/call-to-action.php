    <?php
        $action_head = get_theme_mod('call_action_head');
        $action_para = get_theme_mod('call_action_para');
        $action_btn = get_theme_mod('call_action_button_text');
        $action_link = get_theme_mod('call_action_button_link');
    ?>
    <!--call to action section start-->
    <section class="call-to-action py-5 gray-light-bg">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-7">
                    <div class="subscribe-content">
                        <h3 class="mb-1"><?php echo esc_html( $action_head) ?></h3>
                        <p><?php echo esc_html($action_para)?></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="<?php echo esc_url($action_link)?>" class="btn secondary-solid-btn"><?php echo esc_html($action_btn)?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->