<!--About Section Why Choose Start-->
<section class="why-choose-us ptb-100 gray-light-bg">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 col-lg-6">
        <div class="image-wrap">
          <img src="<?php echo get_field('ab_why_image')?>" alt="why choose us" class="img-fluid">
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="why-choose-us-wrap">
          <strong class="color-secondary"><?php the_field('ab_why_head_small')?></strong>
          <h3><?php the_field('ab_why_head')?></h3>
          <span class="animate-border mb-4"></span>
          <?php if( have_rows('ab_why_para_list')): ?>
            <ul class="list-with-icon">
              <?php while(have_rows('ab_why_para_list')) : the_row(); ?>
                <li class="d-flex align-items-start">
                  <img src="<?php echo get_sub_field('ab_why_lists')?>" width="35" class="mr-3" alt="list icon">
                  <div class="list-icon-info">
                    <strong><?php the_sub_field('ab_why_list_head')?>
                    </strong>
                    <p>
                    <?php the_sub_field('ab_why_list_para_')?>
                    </p>
                  </div>
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
<!--About Section Why Choose End-->