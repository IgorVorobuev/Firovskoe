<?php 
	require_once '../config/connect.php';

	$id = $_GET['id'];

	mysqli_query($connect, "DELETE FROM `bereza` WHERE `bereza`.`id` = '$id'");

	header('Location: ../admin.php');
 ?>