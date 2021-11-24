/*
Name: Jospin Amisi
Location: Lilongwe, Malawi
Phone Number: +265992129078
*/

<?php
	if(isset($_POST['boutonenvoyer']))
	{
		$compteur = 0;
		$erreur = "";
		if (empty($_POST['titre']))
		{
			$compteur++;
			$erreur .= $compteur .". Votre titre est incorrect <br/>";
		}
		else
		{
			$titre = $_POST['titre'];
		}

		if (empty($_FILES['photo']['tmp_name']))
		{
			$compteur++;
			$erreur .=$compteur .". Choississez une photo s.v.p!! ";
		}
		else
		{
			$destination = 'images/';
			move_uploaded_file($_FILES['photo']['tmp_name'], $destination.$_FILES['photo']['name']);
			$photo = $_FILES['photo']['name'];
		}

		if (empty($_POST['texte']))
		{
			$compteur++;
			$erreur .=$compteur .". Le texte n'est pas correct";
		}
		else
		{
			$texte = $_POST['texte'];
		}



	if($compteur == 0){

			include('connexion.php'); //connexion à la base de données

			$date_soumis = time();

			$requete = $bdd -> prepare('INSERT INTO article (titre, photo,texte ) VALUES(?,?,?)');

			$requete -> execute(array($titre, $photo, $texte));

		echo '<p>Votre Titre: '.$titre .'</p>';
		echo '<p>Votre Photo est: <br>'.$photo .'</p>';
		echo '<p>Votre Texte: '.$texte .'</p>';
		}

	else
		{
		echo 'Corrigez les erreurs suivants:<br/>'.$erreur;
		}

		
}

?>
