<?php

include 'connect.php';

if(isset($_POST['buttonDelete'])) {
	if(isset($_POST['ville'])) {
		foreach ($_POST['ville'] as $ville) {
			$stmt = $bdd->prepare('delete from Météo where ville = :ville');
			$stmt->bindValue('ville', $ville);
			$stmt->execute();
		}
	}
}
$stmt = $bdd->prepare('select * from account');
$stmt->execute();
?>