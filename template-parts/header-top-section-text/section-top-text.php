<?php
    $post_id = get_queried_object_id();
?>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="section-heading text-center mb-5">
            <strong class="color-secondary"><?php echo get_field('head_span', $post_id); ?></strong>
            <h2><?php echo get_field('main_heading', $post_id); ?></h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">
                <?php echo get_field('section_paragraph', $post_id); ?>
            </p>
        </div>
    </div>
</div>