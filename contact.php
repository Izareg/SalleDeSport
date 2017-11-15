<?php 
	$page = 'contact';
	require_once('parts/header.php');
?>

<!doctype html>
<html>
	<head>
		<title>Contact</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/contact-style.css">
	</head>
	<body id="contact">
	<section>
			<div class="section-content">
				<h1 class="section-header"><span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Biscotto 3000</span></h1>
				<h3>Nous contacter</h3>
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
	</body>
</html>