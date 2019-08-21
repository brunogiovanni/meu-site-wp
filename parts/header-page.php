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

	<!-- menu -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?php echo site_url(); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="logo" title="Bruno Giovanni - Desenvolvedor" class="img-fluid" width="60">
			</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>

		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	<ul class="navbar-nav mr-auto">
		      		<li class="nav-item active">
				        <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
				    </li>
		      		<li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="<?php echo site_url(); ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				        	Blog
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				        	<?php
							$categories = listarCategorias();
							foreach ($categories as $category) : ?>
					          	<a class="dropdown-item" href="<?php echo get_category_link( $category->term_id ) ?>">
					          		<?php echo $category->name; ?>
					          	</a>
				            <?php endforeach; ?>
				        </div>
				    </li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="<?php echo site_url(); ?>/projetos">Portfólio</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="<?php echo site_url(); ?>/servicos">Serviços</a>
		      		</li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="<?php echo site_url(); ?>/contato">Contato</a>
		      		</li>
		    	</ul>
		    	<form class="form-inline my-2 my-lg-0" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
		      		<input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Procurar" name="s">
		     		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">
		     			<i class="fa fa-search"></i>
		     		</button>
		    	</form>
		  	</div>
	  	</div>
	</nav>