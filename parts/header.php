<?php session_start(); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/style-nav.css">
		<link rel="stylesheet" type="text/css" href="css/stylefooter.css">
		<link rel="stylesheet" type="text/css" href="css/contact-style.css">
	</head>
	<body>
		<header class="text-center">
			    <nav class="[ navbar navbar-fixed-top ][ navbar-bootsnipp animate ]" role="navigation">
    	<div class="[ container ]">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="[ navbar-header ]">
				<button type="button" class="[ navbar-toggle ]" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="[ sr-only ]">Toggle navigation</span>
					<span class="[ icon-bar ]"></span>
					<span class="[ icon-bar ]"></span>
					<span class="[ icon-bar ]"></span>
				</button>
				<div class="[ animbrand ]">
					<a class="[ navbar-brand ][ animate ]" href="#">Biscotto 3000</a>
				</div>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="[ collapse navbar-collapse ]" id="bs-example-navbar-collapse-1">
				<ul class="[ nav navbar-nav navbar-right ]">
					<li class="[ visible-xs ]">
						<form action="http://bootsnipp.com/search" method="GET" role="search">
							<div class="[ input-group ]">
								<input type="text" class="[ form-control ]" name="q" placeholder="Search for snippets">
								<span class="[ input-group-btn ]">
									<button class="[ btn btn-primary ]" type="submit"><span class="[ glyphicon glyphicon-search ]"></span></button>
									<button class="[ btn btn-danger ]" type="reset"><span class="[ glyphicon glyphicon-remove ]"></span></button>
								</span>
							</div>
						</form>
					</li>
					<li><a href="index.php" class="[ animate ]">Accueil</a></li>
					<li>
						<a href="#" class="[ dropdown-toggle ][ animate ]" data-toggle="dropdown">Agenda <span class="[ caret ]"></span></a>
						<ul class="[ dropdown-menu ]" role="menu">
							<li><a href="#" class="[ animate ]">Blog <span class="[ pull-right glyphicon glyphicon-pencil ]"></span></a></li>
							<li><a href="#" class="[ animate ]">List of resources <span class="[ pull-right glyphicon glyphicon-align-justify ]"></span></a></li>
							<li><a href="#" class="[ animate ]">Download Bootstrap <span class="[ pull-right glyphicon glyphicon-cloud-download ]"></span></a></li>
							<li class="[ dropdown-header ]">Bootstrap Templates</li>
							<li><a href="#" class="[ animate ]">Browse Templates <span class="[ pull-right glyphicon glyphicon-shopping-cart ]"></span></a></li>
							<li class="[ dropdown-header ]">Builders</li>
							<li><a href="#" class="[ animate ]">Form Builder <span class="[ pull-right glyphicon glyphicon-tasks ]"></span></a></li>
							<li><a href="#" class="[ animate ]">Button Builder <span class="[ pull-right glyphicon glyphicon-edit ]"></span></a></li>
						</ul>
					</li>
					<li class="[ dropdown ]">
						<a href="contact.php" class="[ dropdown-toggle ][ animate ]" data-toggle="dropdown">Contact <span class="[ caret ]"></span></a>
						<ul class="[ dropdown-menu ]" role="menu">
							<li><a href="contact.php" class="[ animate ]">Formulaire <span class="[ pull-right glyphicon glyphicon-star ]"></span></a></li>
							<li><a href="#" class="[ animate ]">Tags  <span class="[ pull-right glyphicon glyphicon-tags ]"></span></a></li>
							<li class="[ dropdown-header ]">By Bootstrap Version</li>
							<li><a href="#" class="[ animate ]">3.2.0</a></li>
							<li><a href="#" class="[ animate ]">3.1.0</a></li>
							<li><a href="#" class="[ animate ]">3.0.3</a></li>
							<li><a href="#" class="[ animate ]">3.0.1</a></li>
							<li><a href="#" class="[ animate ]">3.0.0</a></li>
							<li><a href="#" class="[ animate ]">2.3.2</a></li>
						</ul>
					</li>

<!-- Modif header Isa -->
				<!-- mise en place d'un bouton connexion/déconnexion -->
					<li><a href="TestConnexionBDD.php" class="animate"><?php if (isset($_SESSION['email'])) echo 'Deconnexion'; else echo 'Connexion' ?></a></li>

					<!-- <li><a class="animate" href="#login">Connexion</a></li> -->
                    <li class="[ hidden-xs ]"><a href="#toggle-search" class="[ animate ]"><span class="[ glyphicon glyphicon-search ]"></span></a></li>
				</ul>
			</div>
		</div>
		<div class="[ bootsnipp-search animate ]">
			<div class="[ container ]">
				<form action="http://bootsnipp.com/search" method="GET" role="search">
					<div class="[ input-group ]">
						<input type="text" class="[ form-control ]" name="q" placeholder="Search for snippets and hit enter">
						<span class="[ input-group-btn ]">
							<button class="[ btn btn-danger ]" type="reset"><span class="[ glyphicon glyphicon-remove ]"></span></button>
						</span>
					</div>
				</form>
			</div>
		</div>
	</nav>
		</header>