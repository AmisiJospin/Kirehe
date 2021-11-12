<!DOCTYPE html>
	<html>
		<head>
			<title>Admin</title>
			<link rel="stylesheet" href="css/admin.css" />
			<meta charset="utf-8" />
		</head>
	
	<body>
	<div id="corps">
		<div class="header">
			<p>ADMINISTRATION</p>
		</div>
		
		<div class="aside">
			<p>MENU</p>
			
			<ul>
				<a href="admin.php?rediger=1"><li>Rédiger</li></a>
				<a href="admin.php?ajouter=2"><li>Ajouter</li></a>
				<a href="admin.php?article=3"><li>Articles</li></a>
				<a href="admin.php?use=4"><li>Utilisateurs</li></a>
			</ul>
		</div>
			Nom des utilisateurs connectés
		<div class="section">
			<?php
				if(isset($_GET['rediger']))
				{
					include('rediger.php');
				}
			?>
			<?php
				if(isset($_GET['ajouter']))
				{
					include('ajouter.php');
				}
			?>
			
			<?php
				if(isset($_GET['article']))
				{
					include('article.php');
				}
			?>
			<?php
				if(isset($_GET['use']))
				{
					include('use.php');
				}
			?>
		</div>	
	
	
		<div id="footer">
			<p><a href="admin.php">Quitter</a></p>
		</div>
	
</div>
</body>
</html>