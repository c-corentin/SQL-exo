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

    <form method="post" action="index.php">
	<input type="submit" name="buttonDelete" value="Delete" onclick="return confirm('Are you sure?')" />
	<table cellpadding="2" cellspacing="2" border="1">
		<tr>
			<th><input type="checkbox" id="checkBoxAll" /></th>
			<th>Ville</th>
			<th>Maxima</th>
			<th>Minima</th>
		</tr>
		<?php while($data = $result->fetch(PDO::FETCH_OBJ)) { ?>
		<tr>
			<td><input type="checkbox" class="chkCheckBoxId"
				value="<?php echo $result->ville; ?>" name="ville[]" /></td>
			<td><?php echo $result->ville; ?></td>
			<td><?php echo $result->haut; ?></td>
			<td><?php echo $result->bas; ?></td>
		</tr>
		<?php } ?>
	</table>
</body>

</html>