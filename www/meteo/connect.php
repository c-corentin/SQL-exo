<?php

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=mysql:3306;dbname=weatherapp;charset=utf8', 'root', 'tiger');

	// Set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch(PDOException $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

?>