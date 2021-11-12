<?php
	//verification des sessions de l'utilisateur.
	//il sera utile pour toutes les pages dans le dossier Admin
	
	include('connexion.php');
	session_start();
	
	$reqt = $bdd ->prepare('SELECT * FROM utilisateur WHERE login = ? and mdp = ?');
	$reqt -> execute(array($_SESSION['login'], $_SESSION['mdp']));
	
	$trouve = $reqt -> rowCount();
	
	if($trouve == 0)
	{
		header('Location: ../login.php');
	}
	else
	{
		$data = $reqt -> fetch();
		$_SESSION['nom'] = $data['nom'];
	}


?>



<!DOCTYPE html>
	<html>
		<head>
			<title>Bienvenu </title>
			<link rel="stylesheet" href="css/style.css" />
			<meta charset="utf-8" />
		</head>
	
	<body>
		<div class="corps">
			<div id="entete">
				<div class="logo">
					<img src="images/gira-logo.png" />
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
						<a href="#"><span class="fbk"></span></a>
						<a href="#"><span class="twitter"></span></a>
						<a href="#"><span class="youtube"></span></a>
					</div>
				</div>
			</div>
			
			<div id="menu">
				<ul>
					<a href="index.php"><li>Accueil</li></a>
					<a href="lecture.php"><li>Apropos de Nous</li></a>
					<a href="insertion.php"><li>Nos Activites</li></a>
					<li>Objectifs</li>
					<li>Programmes</li>
					<a href="video.html"><li class="menu_active">Videos</li></a>
					<a href="contact.php"><li class="dernier_menu">Contactez-nous</li></a>
				</ul>
			</div>
			
			<div id="contenu">
				
				
				<div id="page">
					<h1>BIENVENUE SUR NOTRE ESPACE ADMIN</h1>
					<?php echo $_SESSION['login']; ?>
				
				</div>
			</div>
			
			<div id="pied_de_page">
				<img src="images/bg-footer.png" />
			</div>
		
		</div>
		
	</body>
	</html>