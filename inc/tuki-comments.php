<?php
if( ! function_exists( 'tuki_comments' ) ):
function tuki_comments($comment, $args, $depth) {
?>


<div id="comment-<?php comment_ID(); ?>" class="single-comment justify-content-between d-flex">
    <?php if ($comment->comment_approved == '0') : ?>
    <em><?php esc_html_e('Your comment is awaiting moderation.','5balloons_theme') ?></em>
    <br />
    <?php endif; ?>
    <div class="user justify-content-between d-flex">
        <div class="thumb">
            <?php echo get_avatar($comment,$size='60',$default='http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g' ); ?>
        </div>
        <div class="desc">

            <?php comment_text(); ?>
            <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center">
                    <h5><?php echo get_comment_author(); ?></h5>
                    <p class="date">
                        <?php echo get_comment_date('F j, Y \a\t g:i a'); ?>
                    </p>
                </div>
                <div class="reply-btn">
                    <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => 'Reply'))) ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
endif;