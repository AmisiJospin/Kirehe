<!--
Name: Jospin Amisi
Location: Lilongwe, Malawi
Phone Number: +265992129078
-->

<!DOCTYPE html>
	<html>
		<head>
			<title>Positionnement</title>
			<link rel="stylesheet" href="css/style.css" />
			<meta charset="utf-8" />
		


<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1//style.css" media="screen" />
	<script type="text/javascript" src="engine1//jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

</head>

	<body>
		<div class="corps">
			<div id="entete">
				<div class="logo">
					<a href="."><img src="images/gira-logo.png" /></a>
				</div>
				
				<div class="entete_droite">
					<div id="box">
						<div class="search_box">
							<form action="" method="GET">
								<input type="text" name="recherche" class="recherche" />
								<input type="submit" name="bouton" class="button" value="" />
							</form>
						</div>
					<div class="social_box">
						<a href="http://facebook.com/kirehe" target="_blank"><span class="fbk"></span></a>
						<a href="http://twitter.com/kirehe_page" target="_blank"><span class="twitter"></span></a>
						<a href="http://youtube.com/page" target="_blank"><span class="youtube"></span></a>
					</div>
				</div>
			</div>
			
			<div id="menu">
				<ul>
					<a href="index.php"><li>Accueil</li></a>
					<a href="lecture.php"><li class="menu_active">Apropos de Nous</li></a>
					<a href="activites.html"><li>Nos Activites</li></a>
					<a href="objectif.html"><li>Objectifs</li></a>
					<a href="programme.html"><li>Programmes</li></a>
					<a href="video.html"><li>Videos</li></a>
					<a href="contact.php"><li class="dernier_menu">Contactez-nous</li></a>
				</ul>
			</div>
			
			<div id="contenu">
					<ul>
						<?php
							include('connexion.php');
							$requete = $bdd -> prepare('SELECT * FROM contact');
							$requete -> execute() or die(print_r($requete->errorInfo()));
							
							while($donnee = $requete -> fetch())
							{
								echo '<li>'. $donnee['nom'] .' '. $donnee['prenom'] .'</li>';
							}
						?>
					</ul>
			
				<div id="page">
					
				</div>
			
			<div id="pied_de_page">
				<img src="images/bg-footer.png" />
			</div>
		
		</div>
		
	</body>
	</html>
