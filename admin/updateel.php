<?php 	
	require_once 'config/connect.php';

	$el_id = $_GET['id'];
	$el = mysqli_query($connect, "SELECT * FROM `el` WHERE `id` = '$el_id'");
	$el = mysqli_fetch_assoc($el);
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
	<form action="vendor/updateel.php" method="post">
		<input type="hidden" name="id" value="<?= $el['id'] ?>">
		<p>Квартал</p>
		<input type="text" name="kvartal" value="<?= $el['kvartal'] ?>">
		<p>Лесничество</p>
		<input type="text" name="lesnichestvo" value="<?= $el['lesnichestvo'] ?>">
		<p>Количество</p>
		<input type="text" name="kolvo" value="<?= $el['kolvo'] ?>">
		<br>
		<br>
		<button type="submit">Update</button>
	</form>
 </body>
 </html>