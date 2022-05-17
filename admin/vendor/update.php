<?php 	
	require_once '../config/connect.php';
	
	$id = $_POST['id'];
	$image = $_POST['img'];
	$title = $_POST['title'];
	$text = $_POST['text'];

	mysqli_query($connect, "UPDATE `news` SET `image` = '$image', `title` = '$title', `text` = '$text' WHERE `news`.`id` = '$id'");

	header('Location: ../admin.php');
 ?>
