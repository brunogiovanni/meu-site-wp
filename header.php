<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/stickyfooter.css">

	<?php wp_head(); ?>
</head>
<body>
	<!-- cabecalho -->
	<div class="row-fluid">
		<div class="header">
			<div class="header-title container">
				<div class="row">
					<div class="col-sm-2">
						<a href="<?php echo site_url(); ?>">
							<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="logo" title="Bruno Giovanni - Desenvolvedor" class="img-fluid">
						</a>
					</div>
					<div class="col-sm-10">
						<h1>
							Bruno Giovanni
						</h1>
						<h4>Desenvolvedor</h4>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- menu -->
	<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?php echo site_url(); ?>">BG</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    	<span class="navbar-toggler-icon"></span>
		  	</button>

		  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	<ul class="navbar-nav mr-auto">
		      		<li class="nav-item active">
				        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				    </li>
		      		<li class="nav-item">
		        		<a class="nav-link" href="#">Link</a>
		      		</li>
		      		<li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				        	Dropdown
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          	<a class="dropdown-item" href="#">Action</a>
				          	<a class="dropdown-item" href="#">Another action</a>
				          	<div class="dropdown-divider"></div>
				    	    <a class="dropdown-item" href="#">Something else here</a>
				        </div>
				    </li>
		      		<li class="nav-item">
		        		<a class="nav-link disabled" href="#">Disabled</a>
		      		</li>
		    	</ul>
		    	<form class="form-inline my-2 my-lg-0">
		      		<input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Procurar">
		     		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">
		     			<i class="fa fa-search"></i>
		     		</button>
		    	</form>
		  	</div>
	  	</div>
	</nav> -->