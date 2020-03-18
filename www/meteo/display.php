<?php

$sql = 'SELECT * FROM Météo';

$result = $bdd->query($sql);
$data = $result->fetch();
//var_dump($data);

if ($data > 0) {
    echo '<table><tr><th>Ville</th><th>Maxima</th><th>Minima</th></tr>';

    // affiche les données de toutes la rangées
    while($row = $result->fetch()) {
        echo 
        '<tr>
            <td>'.$row['ville'].'</td>
            <td>'.$row['haut'].'</td>
            <td>'.$row['bas'].'</td>
        </tr>';
    }

    echo '</table>';
} else {
    echo '0 results';
}
?>

