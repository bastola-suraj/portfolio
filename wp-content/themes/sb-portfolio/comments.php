<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sb-portfolio
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

?>
<div class="comment-box animate-box">
    <h2 class="colorlib-heading-2"><? echo comments_number( 'No comments yet', 'One comment', '% Comments' ) ?></h2>
	<?php
	wp_list_comments( array(
		'callback' => function ( $comment, $args, $depth ) {
			?>
            <div class="comment-post">

                <div class="desc">
                    <h3>
                        <div class="user">
							<?php
							if ( $args['avatar_size'] != 0 ) {
								echo get_avatar( $comment, $args['avatar_size'] );
							}
							?>
							<?php printf( __( '%s' ), get_comment_author_link() ); ?> <span><i class="icon-calendar"></i> <?php echo get_comment_date(); ?></span>
                        </div>
						<?php
						if ( $comment->comment_approved == 0 ) {
							?>
                            <small><span><?php _e( 'Your Comment is awaiting approval' ); ?></span></small>
							<?php
						}
						?>
                    </h3>
                    <?php comment_text(); ?>
                </div>
            </div>
            <span>
                <?php comment_reply_link(
	                array_merge(
		                $args,
		                array(
			                'add_below' => 'Reply',
			                'depth'     => $depth,
			                'max_depth' => $args['max_depth'],
		                )
	                )
                );
                ?>
            </span>
            <span>
                <?php edit_comment_link( __( '(Edit)' ), '', '' ); ?><br>
            </span>

			<?php
		}
	) );
	?>
</div>

<div class="comment-area animate-box">
<!--    <h2 class="colorlib-heading-2">Leave a comment</h2>-->
	<?php comment_form(); ?>
</div>