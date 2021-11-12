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
					<a href="index.php"><li class="menu_active">Accueil</li></a>
					<a href="lecture.php"><li>Apropos de Nous</li></a>
					<a href="insertion.php"><li>Nos Activites</li></a>
					<a href="login.php"><li>Objectifs</li></a>
					<a href="programme.html"><li>Programmes</li></a>
					<a href="video.html"><li>Videos</li></a>
					<a href="contact.php"><li class="dernier_menu">Contactez-nous</li></a>
				</ul>
			</div>
			
			<div id="contenu">
				


<div id="slide">
<!-- Start WOWSlider.com BODY section id=wowslider-container1 -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
<li><img src="data1/images/slider.jpg" alt="slider" title="slider" id="wows1_0"/></li>
<li><img src="data1/images/slider1.jpg" alt="slider1" title="slider1" id="wows1_1"/></li>
<li><img src="data1/images/slider2.jpg" alt="slider2" title="slider2" id="wows1_2"/></li>
<li><img src="data1/images/slider3.jpg" alt="slider3" title="slider3" id="wows1_3"/></li>
<li><a href="http://wowslider.com/vf"><img src="data1/images/slider4.jpg" alt="full screen slider" title="slider4" id="wows1_4"/></a></li>
<li><img src="data1/images/slider5.jpg" alt="slider5" title="slider5" id="wows1_5"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="slider"><img src="data1/tooltips/slider.jpg" alt="slider"/>1</a>
<a href="#" title="slider1"><img src="data1/tooltips/slider1.jpg" alt="slider1"/>2</a>
<a href="#" title="slider2"><img src="data1/tooltips/slider2.jpg" alt="slider2"/>3</a>
<a href="#" title="slider3"><img src="data1/tooltips/slider3.jpg" alt="slider3"/>4</a>
<a href="#" title="slider4"><img src="data1/tooltips/slider4.jpg" alt="slider4"/>5</a>
<a href="#" title="slider5"><img src="data1/tooltips/slider5.jpg" alt="slider5"/>6</a>
</div></div><span class="wsl"><a href="http://wowslider.com">image slider</a> by WOWSlider.com v6.4</span>
	<a href="#" class="ws_frame"></a>
	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="engine1//wowslider.js"></script>
	<script type="text/javascript" src="engine1//script.js"></script>
<!-- End WOWSlider.com BODY section -->



</div>
				
				<div id="page">
					<?php
						include('connexion.php');
						
						$requete = $bdd -> prepare('SELECT * FROM article');
						$requete -> execute() or die (print_r($requete->errorInfo()));
					
					while($donnee = $requete -> fetch())
					{
					echo '
					<div class="article">
						<div class="title">'. $donnee['titre'] .'</div>
						<a href=""><img src="images/'.$donnee['photo'] .'" width="320" height="150" alt="" /></a>
						<div class="description">
							'.$donnee['texte'] .'
						</div>
						<a href="lire.php?id_article='. $donnee['id_article'] .'"><center><span class="readmore">Lire Plus</span></a>;
					</div>
					';
				
					}
					?>
				
					<!--<div class="article">
						<div class="title">MISSION</div>
						<a href=""><img src="images/mission.jpg" width="320" height="150" alt="" /></a>
						<div class="description">
						So that's 37 girls who have just been given the opportunity to realize dreams they aren't yet even aware of. 
						37 girls who will be moving their heads from downcast to held up and not afraid to make eye contact. 
					
						</div>
						<a href=""><center><span class="readmore">Lire Plus</span></center></a>
					</div>
					
					<div class="article">
						<div class="title">VISION</div>
						<a href=""><img src="images/vision.jpg" width="320" height="150" alt="" /></a>
						<div class="description">
						So that's 37 girls who have just been given the opportunity to realize dreams they aren't yet even aware of. 
						37 girls who will be moving their heads from downcast to held up and not afraid to make eye contact. 
					
						</div>
						<a href=""><center><span class="readmore">Lire Plus</span></center></a>
				
					</div>
					
					<div class="article">
					<div class="title">VALEUR</div>
						<a href=""><img src="images/valeur.jpg" width="320" height="150" alt="" /></a>
						<div class="description">
						So that's 37 girls who have just been given the opportunity to realize dreams they aren't yet even aware of. 
						37 girls who will be moving their heads from downcast to held up and not afraid to make eye contact. 
					
						</div>
						<a href=""><center><span class="readmore">Lire Plus</span></center></a>
				
					</div>
					
				<div class="article">
						<div class="title">OBJECTIF</div>
						<a href=""><img src="images/photo5.jpg" width="320" height="150" alt="" /></a>
						<div class="description">
						So that's 37 girls who have just been given the opportunity to realize dreams they aren't yet even aware of. 
						37 girls who will be moving their heads from downcast to held up and not afraid to make eye contact. 
					
						</div>
						<a href=""><center><span class="readmore">Lire Plus</span></center></a>
					</div>
					
					<div class="article">
						<div class="title">DONATION</div>
						<a href=""><img src="images/photo8.jpg" width="320" height="150" alt="" /></a>
						<div class="description">
						So that's 37 girls who have just been given the opportunity to realize dreams they aren't yet even aware of. 
						37 girls who will be moving their heads from downcast to held up and not afraid to make eye contact. 
					
						</div>
						<a href=""><center><span class="readmore">Lire Plus</span></center></a>
				
					</div>
					
					<div class="article">
					<div class="title">ACTIVITE</div>
						<a href=""><img src="images/photo9.jpg" width="320" height="150" alt="" /></a>
						<div class="description">
						So that's 37 girls who have just been given the opportunity to realize dreams they aren't yet even aware of. 
						37 girls who will be moving their heads from downcast to held up and not afraid to make eye contact. 
					
						</div>
						<a href=""><center><span class="readmore">Lire Plus</span></center></a>
				
					</div>-->
				
				</div>
			</div>
			
			<div id="pied_de_page">
				<img src="images/bg-footer.png" />
			</div>
		
		</div>
		
	</body>
	</html>