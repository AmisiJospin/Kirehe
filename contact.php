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
					<a href="index.php"><li class="">Accueil</li></a>
					<a href="lecture.php"><li>Apropos de Nous</li></a>
					<a href="insertion.php"><li>Nos Activites</li></a>
					<a href="objectif.html"><li>Objectifs</li></a>
					<a href="programme.html"><li>Programmes</li></a>
					<a href="video.html"><li>Videos</li></a>
					<a href="contact.php"><li class="dernier_menu menu_active">Contactez-nous</li></a>
				</ul>
			</div>
			
			<div id="contenu">
				
			
				<div id="page">
					<p>								
					<h3 class="exe">Formulaire de contacts</h3>
						<div class="erreur">
							<?php include('traitement.php');?>
						</div>
						<form action="" method="POST">
							<table>
								<tr>
									<td>Nom:</td>
									<td><input type="text" name="nom" class="textform" value="" placeholder="Ex:Amisi"/></td>
								</tr>
								
								<tr>
									<td>Pr&eacute;nom:</td>
									<td><input type="text" name="pnom" class="textform" value="" placeholder="Ex: Jospin" /></td>
								</tr>
								
								<tr>
									<td>Adresse Electronique:</td>
									<td><input type="email" name="email" class="textform" value="" placeholder="Ex: jospinamissi@gmail.com"/></td>
								</tr>
								
								<tr>
									<td>Mot de passe:</td>
									<td><input type="password" name="mdp" class="textform" value="" placeholder="Ex: 000000"/></td>
								</tr>
								
								<tr>
									<td>T&eacute;l&eacute;phone:</td>
									<td><input type="tel" name="telephone" class="textform" value="" placeholder="Ex:(+257)75221379"/></td>
								</tr>
								
								<tr>
									<td>Date de Naissance:</td>
									<td><input type="date" name="naissance" class="textform" value="" placeholder="Ex: Le 20 Mars 1994"/></td>
								</tr>
								
								<tr>
									<td>Aliments Pr&eacute;fer&eacute;s:</td>
									<td>
									Frites <input type="checkbox" name="frite" class="text" value="1" checked="checked" />
									Riz <input type="checkbox" name="riz" class="text" value="2" />
									Poissons <input type="checkbox" name="poisson" class="text" value="3" />
									Viande <input type="checkbox" name="viande" class="text" value="4"/>
									Steak <input type="checkbox" name="steak" class="text" value="5"/>
									</td>
	
								</tr>
								
								<tr>
									<td>Tranche d'&acirc;ge:</td>
									<td>
									5 - 10 <input type="radio" name="age" class="text" checked="checked" value="bébé" />
									10 - 15 <input type="radio" name="age" class="text" value="gamin"/>
									15 - 20 <input type="radio" name="age" class="text" value="adolescent" />
									20 - 40 <input type="radio" name="age" class="text" value="mature" />
									40 - 90<input type="radio" name="age" class="text" value="adulte"/>
									</td>
	
								</tr>
								
								<tr>
									<td colspan="2">
										<h3>Ecrivez - Nous:</h3>
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