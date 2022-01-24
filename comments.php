<?php
if ( post_password_required() ) {
	return;
}
?>

<!--widget-comments-->
<div class="comments-area">
    <?php
	// You can start editing here -- including this comment!
	    if ( have_comments() ) :
		    $noonpost_comment_count = get_comments_number();
	    ?>
    <h4 class="template-title">
        <?php echo $noonpost_comment_count . ($noonpost_comment_count === '1' ? ' comment' : ' comments');?>
    </h4>
    <?php endif;?>
    <div class="comment-list">
        <?php
		wp_list_comments(
			array(
				'style'      => '',
				'short_ping' => true,
				'callback' => 'tuki_comments'
			)
		);
	?>
    </div>
    <?php
		the_comments_navigation();
		// If comments are closed and there are comments, let's leave a little note, shall we?
		    if ( ! comments_open() ) :
	?>
    <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'noonpost' ); ?></p>
    <?php
		endif;
	?>
    <!--Leave-comments-->
    <?php comment_form(array(
		'fields' => array(
			'author' => '<input type="text" placeholder="Enter your name" name="author" id="author" class="form-control"/>',
			'email' => '<input type="email" placeholder="Your Email" name="email" id="email" class="form-control"/>',
            'cookies' => ''
		),
        'comment_notes_before' => '',
		'comment_field' => '<textarea cols="30" rows="5" placeholder="Your message here" name="comment" id="comment" class="form-control w-100"></textarea>',
		'class_form' => 'widget-form',
		'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="button button-contactForm btn_1 boxed-btn">%4$s </button>',
		'title_reply' => '<h4 class="template-title">Leave a Reply</h4>',
        'class_submit' => 'btn -normal',
        'label_submit' => 'Send Message',
        'logged_in_as' => ''
	)); ?>
</div>