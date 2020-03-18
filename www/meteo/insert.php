<?php

include 'connect.php';

if(isset($_POST['insert']))
{
    //get values form input text and number
    $ville = $_POST['ville'];
    $haut = $_POST['haut'];
    $bas = $_POST['bas'];

    $sql = 'INSERT INTO Météo (ville, haut, bas) VALUES (:ville, :haut, :bas)';

    $result = $bdd->prepare($sql);
    $exec = $result->execute(array(":ville"=>$ville,":haut"=>$haut,":bas"=>$bas));

    if($exec)
    {
        echo 'Data Inserted';
    }else{
        echo 'Data Not Inserted';
    }
}

?>