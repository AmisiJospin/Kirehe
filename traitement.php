<?php
		if(isset($_POST['boutonenvoyer']))
		{
			$compteur = 0;
			$erreur = "";
			if (empty($_POST['nom']))
			{
				$compteur++;
				$erreur .= $compteur .". Nom est Vide <br/>";
			}
			else
			{
				$nom = $_POST['nom'];
			}
			
			if (empty($_POST['pnom']))
			{
				$compteur++;
				$erreur .=$compteur .". Prénom est Vide";
			}
			else
			{
				$prenom = $_POST['pnom'];
			}
			
			if (empty($_POST['mdp']))
			{
				$compteur++;
				$erreur .=$compteur .". Mot de passe est Vide";
			}
			else
			{
				$mdp = $_POST['mdp'];
			}
			
			if (empty($_POST['telephone']))
			{
				$compteur++;
				$erreur .=$compteur .". votre telephone est Vide";
			}
			else
			{
				$tel = $_POST['telephone'];
			}
			
			if (empty($_POST['naissance']))
			{
				$compteur++;
				$erreur .=$compteur .". votre date de naissance est est Vide";
			}
			else
			{
				$date_naissance = $_POST['naissance'];
			}

			
			if (empty($_POST['email']))
			{
				$compteur++;
				$erreur .=$compteur .". E-mail est Vide";
			}
			else
			{
				$email = $_POST['email'];
			}
			
			if( empty($_POST['frite']) &&
				empty($_POST['riz']) &&
			    empty($_POST['viande']) &&
				empty($_POST['poisson']) &&
				empty($_POST['steak']))
			{
				$compteur++;
				$erreur .=$compteur .". Choisissez au moins un aliment <br/>";
			}
			else
			{
				if(isset($_POST['frite']))
				{
					$frite = $_POST['frite'];
				}
				
				else{
					$frite = 0;
				}
				
				if(isset($_POST['riz']))
				{
					$riz = $_POST['riz'];
				}
				else{
					$riz = 0;
				}
				
				if(isset($_POST['viande']))
				{
					$viande = $_POST['viande'];
				}
				else{
					$viande = 0;
				}
				
				if(isset($_POST['poisson']))
				{
					$poisson = $_POST['poisson'];
				}
				else{
					$poisson = 0;
				}
				
				if(isset($_POST['steak']))
				{
					$steak = $_POST['steak'];
				}
				else{
					$steak = 0;
				}
				
			}
			
			if(empty($_POST['age']))
				{
					$compteur++;
					$erreur .= $compteur.".Choisissez votre tranche d'age<br/>";
				}
			else
				{
					$age = $_POST['age'];
				}
	
			if(empty($_POST['texte']))
				{
					$compteur++;
					$erreur .= $compteur.".Laissez nous un message<br/>";
				}
			else
				{
					$texte = $_POST['texte'];
				}
	
			
		if($compteur == 0){
		
				include('connexion.php'); //connexion à la base de données
				
				$date_soumis = time();
				
				$requete = $bdd -> prepare('INSERT INTO contact (nom, prenom, mdp, email, telephone, date_naissance, frite, riz, viande, poisson, steak, tranche, date_soumission, texte) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
				
				$requete -> execute(array($nom, $prenom, $mdp, $tel, $date_naissance, $email, $frite, $riz, $viande, $poisson, $steak, $age, $texte, $date_soumis));
				
			echo '<p>Merci <strong> '.$nom .' '.$prenom .'</strong></p>';
			echo '<p>Votre message:<br> '.$texte .'</p>';
			echo '<p>Votre adresse: '.$email .'</p>';
			echo '<p>Votre telephone: '.$tel .'</p>';
			}
		
		else
			{
			echo 'Corrigez les erreurs suivants:<br/>'.$erreur;
			}

		
}

?>