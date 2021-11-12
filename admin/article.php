<?php
	include('connexion.php');
	$requete = $bdd -> prepare('SELECT * FROM article');
	$requete -> execute() or die(print_r($requete->errorInfo()));
							
		while($donnee = $requete -> fetch())
			{
				echo '<li>'. $donnee['titre'] .' '. $donnee['photo'] .' '. $donnee['texte']. '</li>';
			}
?>