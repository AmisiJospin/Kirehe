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
					<a href="lecture.php"><li>Apropos de Nous</li></a>
					<a href="insertion.php"><li class="menu_active">Nos Activites</li></a>
					<a href="objectif.html"><li>Objectifs</li></a>
					<a href="programme.html"><li>Programmes</li></a>
					<a href="video.html"><li>Videos</li></a>
					<a href="contact.php"><li class="dernier_menu">Contactez-nous</li></a>
				</ul>
			</div>
			
			<div id="contenu">
				
			
				<div id="page">
					<p>								
					<h3 class="exe">Formulaire d'ajouts</h3>
						<div class="erreur">
							<?php include('description.php');?>
						</div>
						<form action="" enctype="multipart/form-data" method="POST">
							<table>
								<tr>
									<td>Title:</td>
									<td><input type="text" name="titre" class="textform" value="" placeholder="Ex:Mission"/></td>
								</tr>
								
								<tr>
									<td>Photo:</td>
									<td><input type="file" name="photo" class="textform" value="" placeholder="Ex: Jospin" /></td>
								</tr>
								
								<tr>
									<td colspan="2">
										<h3>Votre Texte Ici:</h3>
										<textarea name="texte" class="message"  placeholder="Ex: Bonjour! Je suis ravi ......"></textarea>
									</td>
								</tr>

								
								<tr>
									<td colspan="2"><input type="submit" name="boutonenvoyer"  value="Envoyer" class="boutonenvoyer" /></td>
								</tr>
							</table>
						</form>
					</p>
				</div>
			</div>
			
			<div id="pied_de_page">
				<img src="images/bg-footer.png" />
			</div>
		
		</div>
		
	</body>
	</html>