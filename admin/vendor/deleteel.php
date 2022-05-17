<?php 
	require_once '../config/connect.php';

	$id = $_GET['id'];

	mysqli_query($connect, "DELETE FROM `el` WHERE `el`.`id` = '$id'");

	header('Location: ../admin.php');
 ?>