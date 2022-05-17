<?php 	
	require_once 'config/connect.php';

	$users_id = $_GET['id'];
	$users = mysqli_query($connect, "SELECT * FROM `users` WHERE `id` = '$users_id'");
	$users = mysqli_fetch_assoc($users);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Update Admin</title>
 </head>
 <body>
 	<h3>Настроить аккаунт админа</h3>
	<form action="vendor/updateusers.php" method="post">
		<input type="hidden" name="id" value="<?= $users['id'] ?>">
		<p>Имя</p>
		<input type="text" name="first_name" value="<?= $users['first_name'] ?>">
		<p>Фамилия</p>
		<input type="text" name="last_name" value="<?= $users['last_name'] ?>">
		<p>Email</p>
		<input type="email" name="email" value="<?= $users['email'] ?>">
		<p>Password</p>
		<input type="password" name="password" value="<?= $users['password'] ?>">
		<br>
		<br>
		<button type="submit">Update</button>
	</form>
 </body>
 </html>