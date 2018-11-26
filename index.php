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
<?php
$args = array('post_type' => 'post', 'showposts' => 3);
$my_posts = get_posts($args);
if ($my_posts) : ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<h2>Últimas postagens</h2>
			</div>
			<!-- <div class="col-sm-2 text-right">
				<a href="<?php echo site_url(); ?>/posts" class="btn btn-info">
					Mais postagens
				</a>
			</div> -->
		</div>
		<div class="row">
			<?php
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
			<?php endforeach; ?>
		</div>
	</div>
<?php endif; ?>

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