<?php 
	require_once '../config/connect.php';

	$id = $_GET['id'];

	mysqli_query($connect, "DELETE FROM `sosna` WHERE `sosna`.`id` = '$id'");

	header('Location: ../admin.php');
 ?>