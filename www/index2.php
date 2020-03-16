<?php

try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=mysql:3306;dbname=weatherapp;charset=utf8', 'root', 'tiger');

	$sql = 'SELECT * FROM Météo';

	$result = $bdd->query($sql);
	$data = $result->fetch();
	//var_dump($data);

	if ($data > 0) {
		echo '<table><tr><th>Ville</th><th>Maxima</th><th>Minima</th></tr>';
		// output data of each row
		while($row = $result->fetch()) {
			echo '<tr><td>'.$row['ville'].'</td><td>'.$row['haut'].'</td><td>'.$row['bas'].'</td></tr>';
		}
		echo '</table>';
	} else {
		echo '0 results';
	}
	$result->closeCursor();
}

catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

?>