<?php 	
	require_once '../config/connect.php';
	
	$id = $_POST['id'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	mysqli_query($connect, "UPDATE `users` SET `first_name` = '$first_name', `last_name` = '$last_name',`email` = '$email', `password` = '$password' WHERE `users`.`id` = '$id'");

	header('Location: ../admin.php');
 ?>
