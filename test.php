<?php 					

		include('connexion.php');

	 if(isset($_POST['boutonenvoyer']))
	{
				
				$error = 0;
			
			
			if (!isset($_POST['login']) || empty($_POST['login']))
				{
					$error = 1;
				}
			if (!isset($_POST['mdp']) || empty($_POST['login']))  
				{
					$error = 1;
				}
			
			if ($error ==0)  
				{
					$login = $_POST['login'];
					$mdp = $_POST['mdp'];
					
					$demande = $bdd ->prepare('SELECT * FROM utilisateur WHERE login = ? and mdp = ?');
					$demande -> execute(array($login, $mdp));
					
					$trouve = $demande -> rowCount();
					
					if($trouve == 1)
					{
						header('Location: admin/index.php');
						
						session_start();
						
						$_SESSION['mdp'] = $mdp;
						$_SESSION['login'] = $login;
					}
					else
					{
						echo 'Votre login et mot de passe n\'exite pas';
					}
				}
				
			else 
				{
					echo 'Remplissez tous les champs';
				}
	}
?>