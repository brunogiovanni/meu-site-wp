<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/stickyfooter.css">
	
	<?php wp_head(); ?>
</head>
<body>
	<?php wp_body_open(); ?>

	<div class="container">
		<div class="row socials">
			<div class="col-sm-4">
				<ul class="list-inline text-center">
					<li class="list-inline-item">
					<a href="https://dev.to/brunogiovanni7"><br />
					  <img src="https://d2fltix0v2e0sb.cloudfront.net/dev-badge.svg" alt="Bruno Giovanni&#039;s DEV Profile" title="Bruno Giovanni&#039;s DEV Profile" height="30" width="30" />
					</a>
					</li>
					<li class="list-inline-item"><a href="https://instagram.com/bgiovanni7" title="Instagram" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a></li>
					<li class="list-inline-item"><a href="https://twitter.com/brunogiovanni7" title="Twitter" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter-square"></i></a></li>
					<li class="list-inline-item"><a href="https://linkedin.com/in/brunobraganca" title="LinkedIn" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a></li>
					<li class="list-inline-item"><a href="https://github.com/brunogiovanni" title="GitHub" target="_blank" rel="noopener noreferrer"><i class="fab fa-github-square"></i></a></li>
					<li class="list-inline-item"><a href="https://wa.me/5531994230271" target="_blank" title="WhatsApp" rel="noopener noreferrer"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
					<li class="list-inline-item"><a href="https://t.me/brunogiovanni" target="_blank" title="Telegram" rel="noopener noreferrer"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
					<li class="list-inline-item"><a href="skype:brunobraganca7?chat" title="Skype"><i class="fab fa-skype"></i></a></li>
					<li class="list-inline-item"><a href="mailto:bruno@bgbo.com.br"><i class="fas fa-envelope" title="Email"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container text-center">
		<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="Bruno Giovanni" class="img-fluid" />
		<h1>Bruno Giovanni</h1>
		<h4>Desenvolvedor</h4>
	</div>

	<!-- sobre -->
	<div class="container jumbotron sobre">
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

	<!-- servicos -->
	<?php
	$args = array(
		'post_type' => 'portfolio',
		'showposts' => 3,
		'tax_query' => [
			[
				'taxonomy' => 'portfolio_category',
				'field' => 'term_id',
				'terms' => 53
			]
		]
	);
	$my_posts = get_posts($args);
	if ($my_posts) : ?>
		<div class="container servicos">
			<h2>Serviços</h2>
			<div class="row">
				<?php
				foreach ($my_posts as $post) :
					setup_postdata($post);
					?>
					<div class="col-sm-4">
						<div class="card">
							<img lazyload src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title() ?>">
							<div class="card-body">
								<h5 class="card-title">
									<?php the_title(); ?>
								</h5>
								<!-- <p class="card-text">
									<?php the_excerpt(); ?>
								</p> -->
								<a href="<?php the_permalink(); ?>" class="btn btn-primary">Saiba mais</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	<?php endif; ?>

	<!-- portfolio -->
	<?php
	$args = array(
		'post_type' => 'portfolio',
		'showposts' => 3,
		'tax_query' => [
			[
				'taxonomy' => 'portfolio_category',
				'field' => 'term_id',
				'terms' => [39,47,70]
			]
		]
	);
	$my_posts = get_posts($args);
	if ($my_posts) : ?>
		<div class="container portfolio">
			<h2><a href="<?php echo site_url(); ?>/projetos">Portfólio</a></h2>
			<div class="row">
				<?php
				foreach ($my_posts as $post) :
					setup_postdata($post);
					?>
					<div class="col-sm-4">
						<div class="card">
							<img lazyload src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title() ?>">
							<div class="card-body">
								<h5 class="card-title">
									<?php the_title(); ?>
								</h5>
								<!-- <p class="card-text">
									<?php the_excerpt(); ?>
								</p> -->
								<a href="<?php the_permalink(); ?>" class="btn btn-primary">Saiba mais</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	<?php endif; ?>

	<!-- blog -->
	<?php
	$args = array('post_type' => 'post', 'showposts' => 3);
	$my_posts = get_posts($args);
	if ($my_posts) : ?>
		<div class="container blog">
			<h2><a href="<?php echo site_url(); ?>/posts">Blog</a></h2>
			<div class="row">
				<?php
				foreach ($my_posts as $post) :
					setup_postdata($post);
					?>
					<div class="col-sm-4">
						<div class="card">
							<img lazyload src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title() ?>">
							<div class="card-body">
								<h5 class="card-title">
									<?php the_title(); ?>
								</h5>
								<!-- <p class="card-text">
									<?php the_excerpt(); ?>
								</p> -->
								<a href="<?php the_permalink(); ?>" class="btn btn-primary">Leia mais</a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	<?php endif; ?>

<?php get_footer(); ?>