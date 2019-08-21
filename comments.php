<div id="comentarios" class="container">
    <hr />

	<?php
	if ( have_comments() ) :
		?>
		<h4>
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				printf( _x( 'Um comentário para &ldquo;%s&rdquo;', 'comments title', 'bgbo' ), get_the_title() );
			} else {
				printf(
					_nx(
						'%1$s responder para &ldquo;%2$s&rdquo;',
						'%1$s respostas para &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'bgbo'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h4>

		<ul class="list-unstyled">
			<?php
				wp_list_comments(
					array(
						'avatar_size' => 100,
						'style'       => 'ul',
						'short_ping'  => true,
                        'reply_text'  => __( 'Responder', 'bgbo' ),
                        'per_page' => 5,
                        'reverse_top_level' => true
					)
				);
			?>
		</ul>

		<?php
		the_comments_pagination(
			array(
				'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'bgbo' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'bgbo' ) . '</span>',
			)
		);

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>

		<p class="no-comments"><?php _e( 'Comentários foram fechados para este post.', 'bgbo' ); ?></p>
		<?php
    endif;
    
	comment_form([
        'fields' => [
            'author' => '<div class="form-group"><label for="author">Nome:*</label><input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required" class="form-control"></div>',
            'email' => '<div class="form-group"><label for="email">E-mail:*</label><input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" class="form-control" required="required"></div>'
        ],
        'comment_field' => '<div class="form-group"><label for="comment">Comentário:*</label><textarea id="comment" name="comment" class="form-control" cols="45" rows="8" maxlength="65525" required="required"></textarea></div>',
		'class_submit' => 'btn btn-success',
		'title_reply' => 'Deixe um comentário'
    ]);
	?>

</div>