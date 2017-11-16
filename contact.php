<?php require_once('parts/header.php'); ?>

	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<title>Contact Biscotto 3000</title>
	

		<!-- Titre -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					<h1 id="titre">Bienvenue chez <span>Biscotto 3000</span> <img class="logo" src="img/bisco.png"></h1>
					<p class="txt">En campagne ou ville, osez le style, optez pour la gonflette utile !</p>
					</div>
				</div><!-- fermeture class row -->
			</div>
	

	<main id="contact">
	<section>
			<div class="section-content">
				<h1>Nous contacter</h1>
			</div>
			<div class="contact-section">
			<div class="container">
				<form>
					<div class="col-md-12">
			  			<div class="form-group zboub">
			  				<label for="exampleInputUsername">Votre nom <span class="etoiles">*</span></label>
					    	<input type="text" class="form-control" id="" placeholder="Bonnisseur de la bath" required>
				  		</div>
				  		<div class="form-group zboub">
			  				<label for="exampleInputUsername">Votre prénom <span class="etoiles">*</span></label>
					    	<input type="text" class="form-control" id="" placeholder="Hubert" required>
				  		</div>
				  		<div class="form-group zboub">
					    	<label for="exampleInputEmail">Votre mail <span class="etoiles">*</span></label>
					    	<input type="email" class="form-control" id="exampleInputEmail" placeholder="votre mail" required>
					  	</div>	
					  	<div class="form-group zboub">
					    	<label for="telephone">Votre numéro de téléphone <span class="etoiles">*</span></label>
					    	<input type="tel" class="form-control" id="telephone" placeholder="Votre numéro" required>
			  			</div>
			  		</div>
			  		<div class="col-md-12">
			  			<div class="form-group zboub">
			  				<label for ="description"> Message</label>
			  			 	<textarea  class="form-control" id="description" placeholder="Votre message"></textarea>
			  			</div>
			  			<div>
			  				<button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Envoyer</button>
			  			</div>
			  			
					</div>
				</form>
			</div>
		</section>
	</main>
	<?php require_once('parts/footer.php'); ?>
</body>