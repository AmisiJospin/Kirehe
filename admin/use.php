<?php
	include('connexion.php');
	$requete = $bdd -> prepare('SELECT * FROM utilisateur');
	$requete -> execute() or die(print_r($requete->errorInfo()));
							
		while($donnee = $requete -> fetch())
			{
				echo '<li>'. $donnee['login'] .' '. $donnee['nom']. '</li>';
			}
?>