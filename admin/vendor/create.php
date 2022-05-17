<?php 
	require_once '../config/connect.php';

	$image = $_POST['img'];
	$title = $_POST['title'];
	$text = $_POST['text'];

	mysqli_query($connect, "INSERT INTO `news` (`id`, `image`, `title`, `text`) VALUES (NULL, '$image', '$title', '$text')");

	header('Location: ../admin.php');
 ?>