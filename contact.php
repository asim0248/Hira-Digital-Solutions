<?php
/*
  Template Name: Contact
*/
?>

<?php get_header() ?>
<?php wp_head() ?>

<?php get_template_part('template-parts/breadcrumb/breadcrumb', 'default') ?>

<!--contact us promo start-->
<?php 
  $card_phone = get_theme_mod('digimark_contact_card_phone');
  $card_visit = get_theme_mod('digimark_contact_card_visit');
  $card_mail = get_theme_mod('digimark_contact_card_mail');
  $card_chat = get_theme_mod('digimark_contact_card_chat');
?>
<section class="contact-us-promo pt-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
          <div class="card-body py-5">
            <div class="pb-2">
              <span class="ti-mobile icon-sm color-secondary"></span>
            </div>
            <div>
              <h5 class="mb-0">Call Us</h5>
              <p class="text-muted mb-0"><?php echo esc_html($card_phone)?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
          <div class="card-body py-5">
            <div class="pb-2">
              <span class="ti-location-pin icon-sm color-secondary"></span>
            </div>
            <div>
              <h5 class="mb-0">Visit Us</h5>
              <p class="text-muted mb-0"><?php echo esc_html($card_visit)?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
          <div class="card-body py-5">
            <div class="pb-2">
              <span class="ti-email icon-sm color-secondary"></span>
            </div>
            <div>
              <h5 class="mb-0">Mail Us</h5>
              <p class="text-muted mb-0"><?php echo esc_html($card_mail)?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card single-promo-card single-promo-hover text-center shadow-sm">
          <div class="card-body py-5">
            <div class="pb-2">
              <span class="ti-headphone-alt icon-sm color-secondary"></span>
            </div>
            <div>
              <h5 class="mb-0">Live Chat</h5>
              <p class="text-muted mb-0"><?php echo esc_html($card_chat)?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--contact us promo end-->

<!--contact us section start-->
<?php 
  $form_head = get_theme_mod('digimark_contact_form_head');
  $form_para = get_theme_mod('digimark_contact_form_para');
  $form_facebook = get_theme_mod('digimark_contact_form_facebook');
  $form_linkedin = get_theme_mod('digimark_contact_form_linkedin');
  $form_instagram = get_theme_mod('digimark_contact_form_instagram');
  $form_twitter = get_theme_mod('digimark_contact_form_twitter');
?>
<section class="contact-us-section ptb-100">
  <div class="container contact">
    <div class="col-12 pb-3 message-box d-none">
      <div class="alert alert-danger"></div>
    </div>
    <div class="row justify-content-around">
      <div class="col-md-6">
        <div class="contact-us-form gray-light-bg rounded p-5">
          <h4>Ready to get started?</h4>
          <?php echo apply_shortcodes( '[contact-form-7 id="3f99b98" title="Contact Us Form"]' ); ?>
        </div>
      </div>
      <div class="col-md-5">
        <div class="contact-us-content">
          <h2><?php echo esc_html($form_head)?>
          </h2>
          <p class="lead">
          <?php echo esc_html($form_para)?>
          </p>

          <hr class="my-5">
          <span><strong>Phone Number:</strong> <a href="tel:<?php echo esc_html($card_phone)?>" class="link-color"><?php echo esc_html($card_phone)?></a></span>
          <br>
          <span><strong>Email:</strong> <a href="mailto:<?php echo esc_html($card_mail)?>"
              class="link-color"><?php echo esc_html($card_mail)?></a></span>

          <hr class="my-5">

          <h2>Follow Us
          </h2>
          <ul class="cont-follow">
            <li class="list-inline-item tooltip-hover">
              <a href="<?php echo esc_html($form_facebook)?>" class="rounded"><span class="ti-facebook"></span></a>
            </li>
            <li class="list-inline-item tooltip-hover">
              <a href="<?php echo esc_html($form_twitter)?>" class="rounded"><span class="ti-twitter"></span></a>
            </li>
            <li class="list-inline-item tooltip-hover">
              <a href="<?php echo esc_html($form_linkedin)?>" class="rounded"><span class="ti-linkedin"></span></a>
            </li>
            <li class="list-inline-item tooltip-hover">
              <a href="<?php echo esc_html($form_instagram)?>" class="rounded"><span class="ti-instagram"></span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--contact us section end-->

<?php $find_map = get_theme_mod('digimark_footer_find_map'); ?>

<section class="contact-map-section pt-100">
  <div class="contact-map">
    <iframe
      src="<?php echo esc_html($find_map)?>"
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>

<?php wp_footer() ?>
<?php get_footer() ?>