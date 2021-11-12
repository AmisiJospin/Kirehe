<?php
   $host='localhost';
   $db='igihe';
   $dbuser='root';
   $dbpw='';
   
   try
   {
     $bdd=new PDO('mysql:host='.$host.';dbname='.$db,''.$dbuser.'',''.$dbpw.'');
	 $bdd->exec("set names utf8");
   }
   
   catch (Exception $e)
    {
      die('Erreur:'.$e->getMessage());

    }	
	date_default_timezone_set('Africa/Bujumbura');
	setlocale (LC_TIME, 'fr_FR', 'fra');
?>