<?php get_header(); ?>

<!-- sobre -->
<div class="container">
	<div class="jumbotron">
		<?php
		$args = array('post_type' => 'page', 'pagename' => 'sobre');
		$my_page = get_posts($args);

		if ($my_page) :
			foreach ($my_page as $post) :
				setup_postdata($post);
				?>

				<h2><?php the_title(); ?></h2>

				<?php
				the_content();
			endforeach;
		else :
		?>
			<p>Nenhuma página encontrada!</p>
		<?php endif; ?>
	</div>
</div>

<!-- blog -->
<div class="container">
	<!-- <a href="<?php echo site_url(); ?>/blog"><h2>Blog</h2></a> -->
	<h2>Blog</h2>

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
</div>

<br>

<!-- contato -->
<div class="container">
	<div class="jumbotron">
		<?php
		$args = array('post_type' => 'page', 'pagename' => 'contato');
		$my_page = get_posts($args);

		if ($my_page) :
			foreach ($my_page as $post) :
				setup_postdata($post);
				?>

				<h2><?php the_title(); ?></h2>

				<?php
				the_content();
			endforeach;
		else :
		?>
			<p>Nenhuma página encontrada!</p>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>