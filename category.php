<?php get_header(); ?>

<div class="container">
	<h1>Blog</h1>
	<hr>
	<?php if (have_posts()) : ?>
		<div class="row">
			<?php while (have_posts()) : the_post(); ?>
				
				<div class="col">
					<div class="card">
						<img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">
								<?php the_title(); ?>
							</h5>
							<p class="card-text">
								<?php the_excerpt(); ?>
							</p>
							<a href="<?php the_permalink(); ?>" class="btn btn-primary">Leia mais</a>
						</div>
					</div>
				</div>

			<?php endwhile; ?>
		</div>

		<?php
		the_posts_pagination( array(
			'prev_text' => '<span class="screen-reader-text"><<</span>',
			'next_text' => '<span class="screen-reader-text">>></span>',
			'before_page_number' => '<span class="meta-nav screen-reader-text"> </span>',
		) );
		?>
	<?php else : ?>
		<div class="row">
			<h2>Nada encontrado!</h2>
		</div>
	<?php endif; ?>

</div>

<?php get_footer(); ?>