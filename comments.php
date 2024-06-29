<?php
    comment_form(
        array(
            'fields' => array(
                'author' => '<div class="row"><div class="form-group col-md-6"><input id="author" class="form-control" name="author" type="text" placeholder="Name"></div>',
                'email' => '<div class="form-group col-md-6"><input class="form-control" id="email" name="email" type="email" placeholder="Email"></div>',
                'comment_field' => '<div class="form-group col-md-12"><textarea class="form-control" id="comment" name="comment" rows="8" placeholder="Comment" required></textarea></div></div>',
            ),
            'class_submit' => 'btn secondary-solid-btn',
            'label_submit' => 'Post Comment', 
        )
    );
?>

<div class="comment-list">
    <?php
    // Check if there are comments
    if (have_comments()):
        // Loop through each comment
        while (have_comments()):
            the_comment();
            ?>
            <!-- Comment -->
            <div class="comment">
                <div class="comment-author">
                    <?php echo get_avatar(get_comment_author_email(), 50); ?>
                </div>
                <div class="comment-body">
                    <div class="comment-meta">
                        <div class="comment-meta-author">
                            <a href="<?php echo get_comment_author_url(); ?>"><?php comment_author(); ?></a>
                        </div>
                        <div class="comment-meta-date">
                            <a
                                href="<?php echo esc_url(get_comment_link()); ?>"><?php printf(__('%1$s at %2$s', 'digimark'), get_comment_date(), get_comment_time()); ?></a>
                        </div>
                    </div>
                    <div class="comment-content">
                        <?php comment_text(); ?>
                    </div>
                    <div class="comment-reply">
                        <?php
                        if (isset($args['max_depth'])) {
                            comment_reply_link(
                                array_merge(
                                    $args,
                                    array(
                                        'depth' => $depth,
                                        'max_depth' => $args['max_depth'],
                                        'reply_text' => __('Reply', 'textdomain'),
                                    )
                                )
                            );
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php endwhile; // End of comment loop ?>
    <?php else: ?>
    <?php endif; ?>
</div>