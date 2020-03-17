<?php

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=mysql:3306;dbname=weatherapp;charset=utf8', 'root', 'tiger');
}

catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

?>
