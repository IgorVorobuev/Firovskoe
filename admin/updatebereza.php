<?php 	
	require_once 'config/connect.php';

	$bereza_id = $_GET['id'];
	$bereza = mysqli_query($connect, "SELECT * FROM `bereza` WHERE `id` = '$bereza_id'");
	$bereza = mysqli_fetch_assoc($bereza);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Update El</title>
 </head>
 <body>
 	<h3>Изменить участок</h3>
	<form action="vendor/updatebereza.php" method="post">
		<input type="hidden" name="id" value="<?= $bereza['id'] ?>">
		<p>Квартал</p>
		<input type="text" name="kvartal" value="<?= $bereza['kvartal'] ?>">
		<p>Лесничество</p>
		<input type="text" name="lesnichestvo" value="<?= $bereza['lesnichestvo'] ?>">
		<p>Количество</p>
		<input type="text" name="kolvo" value="<?= $bereza['kolvo'] ?>">
		<br>
		<br>
		<button type="submit">Update</button>
	</form>
 </body>
 </html>