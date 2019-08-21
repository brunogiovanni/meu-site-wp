
<div class="container corpo">
	<h1>Blog</h1>
	<hr>
	<?php
	$args = ['post_type' => 'post', 'orderby' => 'post_date', 'order' => 'desc'];
	$posts = get_posts($args);
	?>
	<?php if ($posts) : ?>
		<div class="row">
			<?php foreach ($posts as $post) : setup_postdata($post); ?>
				
				<div class="col-sm-4">
					<div class="form-group">
						<div class="card">
							<img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid card-img-top" alt="" lazyload>
							<div class="card-body">
								<h5 class="card-title">
									<?php the_title(); ?>
								</h5>
								<a href="<?php the_permalink(); ?>" class="btn btn-primary">Leia mais</a>
							</div>
						</div>
					</div>
				</div>

			<?php endforeach; ?>
		</div>

		<?php
		the_posts_pagination( array(
			'prev_text' => '<span class="screen-reader-text"><<</span>',
			'next_text' => '<span class="screen-reader-text">>></span>',
			'before_page_number' => '<span class="meta-nav screen-reader-text"> </span>',
		) );
		?>
	<?php endif; ?>
</div>