<?php get_header(); ?>

<div class="container">
	<h1>Categorias</h1>
	<hr>
	<div class="row">
		<?php
		$categories = listarCategorias();
		foreach ($categories as $category) : ?>
			<div class="col">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">
							<?php echo $category->name; ?>
						</h5>
						<p class="card-text">
							<?php echo $category->description; ?>
						</p>
						<a href="<?php echo get_category_link( $category->term_id ); ?>" class="btn btn-primary">Leia mais</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>

</div>

<?php get_footer(); ?>