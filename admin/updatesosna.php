<?php 	
	require_once 'config/connect.php';

	$sosna_id = $_GET['id'];
	$sosna = mysqli_query($connect, "SELECT * FROM `sosna` WHERE `id` = '$sosna_id'");
	$sosna = mysqli_fetch_assoc($sosna);
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
	<form action="vendor/updatesosna.php" method="post">
		<input type="hidden" name="id" value="<?= $sosna['id'] ?>">
		<p>Квартал</p>
		<input type="text" name="kvartal" value="<?= $sosna['kvartal'] ?>">
		<p>Лесничество</p>
		<input type="text" name="lesnichestvo" value="<?= $sosna['lesnichestvo'] ?>">
		<p>Количество</p>
		<input type="text" name="kolvo" value="<?= $sosna['kolvo'] ?>">
		<br>
		<br>
		<button type="submit">Update</button>
	</form>
 </body>
 </html>