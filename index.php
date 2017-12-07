<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Projet Groupe - OnePage</title>
		
		
		<link rel="stylesheet" href="css/glide.core.min.css">
       <link rel="stylesheet" href="css/glide.theme.min.css">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<!-- Importation de jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://use.fontawesome.com/173d22a2d5.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.vide.min.js"></script>
		<script src="js/glide.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
	</head>
	
	<body>
		<header>
			<div class="text-center" id="bg-video" data-vide-bg="mp4: vid/header.mp4, poster: vid/video.jpg"
				data-vide-options="posterType: jpg, loop: true, muted: true, position: 0% 0%">
				<img src="img/header.png" alt="AFORMAC Vichy">
			</div>
			<nav class="navbar navbar-default navbar-fixed-top" >
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">
							<img alt="Logo AFORMAC" src="img/logo.png" id="logo-header">
						</a>
					</div>
					<div class="collapse navbar-collapse"  id="bs-example-navbar-collapse-1">
					  <ul class="nav navbar-nav navbar-right text-center">
							<li><a class="menu-principal" href="#bg-video">Accueil</a></li>
							<li><a class="menu-principal" href="#presentation">Présentation</a></li>
							<li><a class="menu-principal" href="#debouches">Débouchés</a></li>
							<li><a class="menu-principal" href="#galerie">Galerie</a></li>
							<li><a class="menu-principal" href="#team">Team</a></li>
							<li><a class="menu-principal" href="#adresse">Adresse</a></li>
							<li><a class="menu-principal" href="#contact">Contact</a></li>
					  </ul>
					</div>
				</div>
			</nav>
		</header>
		
		<main>
			<section class="container-fluid" id="presentation">
				<div class="row">
					
					<div class="col-xs-12 col-md-6">
						<h1>Présentation de la formation</h1>
						<p>
							Aformac est partenariat avec ONLINEFORMAPRO, pour notre école ACCESS CODE SCOOL VICHY, se donne pour objectif de proposer à tous l’accès le plus  direct au milieu professionnel de l’informatique et du numérique .
							La mission de notre école est de former les professionnels de l’informatique de demain,capables d’évoluer avec un esprits critique est aptes à comprendre leur environnement,  être une école  en phase avec la réalités techniques et professionnelles du secteur .
							Le filigrane de la formation étant que les apprenant(e)s d’ACS apprennent à apprendre et disposent ainsi des clés pour se lancer dans une carrière de développeur et pour évoluer  en tant que professionnel(le)s dans un univers numérique par nature en constance évaluation .  
			
						</p>
					</div>
					<div class="col-xs-12 col-md-6 text-center">
						<h2>Pour plus d'information</h2>
						<p>
							Téléchargez la plaquette ci-dessous :
						</p>
						<img src="img/pdf.png" alt="Logo PDF">
					</div>
				</div>
			</section>
			
			<?php include_once "inc/debouches.php" ?>
			
			<section id="galerie">
				<h2 class="text-center">PortOfolio</h2>
				<div id="gglide" class="glide glide--carousel glide--horizontal">
					<div class="glide__arrows">
						<button class="glide__arrow prev" data-glide-dir="<">prev</button>
						<button class="glide__arrow next" data-glide-dir=">">next</button>
					</div>
					<div class="glide__wrapper">
						<ul class="glide__track"> 
						   <?php
								$mycsv = fopen("data/image.csv" ,"r")or die("Unable to open data/image.csv!");
								while (!feof($mycsv)) {
									$csv = fgets($mycsv);
									$csv_explode =explode('|', $csv);
								   
									for ($i =0; $i <count($csv_explode); $i ++)
										{   echo '<li class="glide__slide">';
											
											echo "<img src=\"img/".$csv_explode[$i]."\">";
											echo '</li>';
									}
								}	
							?>
							
						</ul>
					</div>
					<div class="glide__bullets"></div>  
				</div>
			</section>
			
			<section class="container-fluid" id="team">
				<div class="row text-center">
					<h2>La team</h2>
					<h3>SOVANISTE POUR VOUS SERVIR</h3>
					
					<?php include_once "inc/equipe.php" ?>
					
					
				</div>
				<div class="row text-center">
					<div class="col-xs-12">
						<p>Des sites de 7 à 77 ans</p>
					</div>
				</div>
			</section>
			
			<?php include_once "inc/map.php" ?>
			
			<section id="contact" class="container-fluid">
				<div class="row text-center">
					<div class="col-xs-12">
						<h2>Besoin d'aide ?</h2>
						<h4>N'hésitez pas à nous contacter</h4>
					</div>
					<form id="formcontact">
						<div class="row">
								<div class="col-xs-12 col-md-6">
									<p>
										<input type="text" id="nom" placeholder="Nom" name="nom">
									</p>
									<p>
										<input type="text" id="prenom" placeholder="Prenom" name="prenom">
									</p>
									<p>
										<input type="email" id="mail" placeholder="Email" name="mail">
									</p>
									<p>
										Nous nous engageons à vous répondre sous 24h
									</p>
								</div>
								<div class="col-xs-12 col-md-6">
									<textarea id="message" placeholder="Message" name="message" rows="7"></textarea>
								</div>
						</div>
						<div class="row">
							<div class="col-xs-12">
								<input class ="btn btn-primary btn-lg" type="submit" id="valid" value="Envoi"/>
								<div id="result"></div>
							</div>
						</div>
					</form>
				</div>
			</section>
		</main>
		
		<footer class="container-fluid text-center">
			<div class="row"  id="social">
				<div class="col-xs-12 col-md-4">
					<a href="https://www.facebook.com/GroupeAFORMAC/" target="_blank"><i class="fa fa-facebook-official fa-3" aria-hidden="true"></i></a>
				</div>
				<div class="col-xs-12 col-md-4">
					<a href="https://twitter.com/GroupeAFORMAC" target="_blank"><i class="fa fa-twitter-square fa-3" aria-hidden="true"></i></a>
				</div>
				<div class="col-xs-12 col-md-4">
					<a href="#" target="_blank"><i class="fa fa-instagram fa-3" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="row" id="copyright">
				<i class="fa fa-copyright fa-1" aria-hidden="true"></i> SOVANISTE Prod. 2017
			</div>
		</footer>
		
		
	</body>
</html>