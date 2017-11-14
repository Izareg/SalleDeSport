<?php require_once('parts/header.php'); ?>

<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,700,800,900" rel="stylesheet"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/styleBiscotto.css">

	
<!-- Titre -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
			<h1 id="titre">Bienvenue sur <span>Biscotto 3000</span> <img class="logo" src="img/bisco.png"></h1>
			<p class="txt">Faites du sport avec des équipements haut de gamme à moindre coût</p>
			</div>
		</div><!-- fermeture class row -->
	</div>

	<div class="container diapo">
		<div class="row">
		<!-- carousel -->
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>    

			  </ol>

			  <!-- Slides -->
				<!-- image 1 -->
				<div class="carousel-inner" role="listbox">
				  <div class="item active">
				    <img src="img/Sport_1.jpg" alt="sport">
				    <div class="carousel-caption">A force de serrer, je vais me casser une dent
				    </div>
				  </div>
				 <!-- image 2 -->
				  <div class="item">
				    <img src="img/TresFeminine_1.jpg" alt="sport">
				    <div class="carousel-caption">Avant je ressemblais à Barbie
				    </div>
				  </div>
				  <!-- image 3 -->
				  <div class="item">
				    <img src="img/FoPaLacher_1.jpg" alt="sport">
				    <div class="carousel-caption">Surtout ne lâche pas !
				    </div>
				  </div>
				</div><!-- fermeture Slides -->

				  <!-- Controles -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
			</div><!-- fermeture class row -->
		</div><!-- fermeture container-fluid diapo -->

		<section>
				<div class="container col-md-12">
					<div class="row">
						<div class="col-md-7">
							<p class="paragraphe">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vehicula dapibus cursus. Quisque id lectus vitae odio congue elementum. Quisque rhoncus elementum elit eu fringilla. In a egestas tellus. Duis fermentum sagittis quam, id pulvinar diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent id eros ut nunc luctus ornare. Vestibulum consectetur nulla ut eros lacinia, euismod semper orci pulvinar. Nam blandit auctor ultricies. Vivamus convallis laoreet ipsum eu sodales. Etiam sed arcu vitae leo fermentum placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vehicula dapibus cursus.<br/> Quisque id lectus vitae odio congue elementum.Quisque rhoncus elementum elit eu fringilla. In a egestas tellus. Duis fermentum sagittis quam, id pulvinar diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent id eros ut nunc luctus ornare. Vestibulum consectet turpis egestas. Praesent id eros ut nur nulla ut eros lacinia, euismod semper orci pulvinar. Nam blandit auctor ultricies. Vivamus convallis laoreet ipsum eu sodales. Etiam sed arcu vitae leo fermentum placerat. 
								</p>
						</div>

						<div class="col-md-5">
							<aside class="blocDroit">
								<?php require_once('login.html') ?>
							</aside>
						</div>
					</div>
				</div> <!--fermeture div class row-->
		</section>

<?php require_once('parts/footer.php'); ?>
