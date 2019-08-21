<?php get_header(); ?>

<div class="container corpo">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<hr>
		<div class="row">
			<?php
			$args = array('post_type' => 'post', 'showposts' => 9);
			$my_posts = get_posts($args);
			if ($my_posts) :
				foreach ($my_posts as $post) :
					setup_postdata($post);
					?>
					
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

					<?php
				endforeach;
			endif;
			?>
		</div>
	<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>