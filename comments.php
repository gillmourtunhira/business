<?php
//Comments
	if ( post_password_required() ) {
		return;
	}
?>
<div class="comments_area" id="comments">
	
	<?php 
		if ( have_comments() ) :
    		//Comments 
    ?>
    <h3 class="comments_title">
    	<?php
			printf( 
				esc_html( _nx( 'One Comment on &ldquo;%2$s&rdquo;', '%1$s Comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'business' )), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
		?>
</h3>
    <ul class="comment-list">
    	<?php
    		$args = array(
    			'walker' 			=> null,
    			'max_depth' 		=> 4,
    			'style'				=> 'ul',
    			'callback'			=> null,
    			'end-callback' 		=> null,
    			'type'				=> 'all',
    			'reply_text'		=> 'Reply',
    			'page'				=> '',
    			'per_page'			=> '',
    			'avatar_size'		=> 64,
    			'reverse_top_level' => true,
    			'reverse_children'	=> true,
    			'format'			=> current_theme_supports( 'html5', 'comment-list' ) ? 'html5' : 'xhtml',
    			'short_ping'		=> false,
    			'echo'				=> true
    		);
    		wp_list_comments( $args );
    	?>
    </ul>
    <?php 
    	if( !comments_open() && get_comments_number() ) :
     ?>
 		<p class="no-comments"><?php esc_html_e( 'Comments are closed', 'business' ); ?>
 		</p>
		<?php endif; ?>
    <?php endif; ?>

	<?php
		$fields = array(
			'author' =>
			    '<p class="comment-form-author"><label for="author">' . __( 'Name', 'domainreference' ) .
			    ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
			    '<input id="author" class="comments_input" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
			    '" required="required"/></p>',

			'email' =>
			    '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) .
			    ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
			    '<input id="email" class="comments_input" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
			    '" required="required"/></p>',
		);

		$args = array(
			'class_submit' => 'button_submit',
			'comment_field' => 
				'<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" class="comments_input" name="comment" rows="4" aria-required="true"></textarea></p>',
			'fields' => apply_filters( 'comment_form_default_fields', $fields )
		);

		comment_form( $args );

	?>

</div>
