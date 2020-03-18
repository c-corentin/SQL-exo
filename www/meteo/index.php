<?php

require 'connect.php';
require 'display.php';
require 'insert.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="post">
        <p>
            <label for="ville">Ville:</label>
            <input type="text" name="ville" id="ville">
        </p>

        <p>
            <label for="haut">Maxima:</label>
            <input type="text" name="haut" id="haut">
        </p>

        <p>
            <label for="bas">Minima:</label>
            <input type="text" name="bas" id="bas">
        </p>

        <input type="submit" name="insert" value="submit">
    </form>
</body>

</html>