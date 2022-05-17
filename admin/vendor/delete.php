<?php 
	require_once '../config/connect.php';

	$id = $_GET['id'];

	mysqli_query($connect, "DELETE FROM `news` WHERE `news`.`id` = '$id'");

	header('Location: ../admin.php');
 ?>