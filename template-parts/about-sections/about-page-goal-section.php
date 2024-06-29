<!--About Section Goal Start-->
<section class="goal-sec ptb-100">
  <div class="container">
    <div class="row">
    <?php if( have_rows('goal_column')): ?>
      <?php while(have_rows('goal_column')) : the_row(); ?>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="goal-main">
            <div class="goal-img">
              <img src="<?php echo get_sub_field('goal_image')?>" alt="">
            </div>
            <div class="goal-head">
              <h4><?php the_sub_field('goal_head')?></h4>
            </div>
            <div class="goal-para">
              <p>
              <?php the_sub_field('goal_para')?>
              </p>
            </div>
          </div>
        </div>
      <?php endwhile;?>
      <?php else : ?>
    <?php endif;?>
    </div>
  </div>
</section>
<!--About Section Goal End-->