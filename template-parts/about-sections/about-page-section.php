<!--About Section Start-->
<section class="about-us-section ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6">
        <div class="about-us-img">
          <img src="<?php echo get_field('about_main_image')?>" alt="about us" class="img-fluid about-single-img">
          <img src="<?php echo get_field('about_image_bg')?>" alt="about bg" class="about-us-bg">
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="about-us-content-wrap">
          <strong class="color-secondary"><?php the_field('about_samall')?></strong>
          <h2><?php the_field('about_head')?>
          </h2>
          <span class="animate-border mb-4"></span>
          <p>
          <?php the_field('about_para')?>
          </p>
          <h3>
            <?php the_field('about_head_2')?>
          </h3>
          <?php if( have_rows('about_sec_list')): ?>
            <ul class="list-unstyled tech-feature-list">
                <?php while(have_rows('about_sec_list')) : the_row(); ?>
                <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong> <?php the_sub_field('about_short_list')?></strong>
                </li>
                <?php endwhile;?>
            </ul>

            <?php else: 
            echo 'Not Found';
            ?>
            <?php endif;?>
        </div>
      </div>
    </div>
  </div>
</section>
<!--About Section End-->